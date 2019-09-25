<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vote_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->sesi=$this->session->userdata('nis');
	}
	function get_session()
	{
		$this->db->where('nis', $this->sesi);
		return $this->db->get('akun');
	}
	function get_calon(){
		return $this->db->get('vote');
	}
	function update_statusvote()
	{
      $this->db->set('status_vote',1);
      $this->db->where('nis',$this->session->userdata('nis'));
      return $this->db->update('akun');
    }
    function inputCount($data,$table)
    {
    	$this->db->insert($table,$data);
    }

}

/* End of file Vote_model.php */
/* Location: ./application/models/Vote_model.php */