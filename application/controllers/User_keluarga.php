<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_keluarga extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_keluarga_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('user_keluarga/user_keluarga_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->User_keluarga_model->json();
    }

    public function read($id) 
    {
        $row = $this->User_keluarga_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'user_id' => $row->user_id,
		'keluarga_id' => $row->keluarga_id,
	    );
            $this->load->view('user_keluarga/user_keluarga_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_keluarga'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('user_keluarga/create_action'),
	    'id' => set_value('id'),
	    'user_id' => set_value('user_id'),
	    'keluarga_id' => set_value('keluarga_id'),
	);
        $this->load->view('user_keluarga/user_keluarga_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'user_id' => $this->input->post('user_id',TRUE),
		'keluarga_id' => $this->input->post('keluarga_id',TRUE),
	    );

            $this->User_keluarga_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('user_keluarga'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->User_keluarga_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('user_keluarga/update_action'),
		'id' => set_value('id', $row->id),
		'user_id' => set_value('user_id', $row->user_id),
		'keluarga_id' => set_value('keluarga_id', $row->keluarga_id),
	    );
            $this->load->view('user_keluarga/user_keluarga_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_keluarga'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'user_id' => $this->input->post('user_id',TRUE),
		'keluarga_id' => $this->input->post('keluarga_id',TRUE),
	    );

            $this->User_keluarga_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('user_keluarga'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->User_keluarga_model->get_by_id($id);

        if ($row) {
            $this->User_keluarga_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('user_keluarga'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_keluarga'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('user_id', 'user id', 'trim|required');
	$this->form_validation->set_rules('keluarga_id', 'keluarga id', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "user_keluarga.xls";
        $judul = "user_keluarga";
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
	xlsWriteLabel($tablehead, $kolomhead++, "User Id");
	xlsWriteLabel($tablehead, $kolomhead++, "Keluarga Id");

	foreach ($this->User_keluarga_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->user_id);
	    xlsWriteNumber($tablebody, $kolombody++, $data->keluarga_id);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file User_keluarga.php */
/* Location: ./application/controllers/User_keluarga.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-04-15 10:06:16 */
/* http://harviacode.com */