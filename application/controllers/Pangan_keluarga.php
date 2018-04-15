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
    }

    public function index()
    {
        $this->load->view('pangan_keluarga/pangan_keluarga_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Pangan_keluarga_model->json();
    }

    public function read($id) 
    {
        $row = $this->Pangan_keluarga_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'tgl' => $row->tgl,
		'keterangan' => $row->keterangan,
		'keluarga_id' => $row->keluarga_id,
		'pangan_id' => $row->pangan_id,
	    );
            $this->load->view('pangan_keluarga/pangan_keluarga_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pangan_keluarga'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pangan_keluarga/create_action'),
	    'id' => set_value('id'),
	    'tgl' => set_value('tgl'),
	    'keterangan' => set_value('keterangan'),
	    'keluarga_id' => set_value('keluarga_id'),
	    'pangan_id' => set_value('pangan_id'),
	);
        $this->load->view('pangan_keluarga/pangan_keluarga_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tgl' => $this->input->post('tgl',TRUE),
		'keterangan' => $this->input->post('keterangan',TRUE),
		'keluarga_id' => $this->input->post('keluarga_id',TRUE),
		'pangan_id' => $this->input->post('pangan_id',TRUE),
	    );

            $this->Pangan_keluarga_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pangan_keluarga'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pangan_keluarga_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pangan_keluarga/update_action'),
		'id' => set_value('id', $row->id),
		'tgl' => set_value('tgl', $row->tgl),
		'keterangan' => set_value('keterangan', $row->keterangan),
		'keluarga_id' => set_value('keluarga_id', $row->keluarga_id),
		'pangan_id' => set_value('pangan_id', $row->pangan_id),
	    );
            $this->load->view('pangan_keluarga/pangan_keluarga_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pangan_keluarga'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'tgl' => $this->input->post('tgl',TRUE),
		'keterangan' => $this->input->post('keterangan',TRUE),
		'keluarga_id' => $this->input->post('keluarga_id',TRUE),
		'pangan_id' => $this->input->post('pangan_id',TRUE),
	    );

            $this->Pangan_keluarga_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pangan_keluarga'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pangan_keluarga_model->get_by_id($id);

        if ($row) {
            $this->Pangan_keluarga_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pangan_keluarga'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pangan_keluarga'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tgl', 'tgl', 'trim|required');
	$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
	$this->form_validation->set_rules('keluarga_id', 'keluarga id', 'trim|required');
	$this->form_validation->set_rules('pangan_id', 'pangan id', 'trim|required');

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
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl");
	xlsWriteLabel($tablehead, $kolomhead++, "Keterangan");
	xlsWriteLabel($tablehead, $kolomhead++, "Keluarga Id");
	xlsWriteLabel($tablehead, $kolomhead++, "Pangan Id");

	foreach ($this->Pangan_keluarga_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl);
	    xlsWriteLabel($tablebody, $kolombody++, $data->keterangan);
	    xlsWriteNumber($tablebody, $kolombody++, $data->keluarga_id);
	    xlsWriteNumber($tablebody, $kolombody++, $data->pangan_id);

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
/* Generated by Harviacode Codeigniter CRUD Generator 2018-04-15 10:06:15 */
/* http://harviacode.com */