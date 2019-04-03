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
        $this->render['page_title'] = 'Dashboard';
        $this->render['menus'] = 'Dashboard';
    }
    public function index(){
        $tahun = $this->Detail_pangan_keluarga_model->get_year();
        $kecamatan = $this->Detail_pangan_keluarga_model->get_kec();
        $chart_pertahun = array();
        $chart_pertahun_predic = array();
        $chart_kecamatan = array();
        $chart_jenis_pangan = array();
        $rata_rata = array();
        $kecamatan_dibawah_rata = array();
        
        foreach ($tahun as $key) {
            $tahun_awal = ($key->tahun+0) - 1;
            $start = $tahun_awal."-01-01";
            $end = $key->tahun."-12-31";
            $data_pph = $this->Detail_pangan_keluarga_model->pph($start,$end);   
            $skor_ake = null;
            
            foreach($data_pph as $data){
                $skor_ake = $skor_ake + $data->skor_ake;
            }

            $data_grafik = array(
                'tahun' => $key->tahun, 
                'data' => $skor_ake
            );
            array_push($chart_pertahun,$data_grafik);
            // array_push($chart_pertahun_predic,$data_grafik);
        }
        
        $data_pph = $this->Detail_pangan_keluarga_model->pph('2018-01-01','2018-12-31'); 

        foreach ($data_pph as $key) {
            $data_grafik = array(
                'jenis_pangan' => $key->jenis_pangan,
                'data'=> $key->skor_ake
            );
            $data_rata = array(
                'jenis' => $key->jenis_pangan,
                'data'=> $key->skor_ake / count($kecamatan),
            );
            // array_push($chart_jenis_pangan,$data_grafik);
            array_push($rata_rata,$data_rata);
        }


        foreach ($kecamatan as $key) {
            $now = date("Y");
            $tahun_awal = ($now+0) - 1;
            $start = $tahun_awal."-01-01";
            $end = $now."-12-31";
            $data_pph = $this->Detail_pangan_keluarga_model->pph_by_kec($start,$end,$key->kec);   
            $skor_ake = null;
            foreach ($data_pph as $data) {
                foreach ($rata_rata as $rata) {
                    if ($data->jenis_pangan == $rata['jenis']) {
                        if ($data->skor_ake < $rata['data']) {
                            $data_misikin = array(
                                'jenis_pangan' => $data->jenis_pangan,
                                'kecamatan' => $key->kec,
                                'data' => $data->skor_ake
                            );
                            array_push($kecamatan_dibawah_rata,$data_misikin);
                        }
                    }
                }
                
                $test = array(
                    'kec' => $key->kec,
                    'jenis_pangan' => $data->jenis_pangan,
                    'data' => $data->skor_ake
                );

                $skor_ake = $skor_ake + $data->skor_ake;
                array_push($chart_jenis_pangan,$test);
            }
            $data_grafik = array(
                'kecamatan' => $key->kec, 
                'data' => $skor_ake
            );
            array_push($chart_kecamatan,$data_grafik);
        }

        // $samples = [[2014],[2015],[2016],[2017],[2018]];
        // $targets = [80,90,100,60,20];

        $samples = array();
        $targets = array();

        foreach ($chart_pertahun as $key) {
            array_push($samples,[$key['tahun']]);
            array_push($targets,$key['data']);
        }
        // var_dump($targets);

        $regression = new LeastSquares();
        $regression->train($samples, $targets);
        $presdic = $regression->predict([2019]);
        
        array_push($chart_pertahun_predic,$chart_pertahun[count($chart_pertahun)-1]);
        
        $data_grafik = array(
            'tahun' => '2019', 
            'data' => $presdic
        );
        array_push($chart_pertahun_predic,$data_grafik);


        // var_dump($chart_pertahun_predic);
        $this->render['content']= $this->load->view('dashboard/index.php', array(
            'per_tahun'=> json_encode($chart_pertahun),
            'per_kec'=> json_encode($chart_kecamatan),
            'per_jenis'=> json_encode($chart_jenis_pangan),
            'rata' => json_encode($kecamatan_dibawah_rata),
            'predic' =>json_encode($chart_pertahun_predic),
        ), TRUE);
        $this->load->view('template', $this->render);
    }
    public function test(){
        $samples = [[2012], [2013], [2014], [2015], [2016],[2017]];
        $targets = [81.1,87,87.3,87.5,87.6,88.1];

        $regression = new LeastSquares();
        $regression->train($samples, $targets);
        echo $regression->predict([2005]);
        echo "<br>";
        echo $regression->predict([2006]);
        echo "<br>";
        echo $regression->predict([2007]);
        echo "<br>";
        echo $regression->predict([2008]);
        echo "<br>";
        echo $regression->predict([2009]);
        echo "<br>";
        echo $regression->predict([2010]);
        echo "<br>";
        echo $regression->predict([2011]);
    }
}

/* End of file Jenis_pangan.php */
/* Location: ./application/controllers/Jenis_pangan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-04-15 10:06:14 */
/* http://harviacode.com */