<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prak05_sistemoperasi extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    $this->load->library('session');
    
    $this->load->model('Prak05_sistemoperasiModel'); // Load Prak05_sistemoperasiModel ke controller ini
  }
  
  public function index(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
    $data['prak05_sistemoperasi'] = $this->Prak05_sistemoperasiModel->view();
    $this->load->view('index', $data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  public function tambah(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
    $this->load->view('tambah');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
  
  public function tambah_data(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->Prak05_sistemoperasiModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Prak05_sistemoperasiModel->save(); // Panggil fungsi save() yang ada di Prak05_sistemoperasiModel.php
        redirect('prak05_sistemoperasi');
      }
    }
    
    $this->load->view('tambah');
  }
  
  // public function ubah($id_praktikum01){
  //   if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
  //     if($this->Prak05_sistemoperasiModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
  //       $this->Prak05_sistemoperasiModel->edit($id_praktikum01); // Panggil fungsi edit() yang ada di Prak05_sistemoperasiModel.php
  //       redirect('prak05_sistemoperasi');
  //     }
  //   }
    
  //   $data['praktikum01algoprog'] = $this->Prak05_sistemoperasiModel->view_by($id_praktikum01);
  //   $this->load->view('form_ubah', $data);
  // }
  
  public function hapus($nim_praktikum){
    if($this->session->userdata('akses')=='1'){
    $this->Prak05_sistemoperasiModel->delete($nim_praktikum); // Panggil fungsi delete() yang ada di Prak05_sistemoperasiModel.php
    redirect('prak05_sistemoperasi');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}