<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prak07_jarkom extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    $this->load->library('session');
    
    $this->load->model('Prak07_jarkomModel'); // Load Prak07_jarkomModel ke controller ini
  }
  
  public function index(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
    $data['prak07_jarkom'] = $this->Prak07_jarkomModel->view();
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
      if($this->Prak07_jarkomModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Prak07_jarkomModel->save(); // Panggil fungsi save() yang ada di Prak07_jarkomModel.php
        redirect('prak07_jarkom');
      }
    }
    
    $this->load->view('tambah');
  }
  
  // public function ubah($id_praktikum01){
  //   if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
  //     if($this->Prak07_jarkomModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
  //       $this->Prak07_jarkomModel->edit($id_praktikum01); // Panggil fungsi edit() yang ada di Prak07_jarkomModel.php
  //       redirect('prak07_jarkom');
  //     }
  //   }
    
  //   $data['praktikum01algoprog'] = $this->Prak07_jarkomModel->view_by($id_praktikum01);
  //   $this->load->view('form_ubah', $data);
  // }
  
  public function hapus($nim_praktikum){
    if($this->session->userdata('akses')=='1'){
    $this->Prak07_jarkomModel->delete($nim_praktikum); // Panggil fungsi delete() yang ada di Prak07_jarkomModel.php
    redirect('prak07_jarkom');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}