<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Detail_pangan_keluarga_model extends CI_Model
{

    public $table = 'detail_pangan_keluarga';
    public $id = 'detail_pangan_keluarga.id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    function pph($start,$end){
        $this->db->select("pangan_keluarga.tgl,jenis_pangan.nama as jenis_pangan,jenis_pangan.bobot,jenis_pangan.skor_max,
        SUM(pangan.kalori * detail_pangan_keluarga.urt /360) as EA,
        SUM(pangan.kalori * detail_pangan_keluarga.urt /360) * 100 /SUM(pangan.kalori * detail_pangan_keluarga.urt) as EA_porsen,
        SUM(pangan.kalori * detail_pangan_keluarga.urt /360) * 100/2400 as AKE,
        SUM(pangan.kalori * detail_pangan_keluarga.urt /360) * 100 /SUM(pangan.kalori * detail_pangan_keluarga.urt) * jenis_pangan.bobot AS sekor_aktual,
        SUM(pangan.kalori * detail_pangan_keluarga.urt /360) * 100/2400 * jenis_pangan.bobot as skor_ake");
        //$this->db->where('asal',$status);
        $this->db->join('pangan ','pangan.id= detail_pangan_keluarga.pangan_id');
        $this->db->join('jenis_pangan  ','pangan.jenis_pangan_id = jenis_pangan.id ');
        $this->db->join('pangan_keluarga  ','pangan_keluarga.id = detail_pangan_keluarga.pangan_keluarga_id ');
        $this->db->group_by('jenis_pangan.id');
        $this->db->where('pangan_keluarga.tgl >=',$start);
        $this->db->where('pangan_keluarga.tgl <=',$end);
        return $this->db->get($this->table)->result();
    }
    function pph_by_kec($start,$end,$kec){
        $this->db->select("pangan_keluarga.tgl,jenis_pangan.nama as jenis_pangan,jenis_pangan.bobot,jenis_pangan.skor_max,
        SUM(pangan.kalori * detail_pangan_keluarga.urt /360) as EA,
        SUM(pangan.kalori * detail_pangan_keluarga.urt /360) * 100 /SUM(pangan.kalori * detail_pangan_keluarga.urt) as EA_porsen,
        SUM(pangan.kalori * detail_pangan_keluarga.urt /360) * 100/2400 as AKE,
        SUM(pangan.kalori * detail_pangan_keluarga.urt /360) * 100 /SUM(pangan.kalori * detail_pangan_keluarga.urt) * jenis_pangan.bobot AS sekor_aktual,
        SUM(pangan.kalori * detail_pangan_keluarga.urt /360) * 100/2400 * jenis_pangan.bobot as skor_ake");
        $this->db->join('pangan ','pangan.id= detail_pangan_keluarga.pangan_id');
        $this->db->join('jenis_pangan  ','pangan.jenis_pangan_id = jenis_pangan.id');
        $this->db->join('pangan_keluarga  ','pangan_keluarga.id = detail_pangan_keluarga.pangan_keluarga_id');
        $this->db->join('keluarga  ','pangan_keluarga.keluarga_id = keluarga.id');
        $this->db->group_by('jenis_pangan.id');
        $this->db->where('keluarga.kec',$kec);
        $this->db->where('pangan_keluarga.tgl >=',$start);
        $this->db->where('pangan_keluarga.tgl <=',$end);
        return $this->db->get($this->table)->result();
    }
    function get_kec(){
        $this->db->select('kec');
        $this->db->group_by('kec');
        return $this->db->get('keluarga')->result();
    }
    function get_year(){
        $this->db->select('year(tgl) as tahun');
        $this->db->group_by('tahun');
        return $this->db->get('pangan_keluarga')->result();
    }

    // datatables
    function json($pangan) {
        $this->datatables->select('detail_pangan_keluarga.id,detail_pangan_keluarga.urt,berat,asal,rata_rata_berat,pangan.nama');
        $this->datatables->from('detail_pangan_keluarga');
        $this->datatables->where('pangan_keluarga_id',$pangan);
        //add this line for join
        $this->datatables->join('pangan', 'detail_pangan_keluarga.pangan_id = pangan.id');
        $this->datatables->add_column('action',anchor(site_url('detail_pangan_keluarga/update/$1/'.$pangan),'Perbarui')." | ".anchor(site_url('detail_pangan_keluarga/Hapus/$1/'.$pangan),'Delete','onclick="javasciprt: return confirm(\'Apakah Anda Yakin ?\')"'), 'id');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_pangan_keluarga($id)
    {
        $this->db->where('pangan_keluarga_id', $id);
        return $this->db->get($this->table)->result();
    }

    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    function get_bahan_pangan_report($status){
        $this->db->select("pangan_id,SUM(berat) as berat,asal,pangan.nama");
        $this->db->where('asal',$status);
        $this->db->join('pangan ','pangan.id= detail_pangan_keluarga.pangan_id');
        $this->db->group_by('pangan_id');
        $this->db->group_by('asal');
        return $this->db->get($this->table)->result();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
	$this->db->or_like('urt', $q);
	$this->db->or_like('berat', $q);
	$this->db->or_like('asal', $q);
	$this->db->or_like('rata_rata_berat', $q);
	$this->db->or_like('pangan_keluarga_id', $q);
	$this->db->or_like('pangan_id', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('urt', $q);
	$this->db->or_like('berat', $q);
	$this->db->or_like('asal', $q);
	$this->db->or_like('rata_rata_berat', $q);
	$this->db->or_like('pangan_keluarga_id', $q);
	$this->db->or_like('pangan_id', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
        $insert_id = $this->db->insert_id();

        return  $insert_id;
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Detail_pangan_keluarga_model.php */
/* Location: ./application/models/Detail_pangan_keluarga_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-05-15 13:23:59 */
/* http://harviacode.com */