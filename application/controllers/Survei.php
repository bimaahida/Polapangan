<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Survei extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Survei_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('survei/survei_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Survei_model->json();
    }

    public function read($id) 
    {
        $row = $this->Survei_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'sayur' => $row->sayur,
		'buah' => $row->buah,
		'umbi-umbian' => $row->umbi-umbian,
		'hewani' => $row->hewani,
		'kacang-kacangan' => $row->kacang-kacangan,
		'keluarga_id' => $row->keluarga_id,
	    );
            $this->load->view('survei/survei_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('survei'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('survei/create_action'),
	    'id' => set_value('id'),
	    'sayur' => set_value('sayur'),
	    'buah' => set_value('buah'),
	    'umbi-umbian' => set_value('umbi-umbian'),
	    'hewani' => set_value('hewani'),
	    'kacang-kacangan' => set_value('kacang-kacangan'),
	    'keluarga_id' => set_value('keluarga_id'),
	);
        $this->load->view('survei/survei_form', $data);
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
		'umbi-umbian' => $this->input->post('umbi-umbian',TRUE),
		'hewani' => $this->input->post('hewani',TRUE),
		'kacang-kacangan' => $this->input->post('kacang-kacangan',TRUE),
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
                'button' => 'Update',
                'action' => site_url('survei/update_action'),
		'id' => set_value('id', $row->id),
		'sayur' => set_value('sayur', $row->sayur),
		'buah' => set_value('buah', $row->buah),
		'umbi-umbian' => set_value('umbi-umbian', $row->umbi-umbian),
		'hewani' => set_value('hewani', $row->hewani),
		'kacang-kacangan' => set_value('kacang-kacangan', $row->kacang-kacangan),
		'keluarga_id' => set_value('keluarga_id', $row->keluarga_id),
	    );
            $this->load->view('survei/survei_form', $data);
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
		'umbi-umbian' => $this->input->post('umbi-umbian',TRUE),
		'hewani' => $this->input->post('hewani',TRUE),
		'kacang-kacangan' => $this->input->post('kacang-kacangan',TRUE),
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
	$this->form_validation->set_rules('umbi-umbian', 'umbi-umbian', 'trim|required');
	$this->form_validation->set_rules('hewani', 'hewani', 'trim|required');
	$this->form_validation->set_rules('kacang-kacangan', 'kacang-kacangan', 'trim|required');
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
	xlsWriteLabel($tablehead, $kolomhead++, "Umbi-umbian");
	xlsWriteLabel($tablehead, $kolomhead++, "Hewani");
	xlsWriteLabel($tablehead, $kolomhead++, "Kacang-kacangan");
	xlsWriteLabel($tablehead, $kolomhead++, "Keluarga Id");

	foreach ($this->Survei_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->sayur);
	    xlsWriteNumber($tablebody, $kolombody++, $data->buah);
	    xlsWriteNumber($tablebody, $kolombody++, $data->umbi-umbian);
	    xlsWriteNumber($tablebody, $kolombody++, $data->hewani);
	    xlsWriteNumber($tablebody, $kolombody++, $data->kacang-kacangan);
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
/* Generated by Harviacode Codeigniter CRUD Generator 2018-04-27 07:43:12 */
/* http://harviacode.com */