<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prak09_sisdig extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    $this->load->library('session');
    
    $this->load->model('Prak09_sisdigModel'); // Load Prak09_sisdigModel ke controller ini
  }
  
  public function index(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
    $data['prak09_sisdig'] = $this->Prak09_sisdigModel->view();
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
      if($this->Prak09_sisdigModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Prak09_sisdigModel->save(); // Panggil fungsi save() yang ada di Prak09_sisdigModel.php
        redirect('prak09_sisdig');
      }
    }
    
    $this->load->view('tambah');
  }
  
  // public function ubah($id_praktikum01){
  //   if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
  //     if($this->Prak09_sisdigModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
  //       $this->Prak09_sisdigModel->edit($id_praktikum01); // Panggil fungsi edit() yang ada di Prak09_sisdigModel.php
  //       redirect('prak09_sisdig');
  //     }
  //   }
    
  //   $data['praktikum01algoprog'] = $this->Prak09_sisdigModel->view_by($id_praktikum01);
  //   $this->load->view('form_ubah', $data);
  // }
  
  public function hapus($nim_praktikum){
    if($this->session->userdata('akses')=='1'){
    $this->Prak09_sisdigModel->delete($nim_praktikum); // Panggil fungsi delete() yang ada di Prak09_sisdigModel.php
    redirect('prak09_sisdig');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}