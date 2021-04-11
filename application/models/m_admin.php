<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

  public function login($post){
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('username', $post['username']);
    $this->db->where('password', $post['password']);
    $query = $this->db->get();
    return $query;
  }

  public function create_user(){

    $data = array(
      'username' => $this->input->post('username'),
      'password' => $this->input->post('password'),
      'nama' => $this->input->post('nama'),
      'foto' => $this->do_upload(),
      'level' => 3
    );

    return $this->db->insert('user', $data);
  }

  public function sum_totalpendapatan(){ 
    // $user_id = $this->session->userdata('id_user');
    $array = array('status >=' => 1);
    $this->db->select('total_harga,status');
    $this->db->from('pesanan');
    $this->db->where($array);                
    $query = $this->db->get();
    return $query->result();
  }

  public function get_user(){
    $this->db->select('*');	
    $this->db->from('user');
    return $this->db->get()->result();	
  }

  public function get_userprofile(){
    $id_user = $this->session->userdata('id_user');
    $this->db->select('*'); 
    $this->db->from('user');
    $this->db->where('id_user',$id_user);
    return $this->db->get()->result();  
  }

  public function get_updateprofile(){
    $id_user = $this->session->userdata('id_user');
    $this->db->select('*'); 
    $this->db->from('user');
    $this->db->where('id_user',$id_user);
    return $this->db->get()->row();  
  }

  public function input_wisata(){
    $data = array(
      'nama_wisata' => $this->input->post('nama'),
      'foto' => $this->do_upload(),
      'jam' => $this->input->post('jam'),
      'lokasi' => $this->input->post('lokasi'),
      'desc' => $this->input->post('desc')
    );

    return $this->db->insert('wisata', $data);
  }

  public function input_tiket(){
    $data = array(
      'harga' => $this->input->post('harga'),
      'jumlah' => $this->input->post('jumlah'),
      'id_wisata' => $this->input->post('id')
    );

    return $this->db->insert('tiket', $data);
  }

  public function get_wisata(){
    $this->db->select('*'); 
    $this->db->from('wisata');
    return $this->db->get()->result();  
  }

  public function get_datatiket(){
    $this->db->select('*'); 
    $this->db->from('tiket');
    $this->db->join('wisata','wisata.id_wisata = tiket.id_wisata');
    return $this->db->get()->result();  
  }

  public function get_updatewisata($id){
    $this->db->select('*'); 
    $this->db->from('wisata');
    $this->db->where('id_wisata',$id);
    return $this->db->get()->row();  
  }

  public function get_updatetiket($id){
    $this->db->select('*'); 
    $this->db->from('tiket');
    $this->db->join('wisata','wisata.id_wisata = tiket.id_wisata');
    $this->db->where('tiket.id_tiket',$id);
    return $this->db->get()->result();  
  }

  public function updatetiket($id,$data)
  {
    $this->db->where('id_tiket', $id);
    return $this->db->update('tiket',$data);
  }

  public function edit_tiket($id){
    $data = array(
      'id_wisata' => $this->input->post('id'),
      'jumlah' => $this->input->post('jumlah'),
      'harga' => $this->input->post('harga')
    );
    $this->db->where('id_tiket', $id);

    return $this->db->update('tiket', $data);
  } 

  public function delete_tiket($id){
    return $this->db->delete('tiket',array('id_tiket'=>$id));
  }

  public function delete_wisata($id){
    return $this->db->delete('wisata',array('id_wisata'=>$id));
  }

  public function edit_wisata($id){
    $data = array(
      'nama_wisata' => $this->input->post('nama'),
      'foto' => $this->do_upload(),
      'jam' => $this->input->post('jam'),
      'desC' => $this->input->post('desc')
    );
    $this->db->where('id_wisata', $id);

    return $this->db->update('wisata', $data);
  }

  public function updateprofile($id,$data)
  {
    $this->db->where('user_id', $id);
    return $this->db->update('user',$data);
  }

  public function edit_profile($id){
    $data = array(
      'nama' => $this->input->post('nama'),
      // 'username' => $this->do_upload(),
      'username' => $this->input->post('username'),
      'password' => $this->input->post('password')
    );
    $this->db->where('id_user', $id);

    return $this->db->update('user', $data);
  }

  public function get_tiket(){
    $this->db->select('pesanan.nama_pesanan,pesanan.id_pesanan,pesanan.total_harga,pesanan.buktipembayaran,pesanan.tanggal,pesanan.status,user.nama'); 
    $this->db->from('pesanan');
        // $this->db->from('wisata');
    $this->db->join('user','user.id_user = pesanan.id_user');
    return $this->db->get()->result();  
  }

  public function get_vieworderan($id){
    $this->db->select('*'); 
    $this->db->from('pesanan');
    $this->db->join('pesanan_detail','pesanan_detail.id_pesanan = pesanan.id_pesanan');
    $this->db->join('user','user.id_user = pesanan.id_user');
    $this->db->join('tiket','tiket.id_tiket = pesanan_detail.id_tiket');
    $this->db->join('wisata','wisata.id_wisata = tiket.id_wisata');
    $this->db->where('pesanan.id_pesanan',$id);
    return $this->db->get()->result();  
  }

  public function update_tiket($id,$data)
  {
    $this->db->where('id_pesanan', $id);
    return $this->db->update('pesanan',$data);
  }

  public function laporan_penjualan()
  {
    $user_id = $this->session->userdata('user_id');
    // $array = array('a.penjual =' => $user_id);
    $this->db->distinct();
    $this->db->select('DATE_FORMAT(a.tanggal,"%M %Y") as bulan,sum(a.total_harga) as pendapatan,count(a.id_pesanan) as jumlah_transaksi,sum(b.total_produk) as total_produk,a.tanggal');
    $this->db->from('pesanan a');
    $this->db->join('(select id_pesanan,sum(jumlah_tiket) as total_produk
      from pesanan_detail
      group by id_pesanan) b', 'a.id_pesanan = b.id_pesanan');
    // $this->db->where($array);
    $this->db->group_by('MONTH(a.tanggal), YEAR(a.tanggal)');
    return $this->db->get()->result();
  }

  public function get_detailpesan($tanggal)
  {
    $vbulan = date("m",strtotime($tanggal)); 
    $this->db->select('tanggal as tanggal');
    $this->db->from('pesanan a');
    $this->db->join('pesanan_detail b', 'b.id_pesanan = a.id_pesanan');
    $this->db->join('tiket c','b.id_tiket = c.id_tiket');
    $this->db->join('wisata d', 'c.id_wisata = d.id_wisata');
    $this->db->where('month(a.tanggal)',$vbulan);
    return $this->db->get()->row();
  }

  public function detailpesan($tanggal)
  {
    $vbulan = date("m",strtotime($tanggal)); 
    $array = array('month(a.tanggal)'=> $vbulan);
    $this->db->select('e.nama as namapelanggan,d.nama_wisata as wisata,b.jumlah_tiket as jumlah,c.harga as harga,a.total_harga total,a.tanggal as tanggal');
    // $this->db->select('*');
    $this->db->from('pesanan a');
    $this->db->join('pesanan_detail b', 'b.id_pesanan = a.id_pesanan');
    $this->db->join('tiket c','b.id_tiket = c.id_tiket');
    $this->db->join('wisata d', 'c.id_wisata = d.id_wisata');
    $this->db->join('user e', 'a.id_user = e.id_user');
    $this->db->where($array);
    return $this->db->get()->result();
  }

  public function get_month($tanggal)
  {
    $this->db->distinct();
    $this->db->select('DATE_FORMAT(a.tanggal,"%M %Y") as bulan');
    $this->db->from('pesanan a');
    $this->db->where('a.tanggal',$tanggal);
    return $this->db->get()->result();
  }

  public function do_upload(){
    $type = explode('.', $_FILES["gambar"]["name"]);
    $type = $type[count($type)-1];
    $image = uniqid(rand()).'.'.$type;
    $url = "./images/".$image;
    if(in_array($type, array("jpg","JPG", "jpeg", "gif", "png", "xlx", "docx", "pdf")))
      if(is_uploaded_file($_FILES["gambar"]["tmp_name"]))
        if(move_uploaded_file($_FILES["gambar"]["tmp_name"],$url));
      return $image;
      return "";
    }
  }
  ?>