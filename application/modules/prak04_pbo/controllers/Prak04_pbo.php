<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prak04_pbo extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    $this->load->library('session');
    
    $this->load->model('Prak04_pboModel'); // Load Prak04_pboModel ke controller ini
  }
  
  public function index(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
    $data['prak04_pbo'] = $this->Prak04_pboModel->view();
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
      if($this->Prak04_pboModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Prak04_pboModel->save(); // Panggil fungsi save() yang ada di Prak04_pboModel.php
        redirect('prak04_pbo');
      }
    }
    
    $this->load->view('tambah');
  }
  
  // public function ubah($id_praktikum01){
  //   if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
  //     if($this->Prak04_pboModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
  //       $this->Prak04_pboModel->edit($id_praktikum01); // Panggil fungsi edit() yang ada di Prak04_pboModel.php
  //       redirect('Prak04_pbo');
  //     }
  //   }
    
  //   $data['praktikum01algoprog'] = $this->Prak04_pboModel->view_by($id_praktikum01);
  //   $this->load->view('form_ubah', $data);
  // }
  
  public function hapus($nim_praktikum){
    if($this->session->userdata('akses')=='1'){
    $this->Prak04_pboModel->delete($nim_praktikum); // Panggil fungsi delete() yang ada di Prak04_pboModel.php
    redirect('prak04_pbo');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}