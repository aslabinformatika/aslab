<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LabPBO extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');

    $this->load->model('PboModels'); // Load AlgostrukModels ke controller ini
  }

  public function pemrograman_berorientasi_objek()
  {
    if ($this->session->userdata('akses') == '1') {
      $data['lab_pbo'] = $this->PboModels->view();
      $this->load->view('pbo_v', $data);
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
      if ($this->PboModels->validation("save")) { // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->PboModels->save(); // Panggil fungsi save() yang ada di AlgostrukmModels.php
        redirect('labpbo/pemrograman_berorientasi_objek');
      }
    }

    $this->load->view('tambahdata_v');
  }

  public function ubah($id_pbo)
  {
    if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
      if ($this->PboModels->validation("update")) { // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->PboModels->edit($id_pbo); // Panggil fungsi edit() yang ada di User_asistenModel.php
        redirect('labpbo/pemrograman_berorientasi_objek');
      }
    }

    $data['lab_pbo'] = $this->PboModels->view_by($id_pbo);
    $this->load->view('ubahdata_v', $data);
  }

  public function hapus($id_pbo)
  {
    if ($this->session->userdata('akses') == '1') {
      $this->PboModels->delete($id_pbo); // Panggil fungsi delete() yang ada di AlgostrukModels.php
      redirect('labpbo/pemrograman_berorientasi_objek');
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}
