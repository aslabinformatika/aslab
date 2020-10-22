<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prak01_algoprog extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    $this->load->library('session');
    
    $this->load->model('Prak01_algoprogModel'); // Load Prak01_algoprogModel ke controller ini
  }
  
  public function index(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
    $data['prak01_algoprog'] = $this->Prak01_algoprogModel->view();
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
      if($this->Prak01_algoprogModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Prak01_algoprogModel->save(); // Panggil fungsi save() yang ada di Prak01_algoprogModel.php
        redirect('prak01_algoprog');
      }
    }
    
    $this->load->view('tambah');
  }
  
  // public function ubah($id_praktikum01){
  //   if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
  //     if($this->Prak01_algoprogModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
  //       $this->Prak01_algoprogModel->edit($id_praktikum01); // Panggil fungsi edit() yang ada di Prak01_algoprogModel.php
  //       redirect('prak01_algoprog');
  //     }
  //   }
    
  //   $data['praktikum01algoprog'] = $this->Prak01_algoprogModel->view_by($id_praktikum01);
  //   $this->load->view('form_ubah', $data);
  // }
  
  public function hapus($nim_praktikum){
    if($this->session->userdata('akses')=='1'){
    $this->Prak01_algoprogModel->delete($nim_praktikum); // Panggil fungsi delete() yang ada di Prak01_algoprogModel.php
    redirect('prak01_algoprog');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}