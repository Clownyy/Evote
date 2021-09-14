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
			redirect(base_url('vote'));
		}
		$this->load->view('login');
	}
	public function admin()
	{
		if ($this->session->userdata('admin_login')) {
			redirect(base_url('admin'));
		}
		$this->load->view('admin/login');
	}
	public function authAdmin()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			$this->load->model('login_model');
			$query = $this->login_model->login($post);
			if($query->num_rows() > 0)
			{
				$row = $query->row();
				$params = array(
					'nama_lengkap' => $row->nama_lengkap,
					'admin_login' => TRUE,
					'username' => $row->username,
				);
				$this->session->set_userdata($params);
				echo "<script>
				alert('Selamat Anda Berhasil Login');
				window.location='".site_url('admin')."';
				</script>";
			}else{
				echo "<script>
				alert('Gagal, Username / Password Salah!');
				window.location='".site_url('login/admin')."';
				</script>";
			}
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
				$cek = $this->login_model->cek_login($data)->row();
				foreach ($cek as $k) {
					$value = $k->status_vote;
				};
				if ($value == 0) {
					$create_session = array(
						'nis' => $this->input->post('nis'),
						'nama_lengkap' => $cek->nama_lengkap,
						'status_login' => TRUE
					);
					$this->session->set_userdata($create_session);
					redirect(base_url('vote'));
				}else{
					echo "<script>alert('Anda Sudah Memilih, Silahkan Pantau Live Count!');window.location.href='".base_url()."'</script>";
				}
			}else{
				echo "<script>alert('NIS tidak terdaftar');window.location.href='".base_url('login')."'</script>";
			}
		}else{
			echo "<script>alert('Isi semua inputan');window.location.href='".base_url('login')."'</script>";
		}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
