<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LabRpl extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');

    $this->load->model('RplModels'); 
  }

  public function rekayasa_perangkat_lunak()
  {
    if ($this->session->userdata('akses') == '1') {
      $data['lab_rpl'] = $this->RplModels->view();
      $this->load->view('rpl_v', $data);
      // var_dump($this->session->userdata('akses'));
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  public function tambah()
  {
    if ($this->session->userdata('akses') == '1') {
      $this->load->view('tambahdata_v');
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  public function tambah_data()
  {
    if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
      if ($this->RplModels->validation("save")) { // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->RplModels->save(); // Panggil fungsi save() yang ada di JarkomModels.php
        redirect('labrpl/rekayasa_perangkat_lunak');
      }
    }

    $this->load->view('tambahdata_v');
  }

  public function ubah($id_rpl)
  {
    if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
      if ($this->RplModels->validation("update")) { // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->RplModels->edit($id_rpl); // Panggil fungsi edit() yang ada di User_asistenModel.php
        redirect('labrpl/rekayasa_perangkat_lunak');
      }
    }

    $data['lab_rpl'] = $this->RplModels->view_by($id_rpl);
    $this->load->view('ubahdata_v', $data);
  }

  public function hapus($id_rpl)
  {
    if ($this->session->userdata('akses') == '1') {
      $this->RplModels->delete($id_rpl); // Panggil fungsi delete() yang ada di JarkomModels.php
      redirect('labrpl/rekayasa_perangkat_lunak');
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}
