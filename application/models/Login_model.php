<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function cek_login($data){
		$this->db->where($data);
		return $this->db->get('akun');
	}
	public function login($post){
		$this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username', $post['username']);
        $this->db->where('password', md5($post['password']));
        $query = $this->db->get();
        return $query;
	}

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */