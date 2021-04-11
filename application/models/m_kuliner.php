<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kuliner extends CI_Model {

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

  public function sum_totalpendapatan(){ 
    $array = array('status >=' => 1);
    $this->db->select('total_harga,status');
    $this->db->from('pesanan_tempat');
    $this->db->where($array);                
    $query = $this->db->get();
    return $query->result();
  }

  public function get_detailpesan($tanggal)
  {
    $vbulan = date("m",strtotime($tanggal)); 
    $this->db->select('tanggal as tanggal');
    $this->db->from('pesanan_tempat a');
    $this->db->join('pestemp_detail b', 'b.id_pesanan = a.id_pesanan');
    $this->db->join('kuliner c','c.id_kuliner = b.id_kuliner');
    // $this->db->join('wisata d', 'c.id_wisata = d.id_wisata');
    $this->db->where('month(a.tanggal)',$vbulan);
    return $this->db->get()->row();
  }

  public function get_month($tanggal)
  {
    $this->db->distinct();
    $this->db->select('DATE_FORMAT(a.tanggal,"%M %Y") as bulan');
    $this->db->from('pesanan_tempat a');
    $this->db->where('a.tanggal',$tanggal);
    return $this->db->get()->result();
  }

  public function detailpesan($tanggal)
  {
    $vbulan = date("m",strtotime($tanggal)); 
    $array = array('month(a.tanggal)'=> $vbulan);
    $this->db->select('e.nama as namapelanggan,c.nama_kuliner as kuliner,b.jumlah_booking as jumlah,c.harga_booking as harga,a.total_harga total,a.tanggal as tanggal');
    // $this->db->select('*');
    $this->db->from('pesanan_tempat a');
    $this->db->join('pestemp_detail b', 'b.id_pesanan = a.id_pesanan');
    $this->db->join('kuliner c','b.id_kuliner = c.id_kuliner');
    // $this->db->join('wisata d', 'c.id_wisata = d.id_wisata');
    $this->db->join('user e', 'a.id_user = e.id_user');
    $this->db->where($array);
    return $this->db->get()->result();
  }

  public function laporan_penjualan()
  {
    $user_id = $this->session->userdata('user_id');
    // $array = array('a.penjual =' => $user_id);
    $this->db->distinct();
    $this->db->select('DATE_FORMAT(a.tanggal,"%M %Y") as bulan,sum(a.total_harga) as pendapatan,count(a.id_pesanan) as jumlah_transaksi,sum(b.total_produk) as total_produk,a.tanggal');
    $this->db->from('pesanan_tempat a');
    $this->db->join('(select id_pesanan,sum(jumlah_booking) as total_produk
      from pestemp_detail
      group by id_pesanan) b', 'a.id_pesanan = b.id_pesanan');
    // $this->db->where($array);
    $this->db->group_by('MONTH(a.tanggal), YEAR(a.tanggal)');
    return $this->db->get()->result();
  }

  public function input_kuliner(){
    $data = array(
      'nama_kuliner' => $this->input->post('nama'),
      'foto' => $this->do_upload(),
      'jam' => $this->input->post('jam'),
      'lokasi' => $this->input->post('lokasi'),
      'jumlah_kursi' => $this->input->post('kursi'),
      'harga_booking' => $this->input->post('booking'),
      'desc' => $this->input->post('desc')
    );

    return $this->db->insert('kuliner', $data);
  }

  public function get_kuliner(){
    $this->db->select('*'); 
    $this->db->from('kuliner');
    return $this->db->get()->result();  
  }

  public function get_vieworderan($id){
    $this->db->select('*'); 
    $this->db->from('pesanan_tempat');
    $this->db->join('pestemp_detail','pestemp_detail.id_pesanan = pesanan_tempat.id_pesanan');
    $this->db->join('user','user.id_user = pesanan_tempat.id_user');
    $this->db->join('kuliner','kuliner.id_kuliner = pestemp_detail.id_kuliner');
    $this->db->where('pesanan_tempat.id_pesanan',$id);
    return $this->db->get()->result();  
  }

  public function get_booking(){
    $this->db->select('*'); 
    $this->db->from('pesanan_tempat');
        // $this->db->from('kuliner');
    // $this->db->join('pestemp_detail','pestemp_detail.id_pesanan = pesanan_tempat.id_pesanan');
        // $this->db->join('kuliner','kuliner.id_kuliner = pestemp_detail.id_kuliner');
    $this->db->join('user','user.id_user = pesanan_tempat.id_user');
    return $this->db->get()->result();  
  }

  public function update_tiket($id,$data)
  {
    $this->db->where('id_pesanan', $id);
    return $this->db->update('pesanan_tempat',$data);
  }

  public function get_updatekuliner($id){
    $this->db->select('*'); 
    $this->db->from('kuliner');
    $this->db->where('id_kuliner',$id);
    return $this->db->get()->row();  
  }

  public function delete_kuliner($id){
    return $this->db->delete('kuliner',array('id_kuliner'=>$id));
  }

  public function edit_kuliner($id){
    $data = array(
      'nama_kuliner' => $this->input->post('nama'),
      'foto' => $this->do_upload(),
      'jam' => $this->input->post('jam'),
      'lokasi' => $this->input->post('lokasi'),
      'jumlah_kursi' => $this->input->post('kursi'),
      'desc' => $this->input->post('desc')
    );
    $this->db->where('id_kuliner', $id);

    return $this->db->update('kuliner', $data);
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