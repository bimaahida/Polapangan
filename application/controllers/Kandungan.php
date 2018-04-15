<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kandungan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kandungan_model');
        $this->load->library('form_validation');        
        $this->load->library('datatables');
        
        $this->render['page_title'] = 'Kandungan';
        $this->render['menus'] = 'kandungan';
    }

    public function index()
    {
        $this->render['content']= $this->load->view('kandungan/kandungan_list', array(), TRUE);
        $this->load->view('template', $this->render);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Kandungan_model->json();
    }

    public function read($id) 
    {
        $row = $this->Kandungan_model->get_by_id($id);
        if ($row) {
            $data = array(
            'id' => $row->id,
            'nama' => $row->nama,
            );

            $this->render['content']= $this->load->view('kandungan/kandungan_read', $data, TRUE);
            $this->load->view('template', $this->render);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kandungan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('kandungan/create_action'),
            'id' => set_value('id'),
            'nama' => set_value('nama'),
        );
        $this->render['content']= $this->load->view('kandungan/kandungan_form', $data, TRUE);
        $this->load->view('template', $this->render);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
	    );

            $this->Kandungan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('kandungan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Kandungan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('kandungan/update_action'),
                'id' => set_value('id', $row->id),
                'nama' => set_value('nama', $row->nama),
            );
            $this->render['content']= $this->load->view('kandungan/kandungan_form', $data, TRUE);
            $this->load->view('template', $this->render);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kandungan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
	    );

            $this->Kandungan_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('kandungan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Kandungan_model->get_by_id($id);

        if ($row) {
            $this->Kandungan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('kandungan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kandungan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "kandungan.xls";
        $judul = "kandungan";
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

	foreach ($this->Kandungan_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Kandungan.php */
/* Location: ./application/controllers/Kandungan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-04-15 10:06:14 */
/* http://harviacode.com */