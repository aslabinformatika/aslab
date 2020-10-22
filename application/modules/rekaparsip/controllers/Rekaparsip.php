<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rekaparsip extends CI_Controller {
 
  public function  __construct() {
        parent::__construct();
        $this->load->library('session');
        //load our helper
        $this->load->helper('url');
        //load our model
        $this->load->model('RekaparsipModel');
    }
  
  public function sop_lab(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
    //load session library to use flashdata
    $this->load->library('session');
    //fetch all files i the database
    $data['files'] = $this->RekaparsipModel->getAllFiles();
    $this->load->view('sop_lab_v', $data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
 
  public function insert(){
    //load session library to use flashdata
    $this->load->library('session');
 
    //Check if file is not empty
        if(!empty($_FILES['upload']['name'])){
            $config['upload_path'] = 'public/upload/';
            //restrict uploads to this mime types
            $config['allowed_types'] = 'docx|doc';
            $config['file_name'] = $_FILES['upload']['name'];
 
            //Load upload library and initialize configuration
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
 
            if($this->upload->do_upload('upload')){
                $uploadData = $this->upload->data();
                $filename = $uploadData['file_name'];
 
        //set file data to insert to database
        $file['description'] = $this->input->post('description');
        $file['filename'] = $filename;
 
        $query = $this->RekaparsipModel->insertfile($file);
        if($query){
          header('location:'.base_url('rekaparsip/sop_lab'));
          $this->session->set_flashdata('success','File uploaded successfully');
        }
        else{
          header('location:'.base_url('rekaparsip/sop_lab'));
          $this->session->set_flashdata('error','File uploaded but not inserted to database');
        }
 
            }else{
                header('location:'.base_url('rekaparsip/sop_lab'));
                $this->session->set_flashdata('error','Cannot upload file.'); 
            }
        }else{
            header('location:'.base_url('rekaparsip/sop_lab'));
            $this->session->set_flashdata('error','Cannot upload empty file.');
        }
  }
 
  public function download($id_sop){
        $this->load->helper('download');
        $fileinfo = $this->RekaparsipModel->download($id_sop);
        $file = 'public/upload/'.$fileinfo['filename'];
        force_download($file, NULL);
  }

  // IKI RAPAT MULAI
  
  public function rapat(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
    //load session library to use flashdata
    $this->load->library('session');
    //fetch all files i the database
    $data['rapat'] = $this->RekaparsipModel->getAllFiles_rapat();
    $this->load->view('rapat_v', $data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
  
  public function tambah_rapat(){
    if($this->session->userdata('akses')=='1'){
    //load session library to use flashdata
    $this->load->library('session');
    $this->load->view('tambahrapat_v');
    }else{
      echo "Anda tidak berhak mengakses halaman ini<br>";
      echo "<a href='../dashboard'>Kembali</a>";

    }
  }
 
  public function insert_rapat(){
    //load session library to use flashdata
    $this->load->library('session');
 
    //Check if file is not empty
        if(!empty($_FILES['upload']['name'])){
            $config['upload_path'] = 'public/upload/rapat/';
            //restrict uploads to this mime types
            $config['allowed_types'] = 'pdf|docx|doc';
            $config['file_name'] = $_FILES['upload']['name'];
 
            //Load upload library and initialize configuration
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
 
            if($this->upload->do_upload('upload')){
                $uploadData = $this->upload->data();
                $filename_rapat = $uploadData['file_name'];
 
        //set file data to insert to database
        $file_rapat['jenis_rapat'] = $this->input->post('jenis_rapat');
        $file_rapat['tanggal_rapat'] = $this->input->post('tanggal_rapat');
        $file_rapat['filename_rapat'] = $filename_rapat;
 
        $query = $this->RekaparsipModel->insertfile_rapat($file_rapat);
        if($query){
          header('location:'.base_url('rekaparsip/rapat'));
          $this->session->set_flashdata('success','File uploaded successfully');
        }
        else{
          header('location:'.base_url('rekaparsip/rapat'));
          $this->session->set_flashdata('error','File uploaded but not inserted to database');
        }
 
            }else{
                header('location:'.base_url('rekaparsip/rapat'));
                $this->session->set_flashdata('error','Cannot upload file.'); 
            }
        }else{
            header('location:'.base_url('rekaparsip/rapat'));
            $this->session->set_flashdata('error','Cannot upload empty file.');
        }
 
  }
 
  public function download_rapat($id_rapat){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
        $this->load->helper('download');
          $fileinfo = $this->RekaparsipModel->download_rapat($id_rapat);
          $file_rapat = 'public/upload/rapat/'.$fileinfo['filename_rapat'];
          force_download($file_rapat, NULL);
          redirect('rekaparsip/rapat');
          }else{
        echo "Anda tidak berhak mengakses halaman ini";
      }
  }
 
  public function format_rapat(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
        $this->load->helper('download');
        force_download('public/upload/rapat/format/rapatminggu_160220.doc', NULL);
        redirect('rekaparsip/rapat');
        }else{
        echo "Anda tidak berhak mengakses halaman ini";
      }
  }

  public function hapus_rapat($id_rapat){
    if($this->session->userdata('akses')=='1'){
      if ( ! is_null($id_rapat))
      {
        $Rekaparsip = $this->RekaparsipModel->detail_rapat($id_rapat);

        if(isset($Rekaparsip['id_rapat']))
        {
          $this->_deleterapat($Rekaparsip['filename_rapat']);
          $this->RekaparsipModel->delete_rapat($id_rapat);
          redirect('rekaparsip/rapat');
        }else{
        echo "Anda tidak berhak mengakses halaman ini";
      } 
    }
  }
}

  public function _deleterapat($name){
    $pathrapat = 'public/upload/rapat/';
    return unlink($pathrapat.$name);
  }

##################################################################################################################
  // IKI LPJ MULAI
##################################################################################################################

  public function lpj_kegiatan(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      //load session library to use flashdata
      $this->load->library('session');
      //fetch all files i the database
      $data['lpj_kegiatan'] = $this->RekaparsipModel->getAllFiles_lpj();
      $this->load->view('lpjkegiatan_v', $data);
      }else{
        echo "Anda tidak berhak mengakses halaman ini";
      }
  }
  
  public function tambah_lpj(){
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
          $data['asistenpraktikum'] = $this->RekaparsipModel->get_option();
            //load session library to use flashdata
            $this->load->library('session');
            $this->load->view('tambahlpj_v', $data);
            }else{
              echo "Anda tidak berhak mengakses halaman ini";
            }
    }
 
  public function insert_lpj(){
    //load session library to use flashdata
    $this->load->library('session');
 
    //Check if file is not empty
        if(!empty($_FILES['upload']['name'])){
            $config['upload_path'] = 'public/upload/lpj_kegiatan/';
            //restrict uploads to this mime types
            $config['allowed_types'] = 'pdf|docx|doc';
            $config['file_name'] = $_FILES['upload']['name'];
 
            //Load upload library and initialize configuration
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
 
            if($this->upload->do_upload('upload')){
                $uploadData = $this->upload->data();
                $filename_lpj = $uploadData['file_name'];
 
        //set file data to insert to database
        $file_lpjkegiatan['namakegiatan_lpj'] = $this->input->post('namakegiatan_lpj');
        $file_lpjkegiatan['jenis_lpj'] = $this->input->post('jenis_lpj');
        $file_lpjkegiatan['penanggungjawab_lpj'] = $this->input->post('penanggungjawab_lpj');
        $file_lpjkegiatan['tanggalmulai_kegiatan'] = $this->input->post('tanggalmulai_kegiatan');
        $file_lpjkegiatan['tanggalselesai_kegiatan'] = $this->input->post('tanggalselesai_kegiatan');
        $file_lpjkegiatan['filename_lpj'] = $filename_lpj;
 
        $query = $this->RekaparsipModel->insertfile_lpj($file_lpjkegiatan);
        if($query){
          header('location:'.base_url('rekaparsip/lpj_kegiatan'));
          $this->session->set_flashdata('success','File LPJ Sukses Terupload');
        }
        else{
          header('location:'.base_url('rekaparsip/lpj_kegiatan'));
          $this->session->set_flashdata('error','File Terupload tetapi tidak masuk di Database');
        }
 
            }else{
                header('location:'.base_url('rekaparsip/lpj_kegiatan'));
                $this->session->set_flashdata('error','Tidak Bisa Mengupload File'); 
            }
        }else{
            header('location:'.base_url('rekaparsip/lpj_kegiatan'));
            $this->session->set_flashdata('error','File yang di upload Kosong');
        }
 
  }
 
  public function download_lpj($id_lpj){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
        $this->load->helper('download');
          $fileinfo = $this->RekaparsipModel->download_lpj($id_lpj);
          $file_lpjkegiatan = 'public/upload/lpj_kegiatan/'.$fileinfo['filename_lpj'];
          force_download($file_lpjkegiatan, NULL);
          redirect('rekaparsip/lpj_kegiatan');
          }else{
        echo "Anda tidak berhak mengakses halaman ini";
      }
  }
 
  public function format_lpj(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
        $this->load->helper('download');
        force_download('public/upload/lpj_kegiatan/format/rapatminggu_160220.doc', NULL);
        redirect('rekaparsip/lpj_kegiatan');
        }else{
        echo "Anda tidak berhak mengakses halaman ini";
      }
  }

  public function hapus_lpj($id_lpj){
    if ( ! is_null($id_lpj))
    {
      $Rekaparsip = $this->RekaparsipModel->detail_lpj($id_lpj);

      if(isset($Rekaparsip['id_lpj']))
      {
        $this->_deletelpj($Rekaparsip['filename_lpj']);
        $this->RekaparsipModel->delete_lpj($id_lpj);
        redirect('rekaparsip/lpj_kegiatan');
      } 
    }
  }


  public function _deletelpj($name){
    $pathlpj = 'public/upload/lpj_kegiatan/';
    return unlink($pathlpj.$name);
  }

  // IKI LPJ BUYAR
}