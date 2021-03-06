<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_Model
{

    public $table = 'user';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id,nik,nama,password,tempat_lahir,DATE_FORMAT(tgl_lahir, "%a %D %M %Y") as tgl_lahir,jk,agama,pendidikan,pekerjaan,status_id');
        $this->datatables->from('user');
        $this->datatables->where('status_id','3');
        //add this line for join
        //$this->datatables->join('table2', 'user.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('user/read/$1'),'Detail')." | ".anchor(site_url('user/update/$1'),'Ubah')." | ".anchor(site_url('user/delete/$1'),'Hapus','onclick="javasciprt: return confirm(\'Apakah anda yakin ?\')"'), 'id');
        return $this->datatables->generate();
    }
    function json_penyuluh() {
        $this->datatables->select('id,nik,nama,password,tempat_lahir,DATE_FORMAT(tgl_lahir, "%a %D %M %Y") as tgl_lahir,jk,agama,pendidikan,pekerjaan,status_id');
        $this->datatables->from('user');
        $this->datatables->where('status_id','3');
        //add this line for join
        //$this->datatables->join('table2', 'user.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('user/read/$1'),'Detail')." | ".anchor(site_url('user/update/$1'),'Ubah')." | ".anchor(site_url('user/delete/$1'),'Hapus','onclick="javasciprt: return confirm(\'Apakah anda yakin ?\')"'), 'id');
        return $this->datatables->generate();
    }
    function jsonAdmin() {
        $this->datatables->select('user.id,nik,user.nama,status_id,status.nama as status');
        $this->datatables->from('user');
        $this->datatables->where('status_id','2');
        $this->datatables->or_where('status_id','1');
        //add this line for join
        $this->datatables->join('status', 'user.status_id = status.id');
        $this->datatables->add_column('action', anchor(site_url('admin/update/$1'),'Ubah')." | ".anchor(site_url('admin/delete/$1'),'Hapus','onclick="javasciprt: return confirm(\'Apakah anda yakin ?\')"'), 'id');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    function get_by_name($params)
    {
        $this->db->like('nama', $params);
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }
    function get_kepalaKeluarga($params){
        $this->db->like('nama', $params);
        $this->db->where('jk','PRIA');
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    function get_user_by_auth($nik,$password){
        $this->db->where('nik', $nik);
        $this->db->where('password',md5($password));
        return $this->db->get($this->table)->row();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->select('id,nik,nama,tempat_lahir,DATE_FORMAT(tgl_lahir, "%a %D %M %Y") as tgl_lahir,jk,agama,pendidikan,pekerjaan,tgl_lahir as lahir,status_id,keterangan');
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
	$this->db->or_like('nik', $q);
	$this->db->or_like('nama', $q);
	$this->db->or_like('password', $q);
	$this->db->or_like('tempat_lahir', $q);
	$this->db->or_like('tgl_lahir', $q);
	$this->db->or_like('jk', $q);
	$this->db->or_like('agama', $q);
	$this->db->or_like('pendidikan', $q);
	$this->db->or_like('pekerjaan', $q);
	$this->db->or_like('status_id', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('nik', $q);
	$this->db->or_like('nama', $q);
	$this->db->or_like('password', $q);
	$this->db->or_like('tempat_lahir', $q);
	$this->db->or_like('tgl_lahir', $q);
	$this->db->or_like('jk', $q);
	$this->db->or_like('agama', $q);
	$this->db->or_like('pendidikan', $q);
	$this->db->or_like('pekerjaan', $q);
	$this->db->or_like('status_id', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
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

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-04-15 10:06:16 */
/* http://harviacode.com */