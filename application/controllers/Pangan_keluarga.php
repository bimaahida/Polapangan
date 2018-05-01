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

    public function index($id)
    {
        $this->render['content']= $this->load->view('pangan_keluarga/pangan_keluarga_list', array('id'=> $id), TRUE);
        $this->load->view('template', $this->render);
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
            'keluarga_id' => $keluarga,
        );
        $this->render['content']= $this->load->view('pangan_keluarga/pangan_keluarga_form', $data, TRUE);
        $this->load->view('template', $this->render);
    }
    
    public function create_action($keluarga) 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create($keluarga);
        } else {
            $data = array(
            'nama' => $this->input->post('nama',TRUE),
            'tgl' => $this->input->post('tgl',TRUE),
            'keterangan' => $this->input->post('keterangan',TRUE),
            'keluarga_id' => $this->input->post('keluarga_id',TRUE),
            );

            $this->Pangan_keluarga_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pangan_keluarga/index/'.$keluarga));
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
                'keluarga_id' => set_value('keluarga_id', $row->keluarga_id),
                );
            $this->render['content']= $this->load->view('pangan_keluarga/pangan_keluarga_form', $data, TRUE);
            $this->load->view('template', $this->render);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pangan_keluarga/index/').$keluarga);
        }
    }
    
    public function update_action($keluarga) 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
            'nama' => $this->input->post('nama',TRUE),
            'tgl' => $this->input->post('tgl',TRUE),
            'keterangan' => $this->input->post('keterangan',TRUE),
            'keluarga_id' => $this->input->post('keluarga_id',TRUE),
            );

            $this->Pangan_keluarga_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pangan_keluarga/index/'.$keluarga));
        }
    }
    
    public function delete($id,$keluarga) 
    {
        $row = $this->Pangan_keluarga_model->get_by_id($id);

        if ($row) {
            $this->Pangan_keluarga_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pangan_keluarga/index/').$keluarga);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pangan_keluarga/index/').$keluarga);
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('tgl', 'tgl', 'trim|required');
	$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
	$this->form_validation->set_rules('keluarga_id', 'keluarga id', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "pangan_keluarga.xls";
        $judul = "pangan_keluarga";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl");
	xlsWriteLabel($tablehead, $kolomhead++, "Keterangan");
	xlsWriteLabel($tablehead, $kolomhead++, "Keluarga Id");

	foreach ($this->Pangan_keluarga_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl);
	    xlsWriteLabel($tablebody, $kolombody++, $data->keterangan);
	    xlsWriteNumber($tablebody, $kolombody++, $data->keluarga_id);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Pangan_keluarga.php */
/* Location: ./application/controllers/Pangan_keluarga.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-05-01 13:45:07 */
/* http://harviacode.com */