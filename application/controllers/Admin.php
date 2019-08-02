<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('acl');
        
        $data = $this->session->userdata('auth');
        $status = $data['status'];
        if (! $this->acl->is_public('admin'))
        {
            if (! $this->acl->is_allowed('admin', $status))
            {
                redirect('auth/logout','refresh');
            }
        }
        $this->load->model('User_model');
        $this->load->library('form_validation');        
        $this->load->library('datatables');
        
        $this->render['page_title'] = 'Admin';
        $this->render['menus'] = 'Admin';
    }

    public function index()
    {
        $this->render['content']= $this->load->view('admin/admin_list', array(), TRUE);
        $this->load->view('template', $this->render);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->User_model->jsonAdmin();
    }
    public function acountAdmin(){
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('admin/acountAdmin_action'),
            'id' => set_value('id'),
            'nik' => set_value('nik'),
            'nama' => set_value('nama'),
            'status_id' => set_value('status_id'),  
        );
        $this->render['content']= $this->load->view('admin/admin_form', $data, TRUE);
        $this->load->view('template', $this->render);
    }
    public function acountAdmin_action() {
        $this->_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'nik' => $this->input->post('nik',TRUE),
                'nama' => $this->input->post('nama',TRUE),
                'password' => md5($this->input->post('nik',TRUE)),
                'status_id' => $this->input->post('status_id',TRUE),
            );
            
        $this->User_model->insert($data);
        $this->session->set_flashdata('message', 'Create Record Success');
        redirect(site_url('admin'));
        }
    }
    public function update($id) 
    {
        $row = $this->User_model->get_by_id($id);
        if ($row) {
            $data = array(
                'button' => 'Perbarui',
                'action' => site_url('admin/update_action'),
                'id' => set_value('id', $row->id),
                'nik' => set_value('nik', $row->nik),
                'nama' => set_value('nama', $row->nama),
                'status_id' => set_value('status_id',$row->status_id),
            );
            $this->render['content']= $this->load->view('admin/admin_form', $data, TRUE);
        $this->load->view('template', $this->render);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'nik' => $this->input->post('nik',TRUE),
                'nama' => $this->input->post('nama',TRUE),
                'password' => md5($this->input->post('nik',TRUE)),
                'status_id' => $this->input->post('status_id',TRUE),
            );

            $this->User_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->User_model->get_by_id($id);
        if ($row) {
            $this->User_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin'));
        }
    }

    public function _rules() 
    {
        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_rules('nik', 'nik', 'trim|required');
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
	    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}
?>