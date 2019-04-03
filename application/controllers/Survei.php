<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Survei extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('acl');
        
        $data = $this->session->userdata('auth');
        $status = $data['status'];
        if (! $this->acl->is_public('survei'))
        {
            if (! $this->acl->is_allowed('survei', $status))
            {
                redirect('auth/logout','refresh');
            }
        }
        $this->load->model('Survei_model');
        $this->load->library('form_validation');        
        $this->load->library('datatables');
        $this->render['page_title'] = 'Survei';
        $this->render['menus'] = 'survei';
    }

    public function index()
    {
        $this->render['content']= $this->load->view('survei/survei_list',array(), TRUE);
        $this->load->view('template', $this->render);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        if ($this->session->userdata('auth')['status'] == 1) {
            echo $this->Survei_model->json();
        }else{
            echo $this->Survei_model->json_penyuluh($this->session->userdata('auth')['id']);
        }
    }

    public function read($id) 
    {
        $row = $this->Survei_model->get_by_id($id);
        if ($row) {
            $data = array(
            'id' => $row->id,
            'sayur' => $this->cek_status($row->sayur),
            'buah' => $this->cek_status($row->buah),
            'umbi' => $this->cek_status($row->umbi),
            'hewani' => $this->cek_status($row->hewani),
            'kacang' => $this->cek_status($row->kacang),
            'keluarga_id' => $row->keluarga_id,
            );
            $this->render['content']= $this->load->view('survei/survei_read',$data, TRUE);
            $this->load->view('template', $this->render);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('survei'));
        }
    }
    private function cek_status($params){
        if($params == 1){
            return '< 3 Kali';
        }else if ($params == 2) {
            return '2 - 3 Kali';
        }elseif ($params == 3) {
            return '6 - 10 Kali';
        }else{ 
            return '> 10 Kali';
        }
    }
    public function getKeluargaAutoComplate(){
        $this->load->model('Keluarga_model');
        if (isset($_GET['term'])) {
            $result = $this->Keluarga_model->autocomplate($_GET['term']);
            if (count($result) > 0) {
                //echo json_encode($result);
                foreach ($result as $row)
                $data[] = array(
                    'label' => $row->kepala_keluarga,
                    'value' => $row->id
                );
                echo json_encode($data);
           }
        }
    }
    public function create() 
    {
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('survei/create_action'),
	    'id' => set_value('id'),
	    'sayur' => set_value('sayur'),
	    'buah' => set_value('buah'),
	    'umbi' => set_value('umbi'),
	    'hewani' => set_value('hewani'),
	    'kacang' => set_value('kacang'),
        'keluarga_id' => set_value('keluarga_id'),
        'keluarga' => set_value('keluarga'),
    );
        $this->render['content']= $this->load->view('survei/survei_form',$data, TRUE);
        $this->load->view('template', $this->render);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'sayur' => $this->input->post('sayur',TRUE),
		'buah' => $this->input->post('buah',TRUE),
		'umbi' => $this->input->post('umbi',TRUE),
		'hewani' => $this->input->post('hewani',TRUE),
		'kacang' => $this->input->post('kacang',TRUE),
		'keluarga_id' => $this->input->post('keluarga_id',TRUE),
	    );

            $this->Survei_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('survei'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Survei_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Perbarui',
                'action' => site_url('survei/update_action'),
                'id' => set_value('id', $row->id),
                'sayur' => set_value('sayur', $row->sayur),
                'buah' => set_value('buah', $row->buah),
                'umbi' => set_value('umbi', $row->umbi),
                'hewani' => set_value('hewani', $row->hewani),
                'kacang' => set_value('kacang', $row->kacang),
                'keluarga_id' => set_value('keluarga_id', $row->keluarga_id),
                'keluarga' => set_value('keluarga', $row->kepala_keluarga),
	         );
            $this->render['content']= $this->load->view('survei/survei_form',$data, TRUE);
            $this->load->view('template', $this->render);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('survei'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'sayur' => $this->input->post('sayur',TRUE),
		'buah' => $this->input->post('buah',TRUE),
		'umbi' => $this->input->post('umbi',TRUE),
		'hewani' => $this->input->post('hewani',TRUE),
		'kacang' => $this->input->post('kacang',TRUE),
		'keluarga_id' => $this->input->post('keluarga_id',TRUE),
	    );

            $this->Survei_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('survei'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Survei_model->get_by_id($id);

        if ($row) {
            $this->Survei_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('survei'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('survei'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('sayur', 'sayur', 'trim|required');
	$this->form_validation->set_rules('buah', 'buah', 'trim|required');
	$this->form_validation->set_rules('umbi', 'umbi', 'trim|required');
	$this->form_validation->set_rules('hewani', 'hewani', 'trim|required');
	$this->form_validation->set_rules('kacang', 'kacang', 'trim|required');
	$this->form_validation->set_rules('keluarga_id', 'keluarga id', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "survei.xls";
        $judul = "survei";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Sayur");
	xlsWriteLabel($tablehead, $kolomhead++, "Buah");
	xlsWriteLabel($tablehead, $kolomhead++, "Umbi");
	xlsWriteLabel($tablehead, $kolomhead++, "Hewani");
	xlsWriteLabel($tablehead, $kolomhead++, "Kacang");
	xlsWriteLabel($tablehead, $kolomhead++, "Keluarga Id");

	foreach ($this->Survei_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->sayur);
	    xlsWriteNumber($tablebody, $kolombody++, $data->buah);
	    xlsWriteNumber($tablebody, $kolombody++, $data->umbi);
	    xlsWriteNumber($tablebody, $kolombody++, $data->hewani);
	    xlsWriteNumber($tablebody, $kolombody++, $data->kacang);
	    xlsWriteNumber($tablebody, $kolombody++, $data->keluarga_id);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Survei.php */
/* Location: ./application/controllers/Survei.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-04-28 16:17:59 */
/* http://harviacode.com */