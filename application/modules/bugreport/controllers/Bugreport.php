<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bugreport extends CI_Controller {
 
  public function  __construct() {
        parent::__construct();
        //load our helper
        $this->load->helper('url');
        //load our model
        $this->load->model('BugreportModel');
    }
  
  public function index(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
    //load session library to use flashdata
    $this->load->library('session');
    //fetch all files i the database
    $data['bugreport'] = $this->BugreportModel->getAllFiles();
    $this->load->view('index', $data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
 
  public function insert(){
    //load session library to use flashdata
    $this->load->library('session');
 
    //Check if file is not empty
        if(!empty($_FILES['upload']['name'])){
            $config['upload_path'] = 'public/upload/bugreport/';
            //restrict uploads to this mime types
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['upload']['name'];
 
            //Load upload library and initialize configuration
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
 
            if($this->upload->do_upload('upload')){
                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];
 
        //set file data to insert to database
        $file['nama'] = $this->input->post('nama');
        $file['deksripsi_bug'] = $this->input->post('deksripsi_bug');
        $file['filename'] = $filename;
 
        $query = $this->BugreportModel->insertfile($file);
        if($query){
          header('location:'.base_url('rekaparsip/bugreport'));
          $this->session->set_flashdata('success','Laporan Bug Berhasil Terkirim');
        }
        else{
          header('location:'.base_url('rekaparsip/bugreport'));
          $this->session->set_flashdata('error','File uploaded but not inserted to database');
        }
 
            }else{
                header('location:'.base_url('rekaparsip/bugreport'));
                $this->session->set_flashdata('error','Tidak Bisa Upload File.'); 
            }
        }else{
            header('location:'.base_url('rekaparsip/bugreport'));
            $this->session->set_flashdata('error','File Laporan Bug Kosong');
        }
  }
 
  public function download($id_bug){
        $this->load->helper('download');
        $fileinfo = $this->BugreportModel->download($id_bug);
        $file = 'public/upload/bugreport/'.$fileinfo['filename'];
        force_download($file, NULL);
  }
}