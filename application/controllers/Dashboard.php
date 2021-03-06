<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

use Phpml\Regression\LeastSquares;

class Dashboard extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();

        $this->load->library('acl');
        
        $data = $this->session->userdata('auth');
        $status = $data['status'];
        if (! $this->acl->is_public('dashboard'))
        {
            if (! $this->acl->is_allowed('dashboard', $status))
            {
                redirect('auth/logout','refresh');
            }
        }

        $this->load->model('Detail_pangan_keluarga_model');
        $this->load->model('Kecamatan_model');
        $this->render['page_title'] = 'Dashboard';
        $this->render['menus'] = 'Dashboard';
    }
    public function index($kec = null){
        $now = date("Y");
        $tahun_awal = ($now+0) - 1;
        $start = $tahun_awal."-01-01";
        $end = $now."-12-31";

        if($kec == null){
            $pph = $this->Detail_pangan_keluarga_model->pph($start,$end);
        }else{
            $pph = $this->Detail_pangan_keluarga_model->pph_by_kec($start,$end,$kec);
        }

        $this->render['content']= $this->load->view('dashboard/index.php', array(
            'per_jenis'=> json_encode($pph),
            'kecamatan' =>$this->Kecamatan_model->get_all(),
        ), TRUE);
        $this->load->view('template', $this->render);
    }
}

/* End of file Jenis_pangan.php */
/* Location: ./application/controllers/Jenis_pangan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-04-15 10:06:14 */
/* http://harviacode.com */