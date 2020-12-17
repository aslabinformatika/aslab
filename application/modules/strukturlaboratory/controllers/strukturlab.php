<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kartuanggota extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    $this->load->library('session');
    
    $this->load->model('KartuanggotaModel'); // Load KartuanggotaModel ke controller ini
  }
  
  public function userdata(){
    if($this->session->userdata('akses')=='1'){
    $data['asistenpraktikum'] = $this->KartuanggotaModel->view();
    $this->load->view('userdata_v', $data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  public function tambah(){
    if($this->session->userdata('akses')=='1'){
    $this->load->view('tambahuserdata_v');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
  
  public function tambah_data(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->KartuanggotaModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->KartuanggotaModel->save(); // Panggil fungsi save() yang ada di KartuanggotaModel.php
        redirect('kartuanggota/userdata');
      }
    }
    
    $this->load->view('tambahuserdata_v');
  }
  
  public function ubah($nim_asisten){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->KartuanggotaModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->KartuanggotaModel->edit($nim_asisten); // Panggil fungsi edit() yang ada di User_asistenModel.php
        redirect('kartuanggota/userdata');
      }
    }
    
    $data['asistenpraktikum'] = $this->KartuanggotaModel->view_by($nim_asisten);
    $this->load->view('ubahuserdata_v', $data);
  }
  
  public function hapus($nim_asisten){
    if($this->session->userdata('akses')=='1'){
    $this->KartuanggotaModel->delete($nim_asisten); // Panggil fungsi delete() yang ada di KartuanggotaModel.php
    redirect('kartuanggota/userdata');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}