<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LabAlgostruk extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');

    $this->load->model('AlgostrukModels'); // Load AlgostrukModels ke controller ini
  }

  public function algoritma_struktur_data()
  {
    if ($this->session->userdata('akses') == '1') {
      $data['lab_algostruk'] = $this->AlgostrukModels->view();
      $this->load->view('algostruk_v', $data);
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
      if ($this->AlgostrukModels->validation("save")) { // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->AlgostrukModels->save(); // Panggil fungsi save() yang ada di AlgostrukmModels.php
        redirect('labalgostruk/algoritma_struktur_data');
      }
    }

    $this->load->view('tambahdata_v');
  }

  public function ubah($id_algostruk)
  {
    if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
      if ($this->AlgostrukModels->validation("update")) { // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->AlgostrukModels->edit($id_algostruk); // Panggil fungsi edit() yang ada di User_asistenModel.php
        redirect('labAlgostruk/algoritma_struktur_data');
      }
    }

    $data['lab_algostruk'] = $this->AlgostrukModels->view_by($id_algostruk);
    $this->load->view('ubahdata_v', $data);
  }

  public function hapus($id_algostruk)
  {
    if ($this->session->userdata('akses') == '1') {
      $this->AlgostrukModels->delete($id_algostruk); // Panggil fungsi delete() yang ada di AlgostrukModels.php
      redirect('labAlgostruk/algoritma_struktur_data');
    } else {
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}
