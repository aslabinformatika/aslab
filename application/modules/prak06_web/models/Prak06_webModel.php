<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prak06_webModel extends CI_Model {
  // Fungsi untuk menampilkan semua data
  public function view(){
    return $this->db->get('prak06_web')->result();
  }
  
  // Fungsi untuk menampilkan data  berdasarkan id_user nya
  public function view_by($nim_praktikum){
    $this->db->where('nim_praktikum', $nim_praktikum);
    return $this->db->get('prak06_web')->row();
  }
  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, id_user tidak harus divalidasi
    // Jadi id_user di validasi hanya ketika menambah data  saja
    if($mode == "save")
      $this->form_validation->set_rules('nim_praktikum', 'NIM Praktikan', 'required|numeric');
    
    $this->form_validation->set_rules('nama_praktikan', 'Nama Praktikan', 'required');
    $this->form_validation->set_rules('kelompok_praktikum', 'Kelompok Praktikum', 'required|numeric');
    $this->form_validation->set_rules('link_rangkuman', 'Link Rangkuman', 'required');
    $this->form_validation->set_rules('tanggal_pengumpulan', 'Tanggal Pengumpulan');
    $this->form_validation->set_rules('nama_asisten', 'Nama Asisten', 'required');
    $this->form_validation->set_rules('penerima_laporan', 'Penerima Laporan', 'required');
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel
  public function save(){
    $data = array(
      "nim_praktikum" => $this->input->post('nim_praktikum'),
      "nama_praktikan" => $this->input->post('nama_praktikan'),
      "kelompok_praktikum" => $this->input->post('kelompok_praktikum'),
      "link_rangkuman" => $this->input->post('link_rangkuman'),
      "tanggal_pengumpulan" => $this->input->post('tanggal_pengumpulan'),
      "nama_asisten" => $this->input->post('nama_asisten'),
      "penerima_laporan" => $this->input->post('penerima_laporan'),
    );
    
    $this->db->insert('prak06_web', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data berdasarkan id_user
  public function edit($nim_praktikum){
    $data = array(
      "nim_praktikum" => $this->input->post('nim_praktikum'),
      "nama_praktikan" => $this->input->post('nama_praktikan'),
      "kelompok_praktikum" => $this->input->post('kelompok_praktikum'),
      "link_rangkuman" => $this->input->post('link_rangkuman'),
      "tanggal_pengumpulan" => $this->input->post('tanggal_pengumpulan'),
      "nama_asisten" => $this->input->post('nama_asisten'),
      "penerima_laporan" => $this->input->post('penerima_laporan'),
    );
    
    $this->db->where('nim_praktikum', $nim_praktikum);
    $this->db->update('prak06_web', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data berdasarkan id_user
  public function delete($nim_praktikum){
    $this->db->where('nim_praktikum', $nim_praktikum);
    $this->db->delete('prak06_web'); // Untuk mengeksekusi perintah delete data
  }
}