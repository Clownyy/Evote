<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	function jumlahcalon1()
	{
		$query = $this->db->get_where('quick_count', array('id_pilih' => 'PASLON_01'));
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

	function jumlahcalon2()
	{
		$query = $this->db->get_where('quick_count', array('id_pilih' => 'PASLON_02'));
		if ($query->num_rows()>0) {
			return $query->num_rows();
		}else{
			return 0;
		}
	}	
	function jumlahcalon3()
	{
		$query = $this->db->get_where('quick_count', array('id_pilih' => 'PASLON_03'));
		if ($query->num_rows()>0) {
			return $query->num_rows();
		}else{
			return 0;
		}
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
	function jumlahseluruhcalon()
	{
		$query = $this->db->get('quick_count');
		if ($query->num_rows()>0) {
			return $query->num_rows();
		}else{
			return 0;
		}
	}

}

/* End of file Home_model.php */
/* Location: ./application/models/Home_model.php */