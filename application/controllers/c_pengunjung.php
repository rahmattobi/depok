<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pengunjung extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pengunjung');
		// if($this->session->userdata('logged_in') !== TRUE){
		// 	redirect('c_login');
		// }
	}

	public function index()
	{
		$data['total_cart']= $this->db->count_all('cart');
		$data['total_carttempat']= $this->db->count_all('cart_tempat');
		$data['get_wisata']= $this->m_pengunjung->get_wisata();
		$data['get_kuliner']= $this->m_pengunjung->get_kuliner();
		$data['content']='pengunjung/home';
		$this->load->view('pengunjung/template', $data);
	}

	public function pengunjung()
	{
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('c_login');
		}
		$data['total_cart']= $this->db->count_all('cart');
		$data['total_carttempat']= $this->db->count_all('cart_tempat');
		$data['content']='pengunjung/pengunjung';
		$this->load->view('pengunjung/temp', $data);
	}

<<<<<<< HEAD
	public function profile()
	{
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('c_login');
		}
		$data['total_cart']= $this->db->count_all('cart');
		$data['total_carttempat']= $this->db->count_all('cart_tempat');
		$data['data']= $this->m_pengunjung->get_userprofile();
		$data['content']='pengunjung/profile';
		$this->load->view('pengunjung/temp', $data);
	}

	public function edit_profile()
	{
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('c_login');
		}
		$data['total_cart']= $this->db->count_all('cart');
		$data['total_carttempat']= $this->db->count_all('cart_tempat');
		$data['get_userprofile']= $this->m_pengunjung->get_updateprofile();
		$data['content']='pengunjung/update_profile';
		$this->load->view('pengunjung/temp', $data);
	}

	public function updateprofile($id)
	{
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('c_login');
		}
		$data = array(
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'foto' => $this->do_upload()
			);
			$this->m_pengunjung->updateprofile($id,$data);

			$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Profile Berhasil di Update !</div>');
			redirect('c_pengunjung/profile','refresh');
	}

