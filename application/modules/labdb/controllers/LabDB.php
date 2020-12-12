<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LabDB extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');

    $this->load->model('DatabaseModels'); // Load AlgostrukModels ke controller ini
  }

  public function database_web()
  {
    if ($this->session->userdata('akses') == '1') {
      $data['lab_db'] = $this->DatabaseModels->view();
      $this->load->view('databaseweb_v', $data);
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
      if ($this->DatabaseModels->validation("save")) { // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->DatabaseModels->save(); // Panggil fungsi save() yang ada di AlgostrukmModels.php
        redirect('labdb/database_web');
      }
    }

    $this->load->view('tambahdata_v');
  }

  public function ubah($id_db)
  {
    if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
      if ($this->DatabaseModels->validation("update")) { // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->DatabaseModels->edit($id_db); // Panggil fungsi edit() yang ada di User_asistenModel.php
        redirect('labdb/database_web');
      }
    }

    $data['lab_db'] = $this->DatabaseModels->view_by($id_db);
    $this->load->view('ubahdata_v', $data);
  }

  public function hapus($id_db)
  {
    if ($this->session->userdata('akses') == '1') {
      $this->DatabaseModels->delete($id_db); // Panggil fungsi delete() yang ada di AlgostrukModels.php
      redirect('labdb/database_web');
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}
