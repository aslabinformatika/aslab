<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ItSupportModels extends CI_Model
{
  // Fungsi untuk menampilkan semua data
  public function view()
  {
    return $this->db->get('div_itsupport')->result();
  }

  // Fungsi untuk menampilkan data  berdasarkan id nya 
  public function view_by($id_itsupport)
  {
    $this->db->where('id_itsupport', $id_itsupport);
    return $this->db->get('div_itsupport')->row();
  }

  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode)
  {
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, id_user tidak harus divalidasi
    // Jadi id_user di validasi hanya ketika menambah data  saja
    if ($mode == "save")
      $this->form_validation->set_rules('id_itsupport', 'ID', 'required');

    $this->form_validation->set_rules('namabarang_itsupport', 'Nama Barang', 'required');
    $this->form_validation->set_rules('jumlahbarang_itsupport', 'Jumlah Barang', 'required');
    $this->form_validation->set_rules('satuanbarang_itsupport', 'Satuan Barang', 'required');
    $this->form_validation->set_rules('tanggalupdate_itsupport', 'Tanggal Update', 'required');
    $this->form_validation->set_rules('statusbarang_itsupport', 'Status Barang', 'required');

    if ($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }

  // Fungsi untuk melakukan simpan data ke tabel
  public function save()
  {
    $data = array(
      
      "namabarang_itsupport" => $this->input->post('namabarang_itsupport'),
      "jumlahbarang_itsupport" => $this->input->post('jumlahbarang_itsupport'),
      "satuanbarang_itsupport" => $this->input->post('satuanbarang_itsupport'),
      "tanggalupdate_itsupport" => $this->input->post('tanggalupdate_itsupport'),
      "statusbarang_itsupport" => $this->input->post('statusbarang_itsupport'),

    );

    $this->db->insert('div_itsupport', $data); // Untuk mengeksekusi perintah insert data
  }

  // Fungsi untuk melakukan ubah data berdasarkan id_user
  public function edit($namabarang_itsupport)
  {
    $data = array(
      
      "namabarang_itsupport" => $this->input->post('namabarang_itsupport'),
      "jumlahbarang_itsupport" => ($this->input->post('jumlahbarang_itsupport')),
      "satuanbarang_itsupport" => $this->input->post('satuanbarang_itsupport'),
      "tanggalupdate_itsupport" => $this->input->post('tanggalupdate_itsupport'),
      "statusbarang_itsupport" => $this->input->post('statusbarang_itsupport'),

    );

    $this->db->where('namabarang_itsupport', $namabarang_itsupport);
    $this->db->update('div_itsupport', $data); // Untuk mengeksekusi perintah update data
  }

  // Fungsi untuk melakukan menghapus data berdasarkan id_user
  public function delete($namabarang_itsupport)
  {
    $this->db->where('namabarang_itsupport', $namabarang_itsupport);
    $this->db->delete('div_itsupport'); // Untuk mengeksekusi perintah delete data
  }
}
