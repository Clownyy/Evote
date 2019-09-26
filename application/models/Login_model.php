<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function cek_login($data){
		$this->db->where($data);
		return $this->db->get('akun');
	}
	public function cek_admin($table,$where){
		return $this->db->get_where($table,$where);
	}

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */