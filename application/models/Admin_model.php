<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->sesi=$this->session->userdata('username');
	}
	function get_session()
	{
		$this->db->where('username', $this->sesi);
		return $this->db->get('admin');
	}
	function edit_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function jumlahpemilih()
	{
		$query = $this->db->get('akun');
		if ($query->num_rows()>0) {
			return $query->num_rows();
		}else{
			return 0;
		}
	}
	function jumlahcalon()
	{
		$query = $this->db->get('vote');
		if ($query->num_rows()>0) {
			return $query->num_rows();
		}else{
			return 0;
		}
	}
	function jumlahsuaramasuk()
	{
		$query = $this->db->get('quick_count');
		if ($query->num_rows()>0) {
			return $query->num_rows();
		}else{
			return 0;
		}
	}
	function jumlahcalon1()
	{
		$query = $this->db->get_where('quick_count', array('id_pilih' => 'PASLON 01'));
		if ($query->num_rows()>0) {
			return $query->num_rows();
		}else{
			return 0;
		}
	}
	function jumlahcalon2()
	{
		$query = $this->db->get_where('quick_count', array('id_pilih' => 'PASLON 02'));
		if ($query->num_rows()>0) {
			return $query->num_rows();
		}else{
			return 0;
		}
	}	
	function jumlahcalon3()
	{
		$query = $this->db->get_where('quick_count', array('id_pilih' => 'PASLON 03'));
		if ($query->num_rows()>0) {
			return $query->num_rows();
		}else{
			return 0;
		}
	}
	function get_calon()
	{
		return $this->db->get('vote');
	}

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */