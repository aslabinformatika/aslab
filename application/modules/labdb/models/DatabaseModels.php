<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class DatabaseModels extends CI_Model
{
    // Fungsi untuk menampilkan semua data
    public function view()
    {
        return $this->db->get('lab_db')->result();
    }

    // Fungsi untuk menampilkan data  berdasarkan id nya 
    public function view_by($id_db)
    {
        $this->db->where('id_db', $id_db);
        return $this->db->get('lab_db')->row();
    }

    // Fungsi untuk validasi form tambah dan ubah
    public function validation($mode)
    {
        $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

        // Tambahkan if apakah $mode save atau update
        // Karena ketika update, id_user tidak harus divalidasi
        // Jadi id_user di validasi hanya ketika menambah data  saja
        if ($mode == "save")
        $this->form_validation->set_rules('namabarang_db', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jumlahbarang_db', 'Jumlah Barang', 'required');
        $this->form_validation->set_rules('satuanbarang_db', 'Satuan Barang', 'required');
        $this->form_validation->set_rules('tanggalupdate_db', 'Tanggal Update', 'required');
        $this->form_validation->set_rules('kondisi_db', 'Kondisi Barang', 'required');

        if ($this->form_validation->run()) // Jika validasi benar
            return TRUE; // Maka kembalikan hasilnya dengan TRUE
        else // Jika ada data yang tidak sesuai validasi
            return FALSE; // Maka kembalikan hasilnya dengan FALSE
    }

    // Fungsi untuk melakukan simpan data ke tabel
    public function save()
    {
        $data = array(
            "namabarang_db" => $this->input->post('namabarang_db'),
            "jumlahbarang_db" => $this->input->post('jumlahbarang_db'),
            "satuanbarang_db" => $this->input->post('satuanbarang_db'),
            "tanggalupdate_db" => $this->input->post('tanggalupdate_db'),
            "kondisi_db" => $this->input->post('kondisi_db'),

        );

        $this->db->insert('lab_db', $data); // Untuk mengeksekusi perintah insert data
    }

    // Fungsi untuk melakukan ubah data berdasarkan id_user
    public function edit($id)
    {
        // $id = $this->input->post('id_db');
        $data = array(
            "namabarang_db" => $this->input->post('namabarang_db'),
            "jumlahbarang_db" => $this->input->post('jumlahbarang_db'),
            "satuanbarang_db" => $this->input->post('satuanbarang_db'),
            "tanggalupdate_db" => $this->input->post('tanggalupdate_db'),
            "kondisi_db" => $this->input->post('kondisi_db'),

        );

        $this->db->where('id_db', $id);
        $this->db->update('lab_db', $data); // Untuk mengeksekusi perintah update data
    }

    // Fungsi untuk melakukan menghapus data berdasarkan id_user
    public function delete($id_db)
    {
        $this->db->where('id_db', $id_db);
        $this->db->delete('lab_db'); // Untuk mengeksekusi perintah delete data
    }
}
