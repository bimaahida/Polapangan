<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pangan_model extends CI_Model
{

    public $table = 'pangan';
    public $id = 'pangan.id';
    public $order = 'ASC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('pangan.id,pangan.nama,takaran,urt,gram,kalori,lemak,karbohidrat,protein,jenis_pangan.nama as jenis_pangan');
        $this->datatables->from('pangan');
        //add this line for join
        $this->datatables->join('jenis_pangan', 'pangan.jenis_pangan_id = jenis_pangan.id');
        $this->datatables->add_column('action', anchor(site_url('pangan/read/$1'),'Detail')." | ".anchor(site_url('pangan/update/$1'),'Ubah')." | ".anchor(site_url('pangan/delete/$1'),'Hapus','onclick="javasciprt: return confirm(\'Apakah anda yakin ?\')"'), 'id');
        return $this->datatables->generate();
    }
    function json_penyuluh() {
        $this->datatables->select('pangan.id,pangan.nama,takaran,urt,gram,kalori,lemak,karbohidrat,protein,jenis_pangan.nama as jenis_pangan');
        $this->datatables->from('pangan');
        //add this line for join
        $this->datatables->join('jenis_pangan', 'pangan.jenis_pangan_id = jenis_pangan.id');
        $this->datatables->add_column('action', anchor(site_url('pangan/read/$1'),'Read'), 'id');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by('nama', $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->datatables->select('pangan.id,pangan.nama,takaran,urt,gram,kalori,lemak,karbohidrat,protein,jenis_pangan.nama as jenis_pangan,jenis_pangan_id');
        $this->db->where($this->id, $id);
        $this->db->join('jenis_pangan', 'pangan.jenis_pangan_id = jenis_pangan.id');
        return $this->db->get($this->table)->row();
    }
    function get_by_name($params){
        $this->db->like('nama', $params);
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
	$this->db->or_like('nama', $q);
	$this->db->or_like('takaran', $q);
	$this->db->or_like('urt', $q);
	$this->db->or_like('gram', $q);
	$this->db->or_like('kalori', $q);
	$this->db->or_like('lemak', $q);
	$this->db->or_like('karbohidrat', $q);
	$this->db->or_like('protein', $q);
	$this->db->or_like('jenis_pangan_id', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('nama', $q);
	$this->db->or_like('takaran', $q);
	$this->db->or_like('urt', $q);
	$this->db->or_like('gram', $q);
	$this->db->or_like('kalori', $q);
	$this->db->or_like('lemak', $q);
	$this->db->or_like('karbohidrat', $q);
	$this->db->or_like('protein', $q);
	$this->db->or_like('jenis_pangan_id', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
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

/* End of file Pangan_model.php */
/* Location: ./application/models/Pangan_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-04-27 07:43:32 */
/* http://harviacode.com */