<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}
	public function index()
	{
		if ($this->session->userdata('status_login')) {
			redirect(base_url('index.php/vote'));
		}
		$this->load->view('login');
	}
	public function admin()
	{
		if ($this->session->userdata('admin_login')) {
			redirect(base_url('index.php/admin'));
		}
		$this->load->view('admin/login');
	}
	public function authAdmin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password),
		);
		$cek = $this->login_model->cek_admin("admin", $where)->num_rows();
		if ($cek > 0) {
			$create_session = array(
				'username' => $username,
				'admin_login' => TRUE,
			);
			$this->session->set_userdata($create_session);
			redirect(base_url('index.php/admin'));
		}else{
			echo "<script>alert('Anda bukan admin!');window.location.href='".base_url('index.php/login/admin')."'</script>";
		}
	}
	public function auth()
	{
		$this->form_validation->set_rules('nis', 'Nomor Induk Siswa', 'required|trim|max_length[20]');
		if ($this->form_validation->run()) {
			$data = array(
				'nis' => $this->input->post('nis')
			);
			if ($this->login_model->cek_login($data)->num_rows() == 1) {
				$cek = $this->login_model->cek_login($data)->result();
				foreach ($cek as $k) {
					$value = $k->status_vote;
				};
				if ($value == 0) {
					$create_session = array(
						'nis' => $this->input->post('nis'),
						'status_login' => TRUE
					);
					$this->session->set_userdata($create_session);
					redirect(base_url('index.php/vote'));
				}else{
					echo "<script>alert('Anda Sudah Memilih, Silahkan Pantau Live Count!');window.location.href='".base_url()."'</script>";
				}
			}else{
				echo "<script>alert('NIS tidak terdaftar');window.location.href='".base_url('index.php/login')."'</script>";
			}
		}else{
			echo "<script>alert('Isi semua inputan');window.location.href='".base_url('index.php/login')."'</script>";
		}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */