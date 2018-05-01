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
    }

    public function index()
    {
        $this->load->view('detail_pangan_keluarga/detail_pangan_keluarga_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Detail_pangan_keluarga_model->json();
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
		'jumlah_pemakan' => $row->jumlah_pemakan,
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

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('detail_pangan_keluarga/create_action'),
	    'id' => set_value('id'),
	    'urt' => set_value('urt'),
	    'berat' => set_value('berat'),
	    'asal' => set_value('asal'),
	    'jumlah_pemakan' => set_value('jumlah_pemakan'),
	    'rata_rata_berat' => set_value('rata_rata_berat'),
	    'pangan_keluarga_id' => set_value('pangan_keluarga_id'),
	    'pangan_id' => set_value('pangan_id'),
	);
        $this->load->view('detail_pangan_keluarga/detail_pangan_keluarga_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'urt' => $this->input->post('urt',TRUE),
		'berat' => $this->input->post('berat',TRUE),
		'asal' => $this->input->post('asal',TRUE),
		'jumlah_pemakan' => $this->input->post('jumlah_pemakan',TRUE),
		'rata_rata_berat' => $this->input->post('rata_rata_berat',TRUE),
		'pangan_keluarga_id' => $this->input->post('pangan_keluarga_id',TRUE),
		'pangan_id' => $this->input->post('pangan_id',TRUE),
	    );

            $this->Detail_pangan_keluarga_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('detail_pangan_keluarga'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Detail_pangan_keluarga_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('detail_pangan_keluarga/update_action'),
		'id' => set_value('id', $row->id),
		'urt' => set_value('urt', $row->urt),
		'berat' => set_value('berat', $row->berat),
		'asal' => set_value('asal', $row->asal),
		'jumlah_pemakan' => set_value('jumlah_pemakan', $row->jumlah_pemakan),
		'rata_rata_berat' => set_value('rata_rata_berat', $row->rata_rata_berat),
		'pangan_keluarga_id' => set_value('pangan_keluarga_id', $row->pangan_keluarga_id),
		'pangan_id' => set_value('pangan_id', $row->pangan_id),
	    );
            $this->load->view('detail_pangan_keluarga/detail_pangan_keluarga_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('detail_pangan_keluarga'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'urt' => $this->input->post('urt',TRUE),
		'berat' => $this->input->post('berat',TRUE),
		'asal' => $this->input->post('asal',TRUE),
		'jumlah_pemakan' => $this->input->post('jumlah_pemakan',TRUE),
		'rata_rata_berat' => $this->input->post('rata_rata_berat',TRUE),
		'pangan_keluarga_id' => $this->input->post('pangan_keluarga_id',TRUE),
		'pangan_id' => $this->input->post('pangan_id',TRUE),
	    );

            $this->Detail_pangan_keluarga_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('detail_pangan_keluarga'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Detail_pangan_keluarga_model->get_by_id($id);

        if ($row) {
            $this->Detail_pangan_keluarga_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('detail_pangan_keluarga'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('detail_pangan_keluarga'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('urt', 'urt', 'trim|required|numeric');
	$this->form_validation->set_rules('berat', 'berat', 'trim|required|numeric');
	$this->form_validation->set_rules('asal', 'asal', 'trim|required');
	$this->form_validation->set_rules('jumlah_pemakan', 'jumlah pemakan', 'trim|required');
	$this->form_validation->set_rules('rata_rata_berat', 'rata rata berat', 'trim|required|numeric');
	$this->form_validation->set_rules('pangan_keluarga_id', 'pangan keluarga id', 'trim|required');
	$this->form_validation->set_rules('pangan_id', 'pangan id', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "detail_pangan_keluarga.xls";
        $judul = "detail_pangan_keluarga";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Urt");
	xlsWriteLabel($tablehead, $kolomhead++, "Berat");
	xlsWriteLabel($tablehead, $kolomhead++, "Asal");
	xlsWriteLabel($tablehead, $kolomhead++, "Jumlah Pemakan");
	xlsWriteLabel($tablehead, $kolomhead++, "Rata Rata Berat");
	xlsWriteLabel($tablehead, $kolomhead++, "Pangan Keluarga Id");
	xlsWriteLabel($tablehead, $kolomhead++, "Pangan Id");

	foreach ($this->Detail_pangan_keluarga_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->urt);
	    xlsWriteNumber($tablebody, $kolombody++, $data->berat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->asal);
	    xlsWriteNumber($tablebody, $kolombody++, $data->jumlah_pemakan);
	    xlsWriteNumber($tablebody, $kolombody++, $data->rata_rata_berat);
	    xlsWriteNumber($tablebody, $kolombody++, $data->pangan_keluarga_id);
	    xlsWriteNumber($tablebody, $kolombody++, $data->pangan_id);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Detail_pangan_keluarga.php */
/* Location: ./application/controllers/Detail_pangan_keluarga.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-05-01 13:44:55 */
/* http://harviacode.com */