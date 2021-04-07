<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('c_login');
		}
	}

	public function index()
	{
		$data['transaksi'] = $this->db->count_all('pesanan_detail');
		$data['pendapatan'] = $this->m_admin->sum_totalpendapatan();
		$data['wisata'] = $this->db->count_all('wisata');
		$data['get_user']= $this->m_admin->get_user();
		$data['content']='admin/home';
		$this->load->view('admin/template', $data);
	}

	public function form_wisata(){
		$data['get_wisata']= $this->m_admin->get_wisata();
		$data['content']='admin/input_wisata';
		$this->load->view('admin/template', $data);
	}

	public function form_tiket(){
		$data['wisata']= $this->m_admin->get_wisata();
		$data['get_tiket']= $this->m_admin->get_datatiket();
		$data['content']='admin/input_tiket';
		$this->load->view('admin/template', $data);
	}

	public function input_tiket(){
		$this->m_admin->input_tiket();
		$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Data Berhasil di Tambahkan !</div>');
		
		redirect('c_admin/form_tiket','refresh');
	}

	public function input_wisata(){
		$this->m_admin->input_wisata();
		$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Data Berhasil di Tambahkan !</div>');
		
		redirect('c_admin/form_wisata','refresh');
	}

	public function laporan_penjualan(){
		$data['data']= $this->m_admin->laporan_penjualan();
		$data['content']='admin/laporan_penjualan';
		$this->load->view('admin/template', $data);
	}

	public function delete_wisata($id)
	{
		$this->m_admin->delete_wisata($id);
		$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Data Berhasil di Hapus !</div>');
		
		redirect('c_admin/form_wisata','refresh');
	}

	public function update_wisata($id)
	{
		$data['get_updatewisata']= $this->m_admin->get_updatewisata($id);
		$data['content']='admin/update_wisata';
		$this->load->view('admin/template', $data);
	}

	public function update_tiket($id)
	{
		$data['get_updatetiket']= $this->m_admin->get_updatetiket($id);
		$data['content']='admin/update_tiket';
		$this->load->view('admin/template', $data);
	}

	public function edit_tiket(){
		$id = $this->input->post('id_tiket');
		$this->m_admin->edit_tiket($id);
		$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Data Berhasil di update !</div>');
		
		redirect('c_admin/form_tiket','refresh');
	}

	public function delete_tiket($id)
	{
		$this->m_admin->delete_tiket($id);
		$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Data Berhasil di Hapus !</div>');
		
		redirect('c_admin/form_tiket','refresh');
	}

	// get_updatetiket

	public function edit_wisata($id){
		$this->m_admin->edit_wisata($id);
		$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Data Berhasil di update !</div>');
		
		redirect('c_admin/form_wisata','refresh');
	}

	public function konfirmasi_tiket()
	{
		$data['get_tiket']= $this->m_admin->get_tiket();
		$data['content']='admin/konfirmasi_tiket';
		$this->load->view('admin/template', $data);
	}

	public function konfirmasitiket($id)
	{
		$this->load->model('m_admin');
		$data = array(
			'status' => 1
		);
		
		if($this->m_admin->update_tiket($id,$data)){
			$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Data Berhasil di Update !</div>');

			redirect('c_admin/konfirmasi_tiket','refresh');

		}else{
			$this->session->set_flashdata('info','<div class="alert alert-warning alert-dismissible" role="alert"> Data Gagal di Update !</div>');

			redirect('c_admin/konfirmasi_tiket','refresh');
		}
	}

	public function profile()
	{
		$data['get_user']= $this->m_admin->get_userprofile();
		$data['content']='admin/profile';
		$this->load->view('admin/template', $data);
	}

	public function view_orderan($id)
	{
		$data['get_tiket']= $this->m_admin->get_vieworderan($id);
		$data['content']='admin/view_orderan';
		$this->load->view('admin/template', $data);
	}

	public function laporan_detail($tanggal)
	{
		$data['tanggal']= $this->m_admin->get_detailpesan($tanggal);
		$data['data']= $this->m_admin->detailpesan($tanggal);
		$data['content']='admin/laporan_detail';
		$this->load->view('admin/template', $data);
	}

	public function update_profile($id_user)
	{
		$data['get_userprofile']= $this->m_admin->get_updateprofile($id_user);
		$data['content']='admin/update_profile';
		$this->load->view('admin/template', $data);
	}

	public function edit_profile($id){
		$this->m_admin->edit_profile($id);
		$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Data Berhasil di update !</div>');
		
		redirect('c_admin/profile','refresh');
	}

	public function cetak_laporan($tanggal)
	{
		$data['bulan']= $this->m_admin->get_month($tanggal);
		$data['data']= $this->m_admin->detailpesan($tanggal);
		$this->load->view('admin/cetaklaporan',$data);
	}


	var $print;
	public function print(){
		$print = $this->m_admin->get_tiket();
		// $print = $this->db->count_all('wisata');
		print_r($print);
	}
}
?>