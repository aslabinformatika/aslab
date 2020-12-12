<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class SisdigModels extends CI_Model
{
    // Fungsi untuk menampilkan semua data
    public function view()
    {
        return $this->db->get('lab_sisdig')->result();
    }

    // Fungsi untuk menampilkan data  berdasarkan id nya 
    public function view_by($id_sisdig)
    {
        $this->db->where('id_sisdig', $id_sisdig);
        return $this->db->get('lab_sisdig')->row();
    }

    // Fungsi untuk validasi form tambah dan ubah
    public function validation($mode)
    {
        $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

        // Tambahkan if apakah $mode save atau update
        // Karena ketika update, id_user tidak harus divalidasi
        // Jadi id_user di validasi hanya ketika menambah data  saja
        if ($mode == "save")
        $this->form_validation->set_rules('namabarang_sisdig', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jumlahbarang_sisdig', 'Jumlah Barang', 'required');
        $this->form_validation->set_rules('satuanbarang_sisdig', 'Satuan Barang', 'required');
        $this->form_validation->set_rules('tanggalupdate_sisdig', 'Tanggal Update', 'required');
        $this->form_validation->set_rules('kondisi_sisdig', 'Kondisi Barang', 'required');

        if ($this->form_validation->run()) // Jika validasi benar
            return TRUE; // Maka kembalikan hasilnya dengan TRUE
        else // Jika ada data yang tidak sesuai validasi
            return FALSE; // Maka kembalikan hasilnya dengan FALSE
    }

    // Fungsi untuk melakukan simpan data ke tabel
    public function save()
    {
        $data = array(
            "namabarang_sisdig" => $this->input->post('namabarang_sisdig'),
            "jumlahbarang_sisdig" => $this->input->post('jumlahbarang_sisdig'),
            "satuanbarang_sisdig" => $this->input->post('satuanbarang_sisdig'),
            "tanggalupdate_sisdig" => $this->input->post('tanggalupdate_sisdig'),
            "kondisi_sisdig" => $this->input->post('kondisi_sisdig'),

        );

        $this->db->insert('lab_sisdig', $data); // Untuk mengeksekusi perintah insert data
    }

    // Fungsi untuk melakukan ubah data berdasarkan id_user
    public function edit($id)
    {
        // $id = $this->input->post('id_sisdig');
        $data = array(
            "namabarang_sisdig" => $this->input->post('namabarang_sisdig'),
            "jumlahbarang_sisdig" => $this->input->post('jumlahbarang_sisdig'),
            "satuanbarang_sisdig" => $this->input->post('satuanbarang_sisdig'),
            "tanggalupdate_sisdig" => $this->input->post('tanggalupdate_sisdig'),
            "kondisi_sisdig" => $this->input->post('kondisi_sisdig'),

        );

        $this->db->where('id_sisdig', $id);
        $this->db->update('lab_sisdig', $data); // Untuk mengeksekusi perintah update data
    }

    // Fungsi untuk melakukan menghapus data berdasarkan id_user
    public function delete($id_sisdig)
    {
        $this->db->where('id_sisdig', $id_sisdig);
        $this->db->delete('lab_sisdig'); // Untuk mengeksekusi perintah delete data
    }
}
