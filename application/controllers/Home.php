<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
	}
	public function index()
	{
		$data['totalcalon1'] = $this->home_model->jumlahcalon1();
		$data['totalcalon2'] = $this->home_model->jumlahcalon2();
		$data['totalcalon3'] = $this->home_model->jumlahcalon3();
		$data['infocalon1'] = $this->db->get_where('vote', array('id_pilih' => 'PASLON_01'))->row();
		$data['infocalon2'] = $this->db->get_where('vote', array('id_pilih' => 'PASLON_02'))->row();
		$data['infocalon3'] = $this->db->get_where('vote', array('id_pilih' => 'PASLON_03'))->row();
		$data['totalpemilih'] = $this->home_model->jumlahpemilih();
		$data['totalsuara'] = $this->home_model->jumlahseluruhcalon();

		$this->load->view('home',$data);
	}
	public function loadcount()
	{
		$data['totalcalon1'] = $this->home_model->jumlahcalon1();
		$data['totalcalon2'] = $this->home_model->jumlahcalon2();
		$data['totalcalon3'] = $this->home_model->jumlahcalon3();
		$data['totalpemilih'] = $this->home_model->jumlahpemilih();
		$data['totalsuara'] = $this->home_model->jumlahseluruhcalon();

		echo json_encode($data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */