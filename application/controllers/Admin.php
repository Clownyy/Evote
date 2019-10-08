<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		if (!$this->session->userdata('admin_login')) {
			redirect(base_url('login/admin'));
		}
	}
	public function addCalon()
	{
		$id_pilih = $this->input->post('id_pilih');
		$nama_calon = $this->input->post('nama_calon');
		$nama_wakil = $this->input->post('nama_wakil');
		$deskripsi_calon = $this->input->post('deskripsi_calon');

		$sql = $this->db->query("SELECT id_pilih FROM vote where id_pilih='$id_pilih'");
		$cek_paslon = $sql->num_rows();
		if ($cek_paslon > 0) {
			echo "<script>alert('Kode Pilih tidak bisa digunakan');window.location.href='".base_url('admin/calon')."'</script>";
		}else{
			$config['max_size']=2048;
			$config['allowed_types']="png|jpg|jpeg";
			$config['remove_spaces']=TRUE;
			$config['overwrite']=TRUE;
			$config['upload_path']='./assets/image_calon';

			$this->load->library('upload');
			$this->upload->initialize($config);

			$this->upload->do_upload('foto_calon');
			$data_image = $this->upload->data('file_name');

			$data = array(
				'id_pilih' => $id_pilih,
				'nama_calon' => $nama_calon,
				'nama_wakil' => $nama_wakil,
				'deskripsi_calon' => $deskripsi_calon,
				'foto_calon' => $data_image
			);
			$this->admin_model->input_data($data, 'vote');
			redirect(base_url('admin/calon'));
		}
	}
	public function addPemilih()
	{
		$nis = $this->input->post('nis');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');

		$data = array(
			'nis' => $nis,
			'nama_lengkap' => $nama_lengkap,
			'kelas' => $kelas,
			'jurusan' => $jurusan,
		);
		$this->admin_model->input_data($data, 'akun');
		redirect(base_url('admin/pemilih'));
	}
	public function updatePemilih()
	{
		$nis = $this->input->post('nis');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');

		$data = array(
			'nama_lengkap' => $nama_lengkap,
			'kelas' => $kelas,
			'jurusan' => $jurusan,
		);
		$where = array(
			'nis' => $nis,
		);
		$this->admin_model->edit_data($where,$data,'akun');
		redirect(base_url('admin/pemilih'));
	}
	public function hapusPemilih($nis){
		$where = array('nis' => $nis);
		$this->admin_model->hapus_data($where,'akun');
		redirect(base_url('admin/pemilih'));
	}
	public function hapusCalon($id_pilih){
		$where = array('id_pilih' => $id_pilih);
		$this->admin_model->hapus_data($where,'vote');
		redirect(base_url('admin/calon'));
	}
	public function pemilih()
	{
		$data['pemilih'] = $this->admin_model->get_pemilih()->result();
		$data['session_admin'] = $this->admin_model->get_session()->result();
		$this->load->view('admin/pemilih', $data);
	}
	public function count()
	{
		$data['count'] = $this->admin_model->get_count()->result();
		$data['session_admin'] = $this->admin_model->get_session()->result();
		$this->load->view('admin/count',$data);
	}
	public function updateCalon()
	{
		$id_pilih = $this->input->post('id_pilih');
		$nama_calon = $this->input->post('ketua');
		$nama_wakil = $this->input->post('wakil');
		$deskripsi_calon = $this->input->post('deskripsi_calon');

		$data = array(
			'nama_calon' => $nama_calon,
			'nama_wakil' => $nama_wakil,
			'deskripsi_calon' => $deskripsi_calon,
		);
		$where = array(
			'id_pilih' => $id_pilih,
		);
		$this->admin_model->edit_data($where,$data,'vote');
		redirect(base_url('admin/calon'));
	}
	public function deleteAllCount()
	{
		$this->db->empty_table('quick_count');
		$this->admin_model->update_statusvote();
		redirect(base_url('admin/count'));
	}
	public function index()
	{
		$data['session_admin'] = $this->admin_model->get_session()->result();
		$data['totalcalon'] = $this->admin_model->jumlahcalon();
		$data['totalpemilih'] = $this->admin_model->jumlahpemilih();
		$data['totalcalon1'] = $this->admin_model->jumlahcalon1();
		$data['totalcalon2'] = $this->admin_model->jumlahcalon2();
		$data['totalcalon3'] = $this->admin_model->jumlahcalon3();
		$data['infocalon1'] = $this->db->get_where('vote', array('id_pilih' => 'PASLON_01'))->row();
		$data['infocalon2'] = $this->db->get_where('vote', array('id_pilih' => 'PASLON_02'))->row();
		$data['infocalon3'] = $this->db->get_where('vote', array('id_pilih' => 'PASLON_03'))->row();
		$data['totalsuaramasuk'] = $this->admin_model->jumlahsuaramasuk();
		$this->load->view('admin/dashboard',$data);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login/admin'));
	}
	public function calon()
	{
		$data['session_admin'] = $this->admin_model->get_session()->result();
		$data['totalcalon'] = $this->admin_model->jumlahcalon();
		$data['datacalon'] = $this->admin_model->get_calon()->result();
		$this->load->view('admin/calon',$data);
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */