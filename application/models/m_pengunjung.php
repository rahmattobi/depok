<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengunjung extends CI_Model {

  public function get_user(){
    $this->db->select('*');	
    $this->db->from('user');
    return $this->db->get()->result();	
  }

  public function input_cart(){
    $data = array(
      'id_user' => $this->session->userdata('id_user'),
      'jumlah' => $this->input->post('quantity'),
      'id_tiket' => $this->input->post('id_tiket')
    );

    return $this->db->insert('cart', $data);
  }

  public function input_carttempat(){
    $data = array(
      'id_user' => $this->session->userdata('id_user'),
      'jumlah' => $this->input->post('quantity'),
      'id_kuliner' => $this->input->post('id_kuliner')
    );

    return $this->db->insert('cart_tempat', $data);
  }

  public function input_ulasan($data){
    return $this->db->insert('ulasan', $data);
  }

  public function input_testimoni($data){
    return $this->db->insert('testimoni', $data);
  }

  public function ulasan($id){
    $this->db->select('*'); 
    $this->db->from('ulasan');
    $this->db->join('wisata', 'wisata.id_wisata = ulasan.id_wisata');
    $this->db->join('user', 'user.id_user = ulasan.id_user');
    $this->db->where('wisata.id_wisata',$id);
    $query = $this->db->get();  
    return $query->result();
  }

  public function testimoni($id){
    $this->db->select('*'); 
    $this->db->from('testimoni');
    $this->db->join('kuliner', 'kuliner.id_kuliner = testimoni.id_kuliner');
    $this->db->join('user', 'user.id_user = testimoni.id_user');
    $this->db->where('kuliner.id_kuliner',$id);
    $query = $this->db->get();  
    return $query->result();
  }

  public function get_ulasan($id){
    $id_user = $this->session->userdata('id_user');
    $this->db->select('*'); 
    $this->db->from('ulasan');
    $this->db->join('wisata', 'wisata.id_wisata = ulasan.id_wisata');
    $this->db->join('user', 'user.id_user = ulasan.id_user');
    $this->db->where('wisata.id_wisata',$id);
    $this->db->where('ulasan.id_user',$id_user);
    $query = $this->db->get();  
    return $query->result();
  }

  public function get_testimoni($id){
    $id_user = $this->session->userdata('id_user');
    $this->db->select('*'); 
    $this->db->from('testimoni');
    $this->db->join('kuliner', 'kuliner.id_kuliner = testimoni.id_kuliner');
    $this->db->join('user', 'user.id_user = testimoni.id_user');
    $this->db->where('kuliner.id_kuliner',$id);
    $this->db->where('testimoni.id_user',$id_user);
    $query = $this->db->get();  
    return $query->result();
  }

  public function get_cart(){
    $id = $this->session->userdata('id_user');
    $this->db->select('*'); 
    $this->db->from('wisata');
    $this->db->join('tiket', 'tiket.id_wisata = wisata.id_wisata','Left');
    $this->db->join('cart', 'cart.id_tiket = tiket.id_tiket');
    $this->db->where('cart.id_user',$id);
    $query = $this->db->get();  
    return $query->result();
  }

  public function id_cartwisata($id_wisata){
    $id = $this->session->userdata('id_user');
    $this->db->select('wisata.id_wisata,cart.id_cart,cart.jumlah'); 
    $this->db->from('wisata');
    $this->db->join('tiket', 'tiket.id_wisata = wisata.id_wisata','Left');
    $this->db->join('cart', 'cart.id_tiket = tiket.id_tiket');
    $this->db->where('cart.id_user',$id);
    $this->db->where('wisata.id_wisata',$id_wisata);
    $query = $this->db->get();  
    return $query->result();
  }

  public function id_cartkuliner($id_kuliner){
    $id = $this->session->userdata('id_user');
    $this->db->select('kuliner.id_kuliner,cart_tempat.id_carttempat,cart_tempat.jumlah');
    $this->db->from('user');
    $this->db->join('cart_tempat', 'cart_tempat.id_user = user.id_user');
    $this->db->join('kuliner', 'kuliner.id_kuliner = cart_tempat.id_kuliner','Left');
    $this->db->where('cart_tempat.id_user',$id); 
    $this->db->where('kuliner.id_kuliner',$id_kuliner);
    $query = $this->db->get();  
    return $query->result();
  }

  public function update_cartwisata($id,$data)
  {
    $this->db->where('id_cart', $id);
    return $this->db->update('cart',$data);
  }

  public function update_carttempat($id,$data)
  {
    $this->db->where('id_carttempat', $id);
    return $this->db->update('cart_tempat',$data);
  }

  public function get_carttempat(){
    $id = $this->session->userdata('id_user');
    $this->db->select('*'); 
    $this->db->from('user');
    $this->db->join('cart_tempat', 'cart_tempat.id_user = user.id_user');
    $this->db->join('kuliner', 'kuliner.id_kuliner = cart_tempat.id_kuliner','Left');
    $this->db->where('cart_tempat.id_user',$id);
    $query = $this->db->get();  
    return $query->result();
  }

  public function pesanan($ticket){
    $this->db->insert('pesanan', $ticket);
    return $this->db->insert_id();
  }

  public function pestemp_detail($orderdetail){
    $this->db->insert('pestemp_detail', $orderdetail);
    return $this->db->insert_id();
  }

  public function pesanandetail($orderdetail){
    $this->db->insert('pesanan_detail', $orderdetail);
    return $this->db->insert_id();
  }

  public function pesanan_tempat($orderdetail){
    $this->db->insert('pesanan_tempat', $orderdetail);
    return $this->db->insert_id();
  }

  public function delete_order(){
    $this->db->empty_table('cart');
  }

  public function delete_ordertempat(){
    $this->db->empty_table('cart_tempat');
  }

  public function get_keranjang($id){
    // $user_id = $this->session->userdata('user_id');
    $this->db->select('pesanan.id_pesanan,pesanan_detail.id_tiket,pesanan_detail.jumlah_tiket,tiket.harga');
    $this->db->from('pesanan');
    $this->db->join('pesanan_detail','pesanan_detail.id_pesanan = pesanan.id_pesanan');
    $this->db->join('tiket','tiket.id_tiket = pesanan_detail.id_tiket');
    // $this->db->where('pesanan.id_user',$user_id);
    $this->db->where('pesanan.id_pesanan',$id);
    return $this->db->get()->result();
  }

   public function get_totaltiket($id){
    $this->db->select('pesanan.id_pesanan,pesanan_detail.id_tiket,pesanan_detail.jumlah_tiket');
    $this->db->from('pesanan');
    $this->db->join('pesanan_detail','pesanan_detail.id_pesanan = pesanan.id_pesanan');
    $this->db->join('tiket','tiket.id_tiket = pesanan_detail.id_tiket');
    $this->db->where('pesanan.id_pesanan',$id);
    return $this->db->get()->result();
  }

  public function get_keranjangkuliner($id){
    // $user_id = $this->session->userdata('user_id');
    $this->db->select('pesanan_tempat.id_pesanan,pestemp_detail.id_kuliner,pestemp_detail.jumlah_booking,kuliner.harga_booking');
    $this->db->from('pesanan_tempat');
    $this->db->join('pestemp_detail','pestemp_detail.id_pesanan = pesanan_tempat.id_pesanan');
    $this->db->join('kuliner','kuliner.id_kuliner = pestemp_detail.id_kuliner');
    // $this->db->where('pesanan.id_user',$user_id);
    $this->db->where('pesanan_tempat.id_pesanan',$id);
    return $this->db->get()->result();
  }

  public function update_pesanan($id,$data)
  {
    $this->db->where('id_pesanan', $id);
    return $this->db->update('pesanan',$data);
  }


  public function update_pesanankuliner($id,$data)
  {
    $this->db->where('id_pesanan', $id);
    return $this->db->update('pesanan_tempat',$data);
  }

  public function get_detailorderan1($id_pesdet){
    $id = $this->session->userdata('id_user');
    $this->db->distinct();
    $this->db->select('*'); 
    $this->db->from('user');
    $this->db->join('pesanan', 'pesanan.id_user = user.id_user');
    $this->db->join('pesanan_detail', 'pesanan_detail.id_pesanan = pesanan.id_pesanan');
    $this->db->join('tiket', 'tiket.id_tiket = pesanan_detail.id_tiket');
    $this->db->join('wisata', 'wisata.id_wisata = tiket.id_wisata');
    $this->db->where('pesanan.id_pesanan',$id_pesdet);
    $this->db->where('user.id_user',$id);
    $query = $this->db->get();  
    return $query->result();
  }

  public function get_detailbooking($id_pesdet){
    $id = $this->session->userdata('id_user');
    $this->db->distinct();
    $this->db->select('*'); 
    $this->db->from('user');
    $this->db->join('pesanan', 'pesanan.id_user = user.id_user');
    $this->db->join('pesanan_tempat', 'pesanan_tempat.id_pesanan = pesanan.id_pesanan');
        // $this->db->join('tiket', 'tiket.id_tiket = pesanan_detail.id_tiket');
    $this->db->join('kuliner', 'kuliner.id_kuliner = pesanan_tempat.id_kuliner');
    $this->db->where('pesanan.id_pesanan',$id_pesdet);
    $this->db->where('user.id_user',$id);
    $query = $this->db->get();  
    return $query->result();
  }

  public function uploudbuktipembayaran()
  {
    $id = $this->input->post('id_pesdet');
    $data = array(
      'bukti_pembayaran' => $this->do_upload()
    );
    $this->db->where('id_pesdet', $id);
    return $this->db->update('pesanan_detail',$data);
  }

  public function uploudbuktipembayaranbooking()
  {
    $id = $this->input->post('id_pestem');
    $data = array(
      'bukti_pembayaran' => $this->do_upload()
    );
    $this->db->where('id_pestem', $id);
    return $this->db->update('pesanan_tempat',$data);
  }

  public function get_userprofile(){
    $id_user = $this->session->userdata('id_user');
    $this->db->select('*'); 
    $this->db->from('user');
    $this->db->where('id_user',$id_user);
    return $this->db->get()->result();  
  }

  public function get_detailwisata($id){
    $this->db->select('*'); 
    $this->db->from('wisata');
    $this->db->join('tiket', 'tiket.id_wisata = wisata.id_wisata','Left');
    $this->db->where('wisata.id_wisata',$id);
    $query = $this->db->get();  
    return $query->result();
  }

  public function get_detailkuliner($id){
    $this->db->select('*'); 
    $this->db->from('kuliner');
        // $this->db->join('tiket', 'tiket.id_wisata = wisata.id_wisata','Left');
    $this->db->where('kuliner.id_kuliner',$id);
    $query = $this->db->get();  
    return $query->result();
  }

  public function get_updateprofile(){
    $id_user = $this->session->userdata('id_user');
    $this->db->select('*'); 
    $this->db->from('user');
    $this->db->where('id_user',$id_user);
    return $this->db->get()->row();  
  }

  public function get_wisata(){
    $this->db->select('*'); 
    $this->db->from('wisata');
    // $this->db->join('tiket', 'tiket.id_wisata = wisata.id_wisata','');
    return $this->db->get()->result();  
  }

  public function get_kuliner(){
    $this->db->select('*'); 
    $this->db->from('kuliner');
        // $this->db->join('tiket', 'tiket.id_wisata = wisata.id_wisata','Left');
    return $this->db->get()->result();  
  }

  public function delete_cart($id){
    return $this->db->delete('cart',array('id_cart'=>$id));
  }

  public function delete_carttempat($id){
    return $this->db->delete('cart_tempat',array('id_carttempat'=>$id));
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
      'username' => $this->input->post('username'),
      'password' => $this->input->post('password')
    );
    $this->db->where('id_user', $id);

    return $this->db->update('user', $data);
  }

  public function get_tiket(){
    $id_user = $this->session->userdata('id_user');
    $this->db->select('*'); 
    $this->db->from('pesanan');
    $this->db->where('pesanan.id_user',$id_user);
    return $this->db->get()->result();  
  }

   public function get_tikets(){
    $this->db->select('id_tiket,jumlah'); 
    $this->db->from('tiket');
    return $this->db->get()->result();  
  }

  public function get_booking(){
    $id_user = $this->session->userdata('id_user');
    $this->db->select('*'); 
    $this->db->from('pesanan_tempat');
    return $this->db->get()->result();  
  }


  public function get_detailtiket($id){
        // $id_user = $this->session->userdata('id_user');
    $this->db->select('*'); 
    $this->db->from('pesanan');
    $this->db->join('pesanan_detail','pesanan_detail.id_pesanan = pesanan.id_pesanan');
    $this->db->join('tiket','tiket.id_tiket = pesanan_detail.id_tiket');
    $this->db->join('wisata','wisata.id_wisata = tiket.id_wisata');
    $this->db->join('user','user.id_user = pesanan.id_user');
    $this->db->where('pesanan.id_pesanan',$id);
    return $this->db->get()->result();  
  }

  public function get_bookings($id){
        // $id_user = $this->session->userdata('id_user');
    $this->db->select('*'); 
    $this->db->from('pesanan_tempat');
    $this->db->join('pestemp_detail','pestemp_detail.id_pesanan = pesanan_tempat.id_pesanan');
    $this->db->join('kuliner','kuliner.id_kuliner = pestemp_detail.id_kuliner');
    $this->db->join('user','user.id_user = pesanan_tempat.id_user');
    $this->db->where('pesanan_tempat.id_pesanan',$id);
    return $this->db->get()->result();  
  }

  public function get_detailtikets($id){
        // $id_user = $this->session->userdata('id_user');
    $this->db->select('*'); 
    $this->db->from('pesanan');
    $this->db->join('pesanan_detail','pesanan_detail.id_pesanan = pesanan.id_pesanan');
    $this->db->join('tiket','tiket.id_tiket = pesanan_detail.id_tiket');
    $this->db->join('wisata','wisata.id_wisata = tiket.id_wisata');
    $this->db->join('user','user.id_user = pesanan.id_user');
    $this->db->where('wisata.id_wisata',$id);
    return $this->db->get()->row();  
  }

   public function tiket($id){
        // $id_user = $this->session->userdata('id_user');
    $this->db->select('*'); 
    $this->db->from('pesanan');
    $this->db->join('pesanan_detail','pesanan_detail.id_pesanan = pesanan.id_pesanan');
    $this->db->join('tiket','tiket.id_tiket = pesanan_detail.id_tiket');
    $this->db->join('wisata','wisata.id_wisata = tiket.id_wisata');
    $this->db->join('user','user.id_user = pesanan.id_user');
    $this->db->where('pesanan_detail.id_pesdet',$id);
    return $this->db->get()->result();  
  }

  public function get_detailboking($id){
    $this->db->select('*'); 
    $this->db->from('pesanan_tempat');
    $this->db->join('pestemp_detail','pestemp_detail.id_pesanan = pesanan_tempat.id_pesanan');
    $this->db->join('kuliner','kuliner.id_kuliner = pestemp_detail.id_kuliner');
    $this->db->join('user','user.id_user = pesanan_tempat.id_user');
    $this->db->where('kuliner.id_kuliner',$id);
    return $this->db->get()->row();  
  }

  public function get_detailbookings($id,$ids){
   $this->db->select('*'); 
   $this->db->from('pesanan_tempat');
   $this->db->join('pestemp_detail','pestemp_detail.id_pesanan = pesanan_tempat.id_pesanan');
   $this->db->join('user','user.id_user = pesanan_tempat.id_user');
   $this->db->join('kuliner','kuliner.id_kuliner = pestemp_detail.id_kuliner');
   $this->db->where('kuliner.id_kuliner',$id);
   $this->db->where('pesanan_tempat.id_pesanan',$ids);
   return $this->db->get()->result(); 
 }

 public function update_cart(){
  $quantity=$this->input->post('quantity');
  $id_cart=$this->input->post('id_carttempat');

  $this->db->set('jumlah', $quantity);
  $this->db->where('id_carttempat', $id_cart);
  $result=$this->db->update('cart_tempat');
  return $result;
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
}
?>