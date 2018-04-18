<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Keluarga extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Keluarga_model');
        $this->load->library('form_validation');        
        $this->load->library('datatables');
        
        $this->render['page_title'] = 'Keluarga';
        $this->render['menus'] = 'keluarga';
    }

    public function index()
    {
        $this->render['content']= $this->load->view('keluarga/keluarga_list', array(), TRUE);
        $this->load->view('template', $this->render);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Keluarga_model->json();
    }

    public function read($id) 
    {
        $row = $this->Keluarga_model->get_by_id($id);
        $this->load->library('googlemaps');

        if ($row) {
            $data = array(
            'id' => $row->id,
            'no_keluarga' => $row->no_keluarga,
            'kepala_keluarga' => $row->kepala_keluarga,
            'alamat' => $row->alamat,
            'provinsi' => $row->provinsi,
            'kab' => $row->kab,
            'kec' => $row->kec,
            'desa' => $row->desa,
            'rt' => $row->rt,
            'rw' => $row->rw,
            'kode_pos' => $row->kode_pos,
            );
            
            $config['center'] = "$row->latitude,$row->longitude";
            $config['zoom'] = '18';
            $this->googlemaps->initialize($config);
            
            $marker = array();
            $marker['position'] = "$row->latitude,$row->longitude";
            $this->googlemaps->add_marker($marker);
            $data['map'] = $this->googlemaps->create_map();

            $this->render['content']= $this->load->view('keluarga/keluarga_read', $data, TRUE);
            $this->load->view('template', $this->render);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keluarga'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('keluarga/create_action'),
            'id' => set_value('id'),
            'no_keluarga' => set_value('no_keluarga'),
            'kepala_keluarga' => set_value('kepala_keluarga'),
            'alamat' => set_value('alamat'),
            'provinsi' => set_value('provinsi'),
            'kab' => set_value('kab'),
            'kec' => set_value('kec'),
            'desa' => set_value('desa'),
            'rt' => set_value('rt'),
            'rw' => set_value('rw'),
            'kode_pos' => set_value('kode_pos'),
            'latitude' => set_value('latitude'),
            'longitude' => set_value('longitude'),
        );
        $this->render['content']= $this->load->view('keluarga/keluarga_form', $data, TRUE);
        $this->load->view('template', $this->render);
    }
    
    public function create_action() 
    {
        $this->_rules();

        $alamat = str_replace(' ', '+', $this->input->post('alamat',TRUE));
        $geocode=file_get_contents("https://maps.google.com/maps/api/geocode/json?key=AIzaSyBmBY0nTDRelXLlNUei_0SVEuogGzhQrvE&address=$alamat&sensor=false");
        
        $output= json_decode($geocode);
        var_dump($output);
        
        $lat = $output->results[0]->geometry->location->lat;
        $long = $output->results[0]->geometry->location->lng;

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
            'no_keluarga' => $this->input->post('no_keluarga',TRUE),
            'kepala_keluarga' => $this->input->post('kepala_keluarga',TRUE),
            'alamat' => $this->input->post('alamat',TRUE),
            'provinsi' => $this->input->post('provinsi',TRUE),
            'kab' => $this->input->post('kab',TRUE),
            'kec' => $this->input->post('kec',TRUE),
            'desa' => $this->input->post('desa',TRUE),
            'rt' => $this->input->post('rt',TRUE),
            'rw' => $this->input->post('rw',TRUE),
            'kode_pos' => $this->input->post('kode_pos',TRUE),
            'latitude' => $lat,
            'longitude' => $long,
            );

            $this->Keluarga_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('keluarga'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Keluarga_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('keluarga/update_action'),
                'id' => set_value('id', $row->id),
                'no_keluarga' => set_value('no_keluarga', $row->no_keluarga),
                'kepala_keluarga' => set_value('kepala_keluarga', $row->kepala_keluarga),
                'alamat' => set_value('alamat', $row->alamat),
                'provinsi' => set_value('provinsi', $row->provinsi),
                'kab' => set_value('kab', $row->kab),
                'kec' => set_value('kec', $row->kec),
                'desa' => set_value('desa', $row->desa),
                'rt' => set_value('rt', $row->rt),
                'rw' => set_value('rw', $row->rw),
                'kode_pos' => set_value('kode_pos', $row->kode_pos),
                'latitude' => set_value('latitude', $row->latitude),
                'longitude' => set_value('longitude', $row->longitude),
                );
            $this->render['content']= $this->load->view('keluarga/keluarga_form', $data, TRUE);
            $this->load->view('template', $this->render);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keluarga'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        $alamat = str_replace(' ', '+', $this->input->post('alamat',TRUE));
        $geocode=file_get_contents("https://maps.google.com/maps/api/geocode/json?key=AIzaSyBmBY0nTDRelXLlNUei_0SVEuogGzhQrvE&address=$alamat&sensor=false");
        
        $output= json_decode($geocode);
        var_dump($output);
        
        $lat = $output->results[0]->geometry->location->lat;
        $long = $output->results[0]->geometry->location->lng;


        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'no_keluarga' => $this->input->post('no_keluarga',TRUE),
		'kepala_keluarga' => $this->input->post('kepala_keluarga',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'provinsi' => $this->input->post('provinsi',TRUE),
		'kab' => $this->input->post('kab',TRUE),
		'kec' => $this->input->post('kec',TRUE),
		'desa' => $this->input->post('desa',TRUE),
		'rt' => $this->input->post('rt',TRUE),
		'rw' => $this->input->post('rw',TRUE),
		'kode_pos' => $this->input->post('kode_pos',TRUE),
		'latitude' =>  $lat,
		'longitude' => $long,
	    );

            $this->Keluarga_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('keluarga'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Keluarga_model->get_by_id($id);

        if ($row) {
            $this->Keluarga_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('keluarga'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keluarga'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('no_keluarga', 'no keluarga', 'trim|required');
	$this->form_validation->set_rules('kepala_keluarga', 'kepala keluarga', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('provinsi', 'provinsi', 'trim|required');
	$this->form_validation->set_rules('kab', 'kab', 'trim|required');
	$this->form_validation->set_rules('kec', 'kec', 'trim|required');
	$this->form_validation->set_rules('desa', 'desa', 'trim|required');
	$this->form_validation->set_rules('rt', 'rt', 'trim|required');
	$this->form_validation->set_rules('rw', 'rw', 'trim|required');
	$this->form_validation->set_rules('kode_pos', 'kode pos', 'trim|required');
	$this->form_validation->set_rules('latitude', 'latitude', 'trim|required');
	$this->form_validation->set_rules('longitude', 'longitude', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "keluarga.xls";
        $judul = "keluarga";
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
	xlsWriteLabel($tablehead, $kolomhead++, "No Keluarga");
	xlsWriteLabel($tablehead, $kolomhead++, "Kepala Keluarga");
	xlsWriteLabel($tablehead, $kolomhead++, "Alamat");
	xlsWriteLabel($tablehead, $kolomhead++, "Provinsi");
	xlsWriteLabel($tablehead, $kolomhead++, "Kab");
	xlsWriteLabel($tablehead, $kolomhead++, "Kec");
	xlsWriteLabel($tablehead, $kolomhead++, "Desa");
	xlsWriteLabel($tablehead, $kolomhead++, "Rt");
	xlsWriteLabel($tablehead, $kolomhead++, "Rw");
	xlsWriteLabel($tablehead, $kolomhead++, "Kode Pos");
	xlsWriteLabel($tablehead, $kolomhead++, "Latitude");
	xlsWriteLabel($tablehead, $kolomhead++, "Longitude");

	foreach ($this->Keluarga_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_keluarga);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kepala_keluarga);
	    xlsWriteLabel($tablebody, $kolombody++, $data->alamat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->provinsi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kab);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kec);
	    xlsWriteLabel($tablebody, $kolombody++, $data->desa);
	    xlsWriteLabel($tablebody, $kolombody++, $data->rt);
	    xlsWriteLabel($tablebody, $kolombody++, $data->rw);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kode_pos);
	    xlsWriteNumber($tablebody, $kolombody++, $data->latitude);
	    xlsWriteNumber($tablebody, $kolombody++, $data->longitude);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Keluarga.php */
/* Location: ./application/controllers/Keluarga.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-04-16 16:10:52 */
/* http://harviacode.com */