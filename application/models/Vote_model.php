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
    function jumlahcalon1()
	{
		$query = $this->db->get_where('quick_count', array('id_pilih' => 'PASLON_01'));
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

}

/* End of file Vote_model.php */
/* Location: ./application/models/Vote_model.php */