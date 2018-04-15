<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pangan_kandungan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pangan_kandungan_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('pangan_kandungan/pangan_kandungan_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Pangan_kandungan_model->json();
    }

    public function read($id) 
    {
        $row = $this->Pangan_kandungan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'kadar' => $row->kadar,
		'pangan_id' => $row->pangan_id,
		'kandungan_id' => $row->kandungan_id,
	    );
            $this->load->view('pangan_kandungan/pangan_kandungan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pangan_kandungan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pangan_kandungan/create_action'),
	    'id' => set_value('id'),
	    'kadar' => set_value('kadar'),
	    'pangan_id' => set_value('pangan_id'),
	    'kandungan_id' => set_value('kandungan_id'),
	);
        $this->load->view('pangan_kandungan/pangan_kandungan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kadar' => $this->input->post('kadar',TRUE),
		'kandungan_id' => $this->input->post('kandungan_id',TRUE),
	    );

            $this->Pangan_kandungan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pangan_kandungan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pangan_kandungan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pangan_kandungan/update_action'),
		'id' => set_value('id', $row->id),
		'kadar' => set_value('kadar', $row->kadar),
		'pangan_id' => set_value('pangan_id', $row->pangan_id),
		'kandungan_id' => set_value('kandungan_id', $row->kandungan_id),
	    );
            $this->load->view('pangan_kandungan/pangan_kandungan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pangan_kandungan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'kadar' => $this->input->post('kadar',TRUE),
		'kandungan_id' => $this->input->post('kandungan_id',TRUE),
	    );

            $this->Pangan_kandungan_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pangan_kandungan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pangan_kandungan_model->get_by_id($id);

        if ($row) {
            $this->Pangan_kandungan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pangan_kandungan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pangan_kandungan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kadar', 'kadar', 'trim|required|numeric');
	$this->form_validation->set_rules('kandungan_id', 'kandungan id', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "pangan_kandungan.xls";
        $judul = "pangan_kandungan";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Kadar");
	xlsWriteLabel($tablehead, $kolomhead++, "Kandungan Id");

	foreach ($this->Pangan_kandungan_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->kadar);
	    xlsWriteNumber($tablebody, $kolombody++, $data->kandungan_id);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Pangan_kandungan.php */
/* Location: ./application/controllers/Pangan_kandungan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-04-15 10:06:15 */
/* http://harviacode.com */