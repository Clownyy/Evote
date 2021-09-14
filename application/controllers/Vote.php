<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';

class Vote extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model(['vote_model', 'home_model']);
		if (!$this->session->userdata('status_login')) {
			redirect(base_url('login'));
		}
	}
	public function index()
	{
		$data['get_session'] = $this->vote_model->get_session()->result();
		$data['totalcalon1'] = $this->vote_model->jumlahcalon1();
		$data['totalcalon2'] = $this->vote_model->jumlahcalon2();
		$data['totalcalon3'] = $this->vote_model->jumlahcalon3();
		$data['calon'] = $this->vote_model->get_calon()->result();
		$data['totalcalon'] = $this->home_model->jumlahcalon();

		$this->template->load('template', 'vote', $data);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
	public function addCount()
	{
		$id_pilih = $this->input->post('id_pilih');
		$data = array(
			'id_pilih' => $id_pilih,
		);
		$this->vote_model->inputCount($data, 'quick_count');

		// $options = array(
	 //    	'cluster' => 'ap1',
	 //    	'useTLS' => true
	 //  	);
	 //  	$pusher = new Pusher\Pusher(
	 //    	'69255538d1455b016d48',
	 //    	'6547e4d4980202c983c9',
	 //    	'869761',
	 //    	$options
	 //  	);
	 //  	$data['message'] = 'Hello World';
	 //  	$pusher->trigger('my-channel', 'my-event', $data);

		$this->vote_model->update_statusvote();
		$this->session->sess_destroy();
		echo "<script>alert('Terima kasih sudah memilih, suara anda sangat berarti bagi sekolah ini');window.location.href='".base_url('login')."'</script>";
	}

}

/* End of file Vote.php */
/* Location: ./application/controllers/Vote.php */