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
		$data['totalsuara'] = $this->home_model->jumlahseluruhcalon();
		$this->load->view('home',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */