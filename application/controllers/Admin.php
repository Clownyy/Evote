<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		if (!$this->session->userdata('admin_login')) {
			redirect(base_url('index.php/login/admin'));
		}
	}
	public function hapusCalon($id_pilih){
		$where = array('id_pilih' => $id_pilih);
		$this->admin_model->hapus_data($where,'vote');
		redirect(base_url('index.php/admin/calon'));
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
		redirect(base_url('index.php/admin/calon'));
	}
	public function index()
	{
		$data['session_admin'] = $this->admin_model->get_session()->result();
		$data['totalcalon'] = $this->admin_model->jumlahcalon();
		$data['totalpemilih'] = $this->admin_model->jumlahpemilih();
		$data['totalcalon1'] = $this->admin_model->jumlahcalon1();
		$data['totalcalon2'] = $this->admin_model->jumlahcalon2();
		$data['totalcalon3'] = $this->admin_model->jumlahcalon3();
		$data['totalsuaramasuk'] = $this->admin_model->jumlahsuaramasuk();
		$this->load->view('admin/dashboard',$data);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('index.php/login/admin'));
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