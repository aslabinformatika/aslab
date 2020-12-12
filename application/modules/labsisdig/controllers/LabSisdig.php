<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LabSisdig extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');

    $this->load->model('SisdigModels'); // Load SisdigModels ke controller ini
  }

  public function sistem_digital()
  {
    if ($this->session->userdata('akses') == '1') {
      $data['lab_sisdig'] = $this->SisdigModels->view();
      $this->load->view('sisdig_v', $data);
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
      if ($this->SisdigModels->validation("save")) { // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->SisdigModels->save(); // Panggil fungsi save() yang ada di SisdigmModels.php
        redirect('labsisdig/sistem_digital');
      }
    }

    $this->load->view('tambahdata_v');
  }

  public function ubah($id_sisdig)
  {
    if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
      if ($this->SisdigModels->validation("update")) { // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->SisdigModels->edit($id_sisdig); // Panggil fungsi edit() yang ada di User_asistenModel.php
        redirect('labsisdig/sistem_digital');
      }
    }

    $data['lab_sisdig'] = $this->SisdigModels->view_by($id_sisdig);
    $this->load->view('ubahdata_v', $data);
  }

  public function hapus($id_sisdig)
  {
    if ($this->session->userdata('akses') == '1') {
      $this->SisdigModels->delete($id_sisdig); // Panggil fungsi delete() yang ada di SisdigModels.php
      redirect('labsisdig/sistem_digital');
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}
