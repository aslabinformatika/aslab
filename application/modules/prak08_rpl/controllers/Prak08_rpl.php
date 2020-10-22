<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prak08_rpl extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    $this->load->library('session');
    
    $this->load->model('Prak08_rplModel'); // Load Prak08_rplModel ke controller ini
  }
  
  public function index(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
    $data['prak08_rpl'] = $this->Prak08_rplModel->view();
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
      if($this->Prak08_rplModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->Prak08_rplModel->save(); // Panggil fungsi save() yang ada di Prak08_rplModel.php
        redirect('prak08_rpl');
      }
    }
    
    $this->load->view('tambah');
  }
  
  // public function ubah($id_praktikum01){
  //   if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
  //     if($this->Prak08_rplModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
  //       $this->Prak08_rplModel->edit($id_praktikum01); // Panggil fungsi edit() yang ada di Prak08_rplModel.php
  //       redirect('prak08_rpl');
  //     }
  //   }
    
  //   $data['praktikum01algoprog'] = $this->Prak08_rplModel->view_by($id_praktikum01);
  //   $this->load->view('form_ubah', $data);
  // }
  
  public function hapus($nim_praktikum){
    if($this->session->userdata('akses')=='1'){
    $this->Prak08_rplModel->delete($nim_praktikum); // Panggil fungsi delete() yang ada di Prak08_rplModel.php
    redirect('prak08_rpl');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}