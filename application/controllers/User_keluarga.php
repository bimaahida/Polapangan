<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_keluarga extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('acl');
        
        $data = $this->session->userdata('auth');
        $status = $data['status'];
        if (! $this->acl->is_public('user_keluarga'))
        {
            if (! $this->acl->is_allowed('user_keluarga', $status))
            {
                redirect('auth/logout','refresh');
            }
        }
        $this->load->model('User_keluarga_model');
        $this->load->library('form_validation');        
        $this->load->library('datatables');
        
        $this->render['page_title'] = 'User Keluarga';
        $this->render['menus'] = 'keluarga';
        
    }

    public function index($id)
    {
        $this->render['content']= $this->load->view('user_keluarga/user_keluarga_list', array('id'=> $id), TRUE);
        $this->load->view('template', $this->render);
    } 

    function get_autocomplete(){
        $this->load->model('User_model');
        if (isset($_GET['term'])) {
            $result = $this->User_model->get_by_name($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                $date_now = new DateTime();
                $diff = $date_now->diff(new DateTime($row->tgl_lahir));
                    $arr_result[] = array(
                        'label' => $row->nama . ' | '. $diff->y .' Tahun',
                        'id'   => $row->id,
                 );
                    echo json_encode($arr_result);
            }
        }
    }
    
    public function json($id) {
        header('Content-Type: application/json');
        echo $this->User_keluarga_model->json($id);
    }

    public function read($id) 
    {
        $row = $this->User_keluarga_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'user_id' => $row->user_id,
		'keluarga_id' => $row->keluarga_id,
		'hubungan' => $row->hubungan,
	    );
            $this->load->view('user_keluarga/user_keluarga_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_keluarga'));
        }
    }

    public function create($keluarga) 
    {
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('user_keluarga/create_action/'.$keluarga),
            'id' => set_value('id'),
            'user_id' => set_value('user_id'),
            'keluarga_id' => $keluarga,
            'hubungan' => set_value('hubungan'),
        );
        $this->render['content']= $this->load->view('user_keluarga/user_keluarga_form', $data, TRUE);
        $this->load->view('template', $this->render);
    }
    
    public function create_action($keluarga) 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create($keluarga);
        } else {
            $data = array(
            'user_id' => $this->input->post('user_id',TRUE),
            'keluarga_id' => $this->input->post('keluarga_id',TRUE),
            'hubungan' => $this->input->post('hubungan',TRUE),
            );

            $this->User_keluarga_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('user_keluarga/index/').$keluarga);
        }
    }
    
    public function update($id) 
    {
        $row = $this->User_keluarga_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Perbarui',
                'action' => site_url('user_keluarga/update_action'),
		'id' => set_value('id', $row->id),
		'user_id' => set_value('user_id', $row->user_id),
		'keluarga_id' => set_value('keluarga_id', $row->keluarga_id),
		'hubungan' => set_value('hubungan', $row->hubungan),
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
		'hubungan' => $this->input->post('hubungan',TRUE),
	    );

            $this->User_keluarga_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('user_keluarga'));
        }
    }
    
    public function delete($id,$keluarga) 
    {
        $row = $this->User_keluarga_model->get_by_id($id);

        if ($row) {
            $this->User_keluarga_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('user_keluarga/index/').$keluarga);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_keluarga/index/').$keluarga);
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('user_id', 'user id', 'trim|required');
	$this->form_validation->set_rules('keluarga_id', 'keluarga id', 'trim|required');
	$this->form_validation->set_rules('hubungan', 'hubungan', 'trim|required');

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
	xlsWriteLabel($tablehead, $kolomhead++, "Hubungan");

	foreach ($this->User_keluarga_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->user_id);
	    xlsWriteNumber($tablebody, $kolombody++, $data->keluarga_id);
	    xlsWriteLabel($tablebody, $kolombody++, $data->hubungan);

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
/* Generated by Harviacode Codeigniter CRUD Generator 2018-04-27 07:43:00 */
/* http://harviacode.com */