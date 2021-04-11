<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['content']='signinup/login';
		$this->load->view('signinup/template', $data);
	}

	public function login(){
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			$this->load->model('m_admin');
			$query = $this->m_admin->login($post);
			if($query->num_rows()>0){
				$row = $query->row();
				$params = array(
					'id_user' => $row->id_user,
					'nama' => $row->nama,
					// 'foto' => $row->foto,
					'level' => $row->level,
					'logged_in' => TRUE
					);
				$this -> session-> set_userdata($params);
				//Role ketika login
				$user = $this ->db->get_where('user',['id_user' => $this->session->userdata('id_user')])->row_array();
				$user = $this ->db->get_where('user',['nama' => $this->session->userdata('nama')])->row_array();
				if ($user['level'] == 1) {
					redirect ('c_admin');
				} else if ($user['level'] == 2) {
					redirect ('c_kuliner');
				} else {
					redirect ('c_pengunjung/pengunjung');
				}
			}else{
				echo "<script>
					alert('Login Gagal');
					window.location='".site_url('c_login')."';
					</script>";
			}
		}
	}

	public function register()
	{
		$data['content']='signinup/register';
		$this->load->view('signinup/template', $data);
	}

	public function registeraccount()
	{
		$this->load->model('m_admin');
		$this->m_admin->create_user(); 
		redirect('c_login','refresh');
	}

	public function logout(){
		$this-> session-> unset_userdata('username');
		$this-> session-> unset_userdata('level');
		$this-> session-> sess_destroy();
	
		echo "<script>
		alert('Logout Berhasil');
		window.location='".site_url('c_pengunjung')."';
		</script>";
	}

}