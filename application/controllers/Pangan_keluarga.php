<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pangan_keluarga extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pangan_keluarga_model');
        $this->load->library('form_validation');        
        $this->load->library('datatables');
        $this->render['page_title'] = 'Pangan Keluarga';
        $this->render['menus'] = 'keluarga';
    }

    public function data_pangan($id)
    {
        $this->render['content']= $this->load->view('pangan_keluarga/pangan_keluarga_list', array('id'=>$id), TRUE);
        $this->load->view('template', $this->render);
    } 

    public function laporan($id){
        $this->load->model('User_keluarga_model');
        $data = $this->Pangan_keluarga_model->get_all($id);
        $keluarga = $this->User_keluarga_model->get_relasion_keluarga($id);
        //var_dump($keluarga);
        $this->load->view('pangan_keluarga/laporan', array('data'=> $data,'keluarga' => $keluarga));
    }
    
    public function json($id) {
        header('Content-Type: application/json');
        echo $this->Pangan_keluarga_model->json($id);
    }

    public function read($id) 
    {
        $row = $this->Pangan_keluarga_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nama' => $row->nama,
		'tgl' => $row->tgl,
		'keterangan' => $row->keterangan,
		'jumlah_pemakan' => $row->jumlah_pemakan,
		'keluarga_id' => $row->keluarga_id,
	    );
            $this->load->view('pangan_keluarga/pangan_keluarga_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pangan_keluarga'));
        }
    }

    public function create($keluarga) 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pangan_keluarga/create_action/'.$keluarga),
            'id' => set_value('id'),
            'nama' => set_value('nama'),
            'tgl' => set_value('tgl'),
            'keterangan' => set_value('keterangan'),
            'jumlah_pemakan' => set_value('jumlah_pemakan'),
            'keluarga_id' => set_value('keluarga_id',$keluarga),
        );
        $this->render['content']= $this->load->view('pangan_keluarga/pangan_keluarga_form', $data, TRUE);
        $this->load->view('template', $this->render);
    }
    public function insert_auto(){
        $this->load->model('Pangan_model');
        $this->load->model('Detail_pangan_keluarga_model');
        $keterangan = array('Makan Siang','Makan Pagi','Makan Malam');
        $asal = array('Pekarangan','Beli','Diberi');
        $makanan = array('Mie aceh','Sie itek','Karee kameng','Keumamah','Gulai kepala ikan','Ayam tangkap','Nasi guri','Soto Medan','Kwetiau kerang','Bihun kari','Gurame kencong','Gulai ikan salai','Anyang','Ikan tombur','Arsik ikan mas','Ikan asam pedas','Sop ikan',' Nasi ulam','Nasi uduk','Soto betawi','Gado gado','Gurame pecak','Gabus pucung','Nasi ganduk','Mangut','Ayam lodho','Rawon','Rujak cingur','Lawar kenus','Ayam plecingan','Srombotan','Ikan jelawat kukus','Goropa woku blanga',' Sambal raja','Daging Sei','Nasi goreng piritan','Gurame pesmol','Sangu tutug oncom','Gudeg mangar','Mangut','Lontong opor','Sate bandeng','Gabus pucung','Ikan kuah asam','Sogili woku daun','Tinutuan','Nasi kuning','Binte biluhuta','Kaledo','Bebek betutu');
        $hasil_pangan = array();
        $hasil_detail = array();
        
        for ($i=0; $i < 5 ; $i++) { 
            $start = strtotime("1 January 2014");
            $end = strtotime("31 December 2018");
            
            $timestamp = mt_rand($start, $end);
            $pemakan = rand(1,4);

            $data = array(
                'nama' => $makanan[rand(0,49)],
                'tgl' => date("Y-m-d", $timestamp),
                'keterangan' => $keterangan[rand(0,2)],
                'jumlah_pemakan' => $pemakan,
                'keluarga_id' => rand(1,25),
            );
            $inser_pangan_keluarga =  $this->Pangan_keluarga_model->insert($data);
            array_push($hasil_pangan,$inser_pangan_keluarga);

            for ($i=0; $i < 3; $i++) { 
                $pangan_id = rand(1,142);
                $pangan_data = $this->Pangan_model->get_by_id($pangan_id);
                $urt = rand(1,5);
                $rata =  ( $pangan_data->gram * $urt)  / $pemakan;
                $data_detail = array(
                    'urt' => $urt,
                    'berat' => $pangan_data->gram * $urt,
                    'asal' => $asal[rand(0,2)],
                    'rata_rata_berat' => $rata,
                    'pangan_keluarga_id' =>  $inser_pangan_keluarga,
                    'pangan_id' => $pangan_id,
                );
                $this->Detail_pangan_keluarga_model->insert($data_detail);
                array_push($hasil_detail,$inser_pangan_keluarga);
            }
        }
        print_r($hasil_pangan);
        print_r($hasil_detail);
        
    }
    
    public function create_action($keluarga) 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
            'nama' => $this->input->post('nama',TRUE),
            'tgl' => $this->input->post('tgl',TRUE),
            'keterangan' => $this->input->post('keterangan',TRUE),
            'jumlah_pemakan' => $this->input->post('jumlah_pemakan',TRUE),
            'keluarga_id' => $this->input->post('keluarga_id',TRUE),
            );

            $this->Pangan_keluarga_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pangan_keluarga/data_pangan/'.$keluarga));
        }
    }
    
    public function update($id,$keluarga) 
    {
        $row = $this->Pangan_keluarga_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pangan_keluarga/update_action/'.$keluarga),
                'id' => set_value('id', $row->id),
                'nama' => set_value('nama', $row->nama),
                'tgl' => set_value('tgl', $row->tgl),
                'keterangan' => set_value('keterangan', $row->keterangan),
                'jumlah_pemakan' => set_value('jumlah_pemakan', $row->jumlah_pemakan),
                'keluarga_id' => set_value('keluarga_id', $row->keluarga_id),
                );
            $this->render['content']= $this->load->view('pangan_keluarga/pangan_keluarga_form', $data, TRUE);
            $this->load->view('template', $this->render);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pangan_keluarga/data_pangan/'.$keluarga));
        }
    }
    
    public function update_action($keluarga) 
    {
        
        $this->load->model('Detail_pangan_keluarga_model');
        $detail_pangan = $this->Detail_pangan_keluarga_model->get_by_pangan_keluarga($this->input->post('id', TRUE));
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE),$keluarga);
        } else {
            if ($this->input->post('jumlah_pemakan',TRUE) != $this->input->post('jumlah_pemakan_lama',TRUE)) {
                if (!empty($detail_pangan)) {
                    foreach ($detail_pangan as $key) {
                        $berat = $key->berat;
                        $data = array(
                            'rata_rata_berat' => $berat / $this->input->post('jumlah_pemakan',TRUE),
                        );
                        $this->Detail_pangan_keluarga_model->update($key->id, $data);
                    }
                }
            }

            $data = array(
            'nama' => $this->input->post('nama',TRUE),
            'tgl' => $this->input->post('tgl',TRUE),
            'keterangan' => $this->input->post('keterangan',TRUE),
            'jumlah_pemakan' => $this->input->post('jumlah_pemakan',TRUE),
            'keluarga_id' => $this->input->post('keluarga_id',TRUE),
            );

            $this->Pangan_keluarga_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pangan_keluarga/data_pangan/'.$keluarga));
        }
    }
    
    public function delete($id,$keluarga) 
    {
        $row = $this->Pangan_keluarga_model->get_by_id($id);

        if ($row) {
            $this->Pangan_keluarga_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pangan_keluarga/data_pangan/'.$keluarga));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pangan_keluarga/data_pangan/'.$keluarga));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('tgl', 'tgl', 'trim|required');
	$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
	$this->form_validation->set_rules('jumlah_pemakan', 'jumlah pemakan', 'trim|required');
	$this->form_validation->set_rules('keluarga_id', 'keluarga id', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pangan_keluarga.php */
/* Location: ./application/controllers/Pangan_keluarga.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-05-15 13:24:39 */
/* http://harviacode.com */