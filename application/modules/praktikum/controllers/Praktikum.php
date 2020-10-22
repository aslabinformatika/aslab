<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Praktikum extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    $this->load->library('session');

    // $this->load->library('datatables');
    $this->load->model('PraktikumModel'); // Load PraktikumModel ke controller ini
  }
  
  public function index(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
    $data['prak02_algostruk'] = $this->PraktikumModel->view();
    $this->load->view('index_asli', $data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}