<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kuliner extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kuliner');
		$this->load->model('m_pengunjung');
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('c_login');
		}
	}

	public function index()
	{

		$data['transaksi']= $this->db->count_all('pestemp_detail');
		$data['kuliner']= $this->db->count_all('kuliner');
		$data['pendapatan'] = $this->m_kuliner->sum_totalpendapatan();
		$data['get_user']= $this->m_kuliner->get_user();
		$data['content']='kuliner/home';
		$this->load->view('kuliner/template', $data);
	}

	public function form_kuliner(){
		$data['get_kuliner']= $this->m_kuliner->get_kuliner();
		$data['content']='kuliner/input_kuliner';
		$this->load->view('kuliner/template', $data);
	}

	public function input_kuliner(){
		$this->m_kuliner->input_kuliner();
		$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Data Berhasil di Tambahkan !</div>');
		
		redirect('c_kuliner/form_kuliner','refresh');
	}

	public function laporan_penjualan(){
		$data['data']= $this->m_kuliner->laporan_penjualan();
		$data['content']='kuliner/laporan_penjualan';
		$this->load->view('kuliner/template', $data);
	}

	public function delete_kuliner($id)
	{
		$this->m_kuliner->delete_kuliner($id);
		$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Data Berhasil di Hapus !</div>');
		
		redirect('c_kuliner/form_kuliner','refresh');
	}

	public function laporan_detail($tanggal)
	{
		$data['tanggal']= $this->m_kuliner->get_detailpesan($tanggal);
		$data['data']= $this->m_kuliner->detailpesan($tanggal);
		$data['content']='kuliner/laporan_detail';
		$this->load->view('kuliner/template', $data);
	}

	public function update_kuliner($id)
	{
		$data['get_updatekuliner']= $this->m_kuliner->get_updatekuliner($id);
		$data['content']='kuliner/update_kuliner';
		$this->load->view('kuliner/template', $data);
	}

	public function edit_kuliner($id){
		$this->m_kuliner->edit_kuliner($id);
		$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Data Berhasil di update !</div>');
		
		redirect('c_kuliner/form_kuliner','refresh');
	}

	public function konfirmasi_pesanan()
	{
		// $this->load->model('m_pengunjung');
		$data['get_booking']= $this->m_kuliner->get_booking();
		$data['content']='kuliner/konfirmasi_pesanan';
		$this->load->view('kuliner/template', $data);
	}

	public function konfirmasitiket($id)
	{
		$this->load->model('m_kuliner');
		$data = array(
			'status' => 1
		);
		
		if($this->m_kuliner->update_tiket($id,$data)){
			$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Data Berhasil di Update !</div>');

			redirect('c_kuliner/konfirmasi_pesanan','refresh');

		}else{
			$this->session->set_flashdata('info','<div class="alert alert-warning alert-dismissible" role="alert"> Data Gagal di Update !</div>');

			redirect('c_kuliner/konfirmasi_pesanan','refresh');
		}
	}

	public function profile()
	{
		$data['get_user']= $this->m_kuliner->get_userprofile();
		$data['content']='kuliner/profile';
		$this->load->view('kuliner/template', $data);
	}

	public function update_profile($id_user)
	{
		$data['get_userprofile']= $this->m_kuliner->get_updateprofile($id_user);
		$data['content']='kuliner/update_profile';
		$this->load->view('kuliner/template', $data);
	}
	public function view_orderan($id)
	{
		$data['get_booking']= $this->m_kuliner->get_vieworderan($id);
		$data['content']='kuliner/view_orderan';
		$this->load->view('kuliner/template', $data);
	}

	public function edit_profile($id){
		$this->m_kuliner->edit_profile($id);
		$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Data Berhasil di update !</div>');
		
		redirect('c_kuliner/profile','refresh');
	}

	public function cetak_laporan($tanggal)
	{
		$data['bulan']= $this->m_kuliner->get_month($tanggal);
		$data['data']= $this->m_kuliner->detailpesan($tanggal);
		$this->load->view('kuliner/cetak_laporan',$data);
	}

	var $print;
	public function print(){
		$print = $this->m_kuliner->laporan_penjualan();
		print_r($print);
	}
}
?>