=======
>>>>>>> 81f08e59ae19c39556e4d05ed3a708c8e23a8232
	public function wisata()
	{
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('c_login');
		}
		$data['total_cart']= $this->db->count_all('cart');
		$data['total_carttempat']= $this->db->count_all('cart_tempat');
		$data['wisata']= $this->db->count_all('wisata');
		$data['kuliner']= $this->db->count_all('kuliner');
		$data['get_wisata']= $this->m_pengunjung->get_wisata();
		$data['get_kuliner']= $this->m_pengunjung->get_kuliner();
		$data['content']='pengunjung/wisata';
		$this->load->view('pengunjung/temp', $data);
	}

	public function wisataa()
	{
		$data['wisata']= $this->db->count_all('wisata');
		$data['kuliner']= $this->db->count_all('kuliner');
		$data['get_wisata']= $this->m_pengunjung->get_wisata();
		$data['get_kuliner']= $this->m_pengunjung->get_kuliner();
		$data['content']='pengunjung/wisataa';
		$this->load->view('pengunjung/template', $data);
	}

	public function kuliner()
	{
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('c_login');
		}
		$data['total_cart']= $this->db->count_all('cart');
		$data['total_carttempat']= $this->db->count_all('cart_tempat');
		$data['wisata']= $this->db->count_all('wisata');
		$data['kuliner']= $this->db->count_all('kuliner');
		$data['get_wisata']= $this->m_pengunjung->get_wisata();
		$data['get_kuliner']= $this->m_pengunjung->get_kuliner();
		$data['content']='pengunjung/kuliner';
		$this->load->view('pengunjung/temp', $data);
	}

	public function kulinerr()
	{
		$data['wisata']= $this->db->count_all('wisata');
		$data['kuliner']= $this->db->count_all('kuliner');
		$data['get_wisata']= $this->m_pengunjung->get_wisata();
		$data['get_kuliner']= $this->m_pengunjung->get_kuliner();
		$data['content']='pengunjung/kulinerr';
		$this->load->view('pengunjung/template', $data);
	}

	public function detail_wisataa($id)
	{
		$data['get_wisata']= $this->m_pengunjung->get_wisata();
<<<<<<< HEAD
=======
		$data['ulasan']= $this->m_pengunjung->ulasan($id);
>>>>>>> 81f08e59ae19c39556e4d05ed3a708c8e23a8232
		$data['get_detailwisata']= $this->m_pengunjung->get_detailwisata($id);
		$data['content']='pengunjung/detail_wisataa';
		$this->load->view('pengunjung/template', $data);
	}

	public function detail_kulinerr($id)
	{
<<<<<<< HEAD
=======
		$data['testimoni']= $this->m_pengunjung->testimoni($id);
>>>>>>> 81f08e59ae19c39556e4d05ed3a708c8e23a8232
		$data['get_kuliner']= $this->m_pengunjung->get_kuliner();
		$data['get_detailkuliner']= $this->m_pengunjung->get_detailkuliner($id);
		$data['content']='pengunjung/detail_kulinerr';
		$this->load->view('pengunjung/template', $data);
	}

	public function detail_wisata($id)
	{
		$data['total_cart']= $this->db->count_all('cart');
		$data['total_carttempat']= $this->db->count_all('cart_tempat');
		$data['ulasan']= $this->m_pengunjung->ulasan($id);
		$data['get_wisata']= $this->m_pengunjung->get_wisata();
		$data['get_detailwisata']= $this->m_pengunjung->get_detailwisata($id);
		$data['content']='pengunjung/detail_wisata';
		$this->load->view('pengunjung/temp', $data);
	}

	public function detail_kuliner($id)
	{
		$data['total_cart']= $this->db->count_all('cart');
		$data['total_carttempat']= $this->db->count_all('cart_tempat');
		$data['testimoni']= $this->m_pengunjung->testimoni($id);
		$data['get_kuliner']= $this->m_pengunjung->get_kuliner();
		$data['get_detailkuliner']= $this->m_pengunjung->get_detailkuliner($id);
		$data['content']='pengunjung/detail_kuliner';
		$this->load->view('pengunjung/temp', $data);
	}

	public function cart()
	{
		$id = $this->session->userdata('id_user');
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('c_login');
		}
		$data['total_cart']= $this->db->count_all('cart');
		$data['total_carttempat']= $this->db->count_all('cart_tempat');
		$data['get_detailorderan1']= $this->m_pengunjung->get_detailorderan1($id);
		$data['get_cart']= $this->m_pengunjung->get_cart();
		$data['get_carttempat']= $this->m_pengunjung->get_carttempat();
		$data['content']='pengunjung/cart';
		$this->load->view('pengunjung/temp', $data);
	}

	public function delete_cart($id)
	{
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('c_login');
		}
		$this->m_pengunjung->delete_cart($id);
		$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Data Berhasil di Hapus !</div>');
		
		redirect('c_pengunjung/cart','refresh');
	}

	public function delete_carttempat($id)
	{
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('c_login');
		}
		$this->m_pengunjung->delete_carttempat($id);
		$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Data Berhasil di Hapus !</div>');
		
		redirect('c_pengunjung/cart','refresh');
	}

	public function input_cart($id){
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('c_login');
		}
		$id_wisata = $this->m_pengunjung->id_cartwisata($id);

		foreach ($id_wisata as $key => $value) {
			$qty = $this->input->post('quantity');
			$qty_cart = $value->jumlah;
			$jumlah = $qty+$qty_cart;
			$id_wisata = $value->id_wisata;
		}	
		if ($id_wisata == $id) {
			
			$data = array(
				'jumlah' => $jumlah
			);
			$this->m_pengunjung->update_cartwisata($value->id_cart,$data);
			$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Data Berhasil di Tambahkan !</div>');
			redirect('c_pengunjung/cart','refresh');
		}else {
			$this->m_pengunjung->input_cart();
			$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Data Berhasil di Tambahkan !</div>');
			redirect('c_pengunjung/cart','refresh');
			
		}
	}

	public function input_carttempat($id){
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('c_login');
		}

		$id_kuliner = $this->m_pengunjung->id_cartkuliner($id);

		foreach ($id_kuliner as $key => $value) {
			$qty = $this->input->post('quantity');
			$qty_cart = $value->jumlah;
			$jumlah = $qty+$qty_cart;
			$id_kuliner = $value->id_kuliner;
		}	
		if ($id_kuliner == $id) {
			
			$data = array(
				'jumlah' => $jumlah
			);
			$this->m_pengunjung->update_carttempat($value->id_carttempat,$data);
			$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Data Berhasil di Tambahkan !</div>');
			redirect('c_pengunjung/cart','refresh');
		}else {
			$this->m_pengunjung->input_carttempat();
			$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Data Berhasil di Tambahkan !</div>');

			redirect('c_pengunjung/cart','refresh');
		}

	}


	public function checkout(){
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('c_login');
		} else {
			$ticket = array(
				'nama_pesanan' => 'new ticket',
				'id_user' => $this->session->userdata('id_user'),
				'tanggal' => date('Y-m-d'),
				'buktipembayaran' => $this->do_upload()
			);
			$id_order = $this->m_pengunjung->pesanan($ticket);
			$data = "";
			$ticket = $this->m_pengunjung->get_cart();
			foreach ($ticket as $key) {
				$ticketdetail = array(
					'id_pesanan' => $id_order,
					'id_tiket' => $key->id_tiket,
					'jumlah_tiket' => $this->input->post('quantity'.$key->id_cart)
				);
				$data = $this->m_pengunjung->pesanandetail($ticketdetail);
			}

			$updatetotal = $this->m_pengunjung->get_keranjang($id_order);
			$total_harga = 0;
			foreach ($updatetotal as $key => $value) {
				$total = $value->jumlah_tiket*$value->harga;
				$total_harga += $total;
			}

			$totalupdate = array(
				'total_harga' => $total_harga
			);
			$this->m_pengunjung->update_pesanan($id_order,$totalupdate);

			// $updatetiket = $this->m_pengunjung->get_totaltiket($id_order);
			// foreach ($updatetiket as $key => $value) {
			// 	$tiket = $this->m_pengunjung->get_tikets();
			// 	$ticket = $value->jumlah_tiket;
			// 	$total_tiket = $tiket - $ticket;
			// }


			$this->m_pengunjung->delete_order();

			$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Data Berhasil di Tambahkan !</div>');
			redirect('c_pengunjung/history_transaksi','refresh');
		}
	}

	public function checkout_tempat(){
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('c_login');
		} else {
			$ticket = array(
				'nama_pesanan' => 'new Booking',
				'id_user' => $this->session->userdata('id_user'),
				'tanggal' => date('Y-m-d'),
				'buktipembayaran' => $this->do_upload()
			);
			$id_order = $this->m_pengunjung->pesanan_tempat($ticket);
			$data = "";
			$ticket 	= $this->m_pengunjung->get_carttempat();
			foreach ($ticket as $key) {
				$ticketdetail = array(
					'id_pesanan' => $id_order,
					'id_kuliner' => $key->id_kuliner,
					'jumlah_booking' => $this->input->post('quantity'.$key->id_carttempat)
					
				);
				$data = $this->m_pengunjung->pestemp_detail($ticketdetail);
			}

			$updatetotal = $this->m_pengunjung->get_keranjangkuliner($id_order);
			$total_harga = 0;
			foreach ($updatetotal as $key => $value) {
				$total = $value->jumlah_booking*$value->harga_booking;
				$total_harga += $total;
			}

			$totalupdate = array(
				'total_harga' => $total_harga
			);
			$this->m_pengunjung->update_pesanankuliner($id_order,$totalupdate);
			$this->m_pengunjung->delete_ordertempat();

			$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Data Berhasil di Tambahkan !</div>');
			redirect('c_pengunjung/history_transaksi','refresh');
		}
	}

	public function tiket($id)
	{
		$data['get_detailtiket']= $this->m_pengunjung->tiket($id);
		$this->load->view('pengunjung/tiket',$data);
	}

	public function ulasan($id)
	{
		$data['total_cart']= $this->db->count_all('cart');
		$data['total_carttempat']= $this->db->count_all('cart_tempat');
		$data['get_ulasan']= $this->m_pengunjung->get_ulasan($id);
		$data['get_detailtiket']= $this->m_pengunjung->get_detailtikets($id);
		$data['content']='pengunjung/ulasan';
		$this->load->view('pengunjung/temp', $data);
	}

	public function testimoni($id)
	{
		$data['total_cart']= $this->db->count_all('cart');
		$data['total_carttempat']= $this->db->count_all('cart_tempat');
		$data['get_ulasan']= $this->m_pengunjung->get_testimoni($id);
		$data['get_detailboking']= $this->m_pengunjung->get_detailboking($id);
		$data['content']='pengunjung/testimoni';
		$this->load->view('pengunjung/temp', $data);
	}

	public function input_ulasan(){
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('c_login');
		}

		$data = array(
			'id_pesanan' => $this->input->post('id_pesanan'),
			'id_wisata' => $this->input->post('id_wisata'),
			'id_user' => $this->input->post('id_user'),
			'tanggal' => date('d-m-Y'),
			'ulasan' => $this->input->post('ulasan')
		);

		if ($this->m_pengunjung->input_ulasan($data)) {
			$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Data Berhasil di Tambahkan !</div>');
			redirect('c_pengunjung/history_transaksi','refresh');
		}else {
			$this->m_pengunjung->input_cart();
			$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Data Berhasil di Tambahkan !</div>');
			redirect('c_pengunjung/history_transaksi','refresh');

		}
	}

	public function input_testimoni(){
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('c_login');
		}

		$data = array(
			'id_pesanan' => $this->input->post('id_pesanan'),
			'id_kuliner' => $this->input->post('id_kuliner'),
			'id_user' => $this->input->post('id_user'),
			'tanggal' => date('d-m-Y'),
			'testimoni' => $this->input->post('testimoni')
		);

		if ($this->m_pengunjung->input_testimoni($data)) {
			$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Data Berhasil di Tambahkan !</div>');
			redirect('c_pengunjung/history_transaksi','refresh');
		}else {
			$this->m_pengunjung->input_cart();
			$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"> Data Berhasil di Tambahkan !</div>');
			redirect('c_pengunjung/history_transaksi','refresh');

		}
	}

	public function detail_pesanan($id)
	{
		$data['total_cart']= $this->db->count_all('cart');
		$data['total_carttempat']= $this->db->count_all('cart_tempat');
		$data['get_tiket']= $this->m_pengunjung->get_detailtiket($id);
		$data['content']='pengunjung/detail_pesanan';
		$this->load->view('pengunjung/temp', $data);
	}

	public function detail_booking($id)
	{
		$data['total_cart']= $this->db->count_all('cart');
		$data['total_carttempat']= $this->db->count_all('cart_tempat');
		$data['get_tiket']= $this->m_pengunjung->get_bookings($id);
		$data['content']='pengunjung/detail_booking';
		$this->load->view('pengunjung/temp', $data);
	}

	public function invoice($id,$ids)
	{
		$data['data']= $this->m_pengunjung->get_detailbookings($id,$ids);
		$this->load->view('pengunjung/invoice',$data);
	}

	public function history_transaksi()
	{
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('c_login');
		}
		$data['total_cart']= $this->db->count_all('cart');
		$data['total_carttempat']= $this->db->count_all('cart_tempat');
		$data['total_carttempat']= $this->db->count_all('cart_tempat');
		$data['get_tiket']= $this->m_pengunjung->get_tiket();
		$data['get_booking']= $this->m_pengunjung->get_booking();
		$data['content']='pengunjung/history_transaksi';
		$this->load->view('pengunjung/temp', $data);
	}

	public function do_upload(){
		$type = explode('.', $_FILES["gambar"]["name"]);
		$type = $type[count($type)-1];
		$image = uniqid(rand()).'.'.$type;
		$url = "./images/".$image;
		if(in_array($type, array("jpg", "jpeg", "gif", "png", "xlx", "docx", "pdf")))
			if(is_uploaded_file($_FILES["gambar"]["tmp_name"]))
				if(move_uploaded_file($_FILES["gambar"]["tmp_name"],$url));
			return $image;
			return "";
		}

		function update_cart(){
			$data=$this->m_pengunjung->update_cart();
			echo json_encode($data);
		}
		var $print;

		public function print(){
			$print = $this->m_pengunjung->get_wisata();
			print_r($print);
		}
	}
	?>