<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Detail_pangan_keluarga extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Detail_pangan_keluarga_model');
        $this->load->library('form_validation');        
        $this->load->library('datatables');
        $this->render['page_title'] = 'Detail Pangan Keluarga';
        $this->render['menus'] = 'keluarga';
    }

    public function detail_pangan($pangan){
        $this->render['content']= $this->load->view('detail_pangan_keluarga/detail_pangan_keluarga_list', array('id'=>$pangan), TRUE);
        $this->load->view('template', $this->render);
    } 

    public function index($tahun){
        $tahun_awal = ($tahun+0) - 1;
        $start = $tahun_awal."-01-01";
        $end = $tahun."-12-31";
        $data = $this->Detail_pangan_keluarga_model->pph($start,$end);
        $this->load->view('pangan_keluarga/pph', array('data'=> $data));
        
    }
    public function detail_view(){
        $tahun = $this->input->post('tahun',TRUE);
        $tahun_awal = ($tahun+0) - 1;
        $start = $tahun_awal."-01-01";
        $end = $tahun."-12-31";
        // var_dump($start);
        $data = $this->Detail_pangan_keluarga_model->pph($start,$end);
        $this->render['page_title'] = 'Pangan Harapan';
        $this->render['menus'] = 'pangan_harapan';
        $this->render['content']= $this->load->view('pangan_keluarga/pph_view',array('data'=> $data,'tahun' => $tahun), TRUE);
        $this->load->view('template', $this->render);
        
    }
    public function form_pph(){
        $data = array(
            'button' => 'Find',
            'action' => site_url('Detail_pangan_keluarga/detail_view'),
            'id' => set_value('id'),
        );
        $this->render['page_title'] = 'Pangan Harapan';
        $this->render['menus'] = 'pangan_harapan';
        $this->render['content']= $this->load->view('pangan_keluarga/form_pph',$data, TRUE);
        $this->load->view('template', $this->render);
    }
    
    public function json($pangan) {
        header('Content-Type: application/json');
        echo $this->Detail_pangan_keluarga_model->json($pangan);
    }

    public function get_urt($id){
        $this->load->model('Pangan_model');
        $result = $this->Pangan_model->get_by_id($id);
        echo json_encode($result);
    }

    public function read($id) 
    {
        $row = $this->Detail_pangan_keluarga_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'urt' => $row->urt,
		'berat' => $row->berat,
		'asal' => $row->asal,
		'rata_rata_berat' => $row->rata_rata_berat,
		'pangan_keluarga_id' => $row->pangan_keluarga_id,
		'pangan_id' => $row->pangan_id,
	    );
            $this->load->view('detail_pangan_keluarga/detail_pangan_keluarga_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('detail_pangan_keluarga'));
        }
    }

    public function create($pangan) 
    {
        $this->load->model('Pangan_model');
        $data = array(
            'button' => 'Create',
            'action' => site_url('detail_pangan_keluarga/create_action/'.$pangan),
            'id' => set_value('id'),
            'urt' => set_value('urt'),
            'asal' => set_value('asal'),
            'pangan_keluarga_id' => set_value('pangan_keluarga_id',$pangan),
            'pangan_id' => set_value('pangan_id'),
            'pangan' => $this->Pangan_model->get_all()
        );
        $this->render['content']= $this->load->view('detail_pangan_keluarga/detail_pangan_keluarga_form', $data, TRUE);
        $this->load->view('template', $this->render);
    }
    
    public function create_action($pangan) 
    {
        $this->load->model('Pangan_keluarga_model');
        $this->load->model('Pangan_model');
        $pangan_detail = $this->Pangan_keluarga_model->get_by_id($this->input->post('pangan_keluarga_id',TRUE));
        $pangan_data = $this->Pangan_model->get_by_id($this->input->post('pangan_id',TRUE));
        $rata =  ( $pangan_data->gram * $this->input->post('urt',TRUE))  / $pangan_detail->jumlah_pemakan;
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create($pangan);
        } else {
            $data = array(
            'urt' => $this->input->post('urt',TRUE),
            'berat' => $pangan_data->gram * $this->input->post('urt',TRUE),
            'asal' => $this->input->post('asal',TRUE),
            'rata_rata_berat' => $rata,
            'pangan_keluarga_id' => $this->input->post('pangan_keluarga_id',TRUE),
            'pangan_id' => $this->input->post('pangan_id',TRUE),
            );

            $this->Detail_pangan_keluarga_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            var_dump($pangan);
            redirect(site_url('detail_pangan_keluarga/detail_pangan/'.$pangan));
        }
    }
    
    public function update($id,$pangan) 
    {
        $this->load->model('Pangan_model');
        $row = $this->Detail_pangan_keluarga_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('detail_pangan_keluarga/update_action/'.$pangan),
                'id' => set_value('id', $row->id),
                'urt' => set_value('urt', $row->urt),
                'berat' => set_value('berat', $row->berat),
                'asal' => set_value('asal', $row->asal),
                'rata_rata_berat' => set_value('rata_rata_berat', $row->rata_rata_berat),
                'pangan_keluarga_id' => set_value('pangan_keluarga_id', $row->pangan_keluarga_id),
                'pangan_id' => set_value('pangan_id', $row->pangan_id),
                'pangan' => $this->Pangan_model->get_all()
                );
                $this->render['content']= $this->load->view('detail_pangan_keluarga/detail_pangan_keluarga_form', $data, TRUE);
                $this->load->view('template', $this->render);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('detail_pangan_keluarga/detail_pangan/'.$pangan));
        }
    }
    
    public function update_action($pangan) 
    {
        $this->load->model('Pangan_keluarga_model');
        $pangan_detail = $this->Pangan_keluarga_model->get_by_id($this->input->post('pangan_keluarga_id',TRUE));
        $rata =  $this->input->post('berat',TRUE) / $pangan_detail->jumlah_pemakan;

        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
            'urt' => $this->input->post('urt',TRUE),
            'berat' => $this->input->post('berat',TRUE),
            'asal' => $this->input->post('asal',TRUE),
            'rata_rata_berat' => $rata,
            'pangan_keluarga_id' => $this->input->post('pangan_keluarga_id',TRUE),
            'pangan_id' => $this->input->post('pangan_id',TRUE),
            );

            $this->Detail_pangan_keluarga_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('detail_pangan_keluarga/detail_pangan/'.$pangan));
        }
    }
    
    public function delete($id,$pangan) 
    {
        $row = $this->Detail_pangan_keluarga_model->get_by_id($id);

        if ($row) {
            $this->Detail_pangan_keluarga_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('detail_pangan_keluarga/detail_pangan/'.$pangan));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('detail_pangan_keluarga/detail_pangan/'.$pangan));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('urt', 'urt', 'trim|required|numeric');
	$this->form_validation->set_rules('asal', 'asal', 'trim|required');
	$this->form_validation->set_rules('pangan_keluarga_id', 'pangan keluarga id', 'trim|required');
	$this->form_validation->set_rules('pangan_id', 'pangan id', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Detail_pangan_keluarga.php */
/* Location: ./application/controllers/Detail_pangan_keluarga.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-05-15 13:23:58 */
/* http://harviacode.com */