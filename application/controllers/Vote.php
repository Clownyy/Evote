<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vote extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('vote_model');
		if (!$this->session->userdata('status_login')) {
			redirect(base_url('index.php/login'));
		}
	}
	public function index()
	{
		$data['get_session'] = $this->vote_model->get_session()->result();
		$data['calon'] = $this->vote_model->get_calon()->result();

		$this->load->view('vote', $data);
	}
	public function addCount()
	{
		$id_pilih = $this->input->post('id_pilih');
		$data = array(
			'id_pilih' => $id_pilih,
		);
		$this->vote_model->inputCount($data, 'quick_count');
		$this->vote_model->update_statusvote();
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}

}

/* End of file Vote.php */
/* Location: ./application/controllers/Vote.php */