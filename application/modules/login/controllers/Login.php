<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	
    function __construct(){
        parent::__construct();
        $this->load->model('LoginModel');
    }
 
    function index(){
    if($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
      redirect('dashboard'); // Redirect ke page welcome
        $this->load->view('v_login');
    }
 
    function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_asisten=$this->LoginModel->asisten($username,$password);
 
        if($cek_asisten->num_rows() > 0){ //jika login sebagai dosen
                        $data=$cek_asisten->row_array();
                $this->session->set_userdata('masuk',TRUE);
                 if($data['level']=='1'){ //Akses admin
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('ses_id',$data['id_asisten']);
                    $this->session->set_userdata('ses_nim',$data['nim_asisten']);
                    $this->session->set_userdata('ses_nama',$data['nama_asisten']);
                    $this->session->set_userdata('ses_notelp',$data['notelp_asisten']);
                    $this->session->set_userdata('ses_angkatan',$data['angkatan_asisten']);
                    redirect('dashboard');
 
                 }else{ //akses dosen
                    $this->session->set_userdata('akses','2');
                                $this->session->set_userdata('ses_id',$data['id_asisten']);
                    $this->session->set_userdata('ses_nama',$data['nama_asisten']);
                    redirect('dashboard');
                 }
 
        }
        else{ //jika login sebagai mahasiswa
                    $cek_mahasiswa=$this->LoginModel->mahasiswa($username,$password);
                    if($cek_mahasiswa->num_rows() > 0){
                            $data=$cek_mahasiswa->row_array();
                    $this->session->set_userdata('masuk',TRUE);
                            $this->session->set_userdata('akses','3');
                            $this->session->set_userdata('ses_id',$data['nim_mahasiswa']);
                            $this->session->set_userdata('ses_nama',$data['nama_mahasiswa']);
                            redirect('dashboard');
                    }
                    else{  // jika username dan password tidak ditemukan atau salah
                            $url=base_url('login');
                            echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                            redirect($url);
                    }
        }
 
    }
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('login');
        redirect($url);
    }
}