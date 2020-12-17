<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class KartuanggotaModel extends CI_Model {
  // Fungsi untuk menampilkan semua data
  public function view(){
    return $this->db->get('asistenpraktikum')->result();
  }
  
  // Fungsi untuk menampilkan data  berdasarkan id_user nya
  public function view_by($nim_asisten){
    $this->db->where('nim_asisten', $nim_asisten);
    return $this->db->get('asistenpraktikum')->row();
  }
  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, id_user tidak harus divalidasi
    // Jadi id_user di validasi hanya ketika menambah data  saja
    if($mode == "save")
      $this->form_validation->set_rules('id_asisten', 'ID', 'required');
    
    $this->form_validation->set_rules('nim_asisten', 'NIM', 'required');
    $this->form_validation->set_rules('password_asisten', 'Password', 'required');
    $this->form_validation->set_rules('nama_asisten', 'Nama Asisten', 'required');
    $this->form_validation->set_rules('angkatan_asisten', 'Angkatan', 'required');
    $this->form_validation->set_rules('alamat_asisten', 'Alamat Rumah', 'required');
    $this->form_validation->set_rules('ttl_asisten', 'Tanggal Lahir', 'required');
    $this->form_validation->set_rules('email_asisten', 'Email', 'required');
    $this->form_validation->set_rules('notelp_asisten', 'No Telp', 'required|numeric');
    $this->form_validation->set_rules('instagram_asisten', 'Link Instagram', 'required');
    $this->form_validation->set_rules('level', 'Jabatan', 'required');
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel
  public function save(){
    $data = array(
      "id_asisten" => $this->input->post('id_asisten'),
      "nim_asisten" => $this->input->post('nim_asisten'),
      "password_asisten" => md5($this->input->post('password_asisten')),
      "nama_asisten" => $this->input->post('nama_asisten'),
      "angkatan_asisten" => $this->input->post('angkatan_asisten'),
      "alamat_asisten" => $this->input->post('alamat_asisten'),
      "ttl_asisten" => $this->input->post('ttl_asisten'),
      "email_asisten" => $this->input->post('email_asisten'),
      "notelp_asisten" => $this->input->post('notelp_asisten'),
      "instagram_asisten" => $this->input->post('instagram_asisten'),
      "level" => $this->input->post('level'),
    );
    
    $this->db->insert('asistenpraktikum', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data berdasarkan id_user
  public function edit($nim_asisten){
    $data = array(
      "id_asisten" => $this->input->post('id_asisten'),
      "nim_asisten" => $this->input->post('nim_asisten'),
      "password_asisten" => md5($this->input->post('password_asisten')),
      "nama_asisten" => $this->input->post('nama_asisten'),
      "angkatan_asisten" => $this->input->post('angkatan_asisten'),
      "alamat_asisten" => $this->input->post('alamat_asisten'),
      "ttl_asisten" => $this->input->post('ttl_asisten'),
      "email_asisten" => $this->input->post('email_asisten'),
      "notelp_asisten" => $this->input->post('notelp_asisten'),
      "instagram_asisten" => $this->input->post('instagram_asisten'),
      "level" => $this->input->post('level'),
    );
    
    $this->db->where('nim_asisten', $nim_asisten);
    $this->db->update('asistenpraktikum', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data berdasarkan id_user
  public function delete($nim_asisten){
    $this->db->where('nim_asisten', $nim_asisten);
    $this->db->delete('asistenpraktikum'); // Untuk mengeksekusi perintah delete data
  }
}