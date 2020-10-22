<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prak02_algostruk extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    $this->load->library('session');
    
    $this->load->model('Prak02_algostrukModel'); // Load Prak02_algostrukModel ke controller ini
  }
  
  public function index(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
    $data['prak02_algostruk'] = $this->Prak02_algostrukModel->view();
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
      if($this->Prak02_algostrukModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Prak02_algostrukModel->save(); // Panggil fungsi save() yang ada di Prak02_algostrukModel.php
        redirect('prak02_algostruk');
      }
    }
    
    $this->load->view('tambah');
  }
  
  // public function ubah($id_praktikum01){
  //   if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
  //     if($this->Prak02_algostrukModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
  //       $this->Prak02_algostrukModel->edit($id_praktikum01); // Panggil fungsi edit() yang ada di Prak02_algostrukModel.php
  //       redirect('prak02_algostruk');
  //     }
  //   }
    
  //   $data['praktikum01algoprog'] = $this->Prak02_algostrukModel->view_by($id_praktikum01);
  //   $this->load->view('form_ubah', $data);
  // }
  
  public function hapus($nim_praktikum){
    if($this->session->userdata('akses')=='1'){
    $this->Prak02_algostrukModel->delete($nim_praktikum); // Panggil fungsi delete() yang ada di Prak02_algostrukModel.php
    redirect('prak02_algostruk');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}