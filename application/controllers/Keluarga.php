<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Keluarga extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('acl');
        
        $data = $this->session->userdata('auth');
        $status = $data['status'];
        if (! $this->acl->is_public('keluarga'))
        {
            if (! $this->acl->is_allowed('keluarga', $status))
            {
                redirect('auth/logout','refresh');
            }
        }
        $this->load->model('Keluarga_model');
        $this->load->library('form_validation');        
        $this->load->library('datatables');
        
        $this->render['page_title'] = 'Keluarga';
        $this->render['menus'] = 'keluarga';
    }

    public function index()
    {
        // var_dump($this->session->userdata('auth'));
        $this->render['content']= $this->load->view('keluarga/keluarga_list', array(), TRUE);
        $this->load->view('template', $this->render);
    } 

    function get_autocomplete(){
        $this->load->model('User_model');
        if (isset($_GET['term'])) {
            $result = $this->User_model->get_kepalaKeluarga($_GET['term']);
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

    public function rekap(){
        $data = array(
            'button' => 'Cari',
            'action' => site_url('keluarga/rekap_action'),
            'desa' => $this->Keluarga_model->get_desa($this->session->userdata('auth')['id'])
        );
        $this->render['content']= $this->load->view('keluarga/rekap_form', $data, TRUE);
        $this->load->view('template', $this->render);
    }

    public function DataAsalBahanPangan(){
        $this->load->model('Detail_pangan_keluarga_model');
        $data=array(
            'beli' => $this->Detail_pangan_keluarga_model->get_bahan_pangan_report('beli'),
            'pekarangan' => $this->Detail_pangan_keluarga_model->get_bahan_pangan_report('pekarangan'),
            'diberi' => $this->Detail_pangan_keluarga_model->get_bahan_pangan_report('diberi'),
        );
        $lengths = count(max($data));
        $this->load->view('keluarga/pangan_asal_laporan', array('data' => $data, 'length' => $lengths));
    }
    public function rekap_action(){
        $this->form_validation->set_rules('desa', 'Desa', 'trim|required');
        $this->form_validation->set_rules('tgl', 'Tanggal', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->rekap();
        } else {
           $tgl_select = $this->input->post('tgl',TRUE);
           $tgl_after = date('Y-m-d', strtotime($tgl_select. ' + 2 days'));
           $desa = $this->input->post('desa',TRUE);

            // $this->Keluarga_model->insert($data);
            // $this->session->set_flashdata('message', 'Create Record Success');
            // redirect(site_url('keluarga'));
        }
    }
    
    public function json() {
        header('Content-Type: application/json');
        if ($this->session->userdata('auth')['status'] == 1) {
            echo $this->Keluarga_model->json();   
        }else{
            echo $this->Keluarga_model->json_penyuluh($this->session->userdata('auth')['id']);
        }
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
            'button' => 'Tambah',
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
            'baru_menikah' => set_value('baru_menikah'),
            'hamil' => set_value('hamil'),
            'menyusui' => set_value('menyusui'),
            'stunting' => set_value('stunting'),
            'penyuluh_id' =>set_value('penyuluh_id',$this->session->userdata('auth')['id'])
        );
        $this->render['content']= $this->load->view('keluarga/keluarga_form', $data, TRUE);
        $this->load->view('template', $this->render);
    }
    
    public function create_action() 
    {
        $this->_rules();

        // $alamat = str_replace(' ', '+', $this->input->post('alamat',TRUE));
        // $geocode=file_get_contents("https://maps.google.com/maps/api/geocode/json?key=AIzaSyBmBY0nTDRelXLlNUei_0SVEuogGzhQrvE&address=$alamat&sensor=false");
        
        // $output= json_decode($geocode);
        // //var_dump($output);
        
        // $lat = $output->results[0]->geometry->location->lat;
        // $long = $output->results[0]->geometry->location->lng;
        // $kepala = explode('|',$this->input->post('kepala_keluarga',TRUE));

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            // $data = array(
            // 'no_keluarga' => $this->input->post('no_keluarga',TRUE),
            // 'kepala_keluarga' => $kepala[0],
            // 'alamat' => $this->input->post('alamat',TRUE),
            // 'provinsi' => $this->input->post('provinsi',TRUE),
            // 'kab' => $this->input->post('kab',TRUE),
            // 'kec' => $this->input->post('kec',TRUE),
            // 'desa' => $this->input->post('desa',TRUE),
            // 'rt' => $this->input->post('rt',TRUE),
            // 'rw' => $this->input->post('rw',TRUE),
            // 'kode_pos' => $this->input->post('kode_pos',TRUE),
            // 'latitude' => $lat,
            // 'longitude' => $long,
            // 'penyuluh_id' => $this->input->post('penyuluh_id',TRUE),
            // );
            if(empty($this->input->post('baru_menikah',TRUE))){
                $sMenikah = 0;
            }else{
                $sMenikah = 1;
            }
            if(empty($this->input->post('hamil',TRUE))){
                $sHamil = 0;
            }else{
                $sHamil = 1;
            }
            if(empty($this->input->post('menyusui',TRUE))){
                $sMenyusui = 0;
            }else{
                $sMenyusui = 1;
            }
            if(empty($this->input->post('stunting',TRUE))){
                $sStunting = 0;
            }else{
                $sStunting = 1;
            }


            $data = array(
                'no_keluarga' => $this->input->post('no_keluarga',TRUE),
                'kepala_keluarga' => $this->input->post('kepala_keluarga',TRUE),
                'kec' => $this->input->post('kec',TRUE),
                'desa' => $this->input->post('desa',TRUE),
                'baru_menikah' => $sMenikah,
                'hamil' => $sHamil,
                'menyusui' => $sMenyusui,
                'stunting' => $sStunting,
                'penyuluh_id' => $this->input->post('penyuluh_id',TRUE),
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
                'button' => 'Perbarui',
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
                'penyuluh_id' => $this->input->post('penyuluh_id',$row->penyuluh_id),
                'baru_menikah' => set_value('baru_menikah',$row->baru_menikah),
                'hamil' => set_value('hamil',$row->hamil),
                'menyusui' => set_value('menyusui',$row->menyusui),
                'stunting' => set_value('stunting',$row->stunting),
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

        // $alamat = str_replace(' ', '+', $this->input->post('alamat',TRUE));
        // $geocode=file_get_contents("https://maps.google.com/maps/api/geocode/json?key=AIzaSyBmBY0nTDRelXLlNUei_0SVEuogGzhQrvE&address=$alamat&sensor=false");
        
        // $output= json_decode($geocode);
        // var_dump($output);
        
        // $lat = $output->results[0]->geometry->location->lat;
        // $long = $output->results[0]->geometry->location->lng;


        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            // $data = array(
            //     'no_keluarga' => $this->input->post('no_keluarga',TRUE),
            //     'kepala_keluarga' => $this->input->post('kepala_keluarga',TRUE),
            //     'alamat' => $this->input->post('alamat',TRUE),
            //     'provinsi' => $this->input->post('provinsi',TRUE),
            //     'kab' => $this->input->post('kab',TRUE),
            //     'kec' => $this->input->post('kec',TRUE),
            //     'desa' => $this->input->post('desa',TRUE),
            //     'rt' => $this->input->post('rt',TRUE),
            //     'rw' => $this->input->post('rw',TRUE),
            //     'kode_pos' => $this->input->post('kode_pos',TRUE),
            //     'latitude' =>  $lat,
            //     'longitude' => $long,
            // );
            if(empty($this->input->post('baru_menikah',TRUE))){
                $sMenikah = 0;
            }else{
                $sMenikah = 1;
            }
            if(empty($this->input->post('hamil',TRUE))){
                $sHamil = 0;
            }else{
                $sHamil = 1;
            }
            if(empty($this->input->post('menyusui',TRUE))){
                $sMenyusui = 0;
            }else{
                $sMenyusui = 1;
            }
            if(empty($this->input->post('stunting',TRUE))){
                $sStunting = 0;
            }else{
                $sStunting = 1;
            }

            $data = array(
                'no_keluarga' => $this->input->post('no_keluarga',TRUE),
                'kepala_keluarga' => $this->input->post('kepala_keluarga',TRUE),
                'kec' => $this->input->post('kec',TRUE),
                'desa' => $this->input->post('desa',TRUE),
                'baru_menikah' => $sMenikah,
                'hamil' => $sHamil,
                'menyusui' => $sMenyusui,
                'stunting' => $sStunting,
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
	// $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	// $this->form_validation->set_rules('provinsi', 'provinsi', 'trim|required');
	// $this->form_validation->set_rules('kab', 'kab', 'trim|required');
	$this->form_validation->set_rules('kec', 'kec', 'trim|required');
	$this->form_validation->set_rules('desa', 'desa', 'trim|required');
	// $this->form_validation->set_rules('rt', 'rt', 'trim|required');
	// $this->form_validation->set_rules('rw', 'rw', 'trim|required');
	// $this->form_validation->set_rules('kode_pos', 'kode pos', 'trim|required');

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