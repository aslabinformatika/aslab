<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prak06_web extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    $this->load->library('session');
    
    $this->load->model('Prak06_webModel'); // Load Prak06_webModel ke controller ini
  }
  
  public function index(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
    $data['prak06_web'] = $this->Prak06_webModel->view();
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
      if($this->Prak06_webModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Prak06_webModel->save(); // Panggil fungsi save() yang ada di Prak06_webModel.php
        redirect('prak06_web');
      }
    }
    
    $this->load->view('tambah');
  }
  
  // public function ubah($id_praktikum01){
  //   if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
  //     if($this->Prak06_webModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
  //       $this->Prak06_webModel->edit($id_praktikum01); // Panggil fungsi edit() yang ada di Prak06_webModel.php
  //       redirect('prak06_web');
  //     }
  //   }
    
  //   $data['praktikum01algoprog'] = $this->Prak06_webModel->view_by($id_praktikum01);
  //   $this->load->view('form_ubah', $data);
  // }
  
  public function hapus($nim_praktikum){
    if($this->session->userdata('akses')=='1'){
    $this->Prak06_webModel->delete($nim_praktikum); // Panggil fungsi delete() yang ada di Prak06_webModel.php
    redirect('prak06_web');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}