<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prak03_basisdata extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    $this->load->library('session');
    
    $this->load->model('Prak03_basisdataModel'); // Load Prak03_basisdataModel ke controller ini
  }
  
  public function index(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
    $data['prak03_basisdata'] = $this->Prak03_basisdataModel->view();
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
      if($this->Prak03_basisdataModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Prak03_basisdataModel->save(); // Panggil fungsi save() yang ada di Prak03_basisdataModel.php
        redirect('prak03_basisdata');
      }
    }
    
    $this->load->view('tambah');
  }
  
  // public function ubah($id_praktikum01){
  //   if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
  //     if($this->Prak03_basisdataModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
  //       $this->Prak03_basisdataModel->edit($id_praktikum01); // Panggil fungsi edit() yang ada di Prak03_basisdataModel.php
  //       redirect('prak03_basisdata');
  //     }
  //   }
    
  //   $data['praktikum01algoprog'] = $this->Prak03_basisdataModel->view_by($id_praktikum01);
  //   $this->load->view('form_ubah', $data);
  // }
  
  public function hapus($nim_praktikum){
    if($this->session->userdata('akses')=='1'){
    $this->Prak03_basisdataModel->delete($nim_praktikum); // Panggil fungsi delete() yang ada di Prak03_basisdataModel.php
    redirect('prak03_basisdata');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}