<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class AlgostrukModels extends CI_Model
{
    // Fungsi untuk menampilkan semua data
    public function view()
    {
        return $this->db->get('lab_algostruk')->result();
    }

    // Fungsi untuk menampilkan data  berdasarkan id nya 
    public function view_by($id_algostruk)
    {
        $this->db->where('id_algostruk', $id_algostruk);
        return $this->db->get('lab_algostruk')->row();
    }

    // Fungsi untuk validasi form tambah dan ubah
    public function validation($mode)
    {
        $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

        // Tambahkan if apakah $mode save atau update
        // Karena ketika update, id_user tidak harus divalidasi
        // Jadi id_user di validasi hanya ketika menambah data  saja
        if ($mode == "save")
        $this->form_validation->set_rules('namabarang_algostruk', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jumlahbarang_algostruk', 'Jumlah Barang', 'required');
        $this->form_validation->set_rules('satuanbarang_algostruk', 'Satuan Barang', 'required');
        $this->form_validation->set_rules('tanggalupdate_algostruk', 'Tanggal Update', 'required');
        $this->form_validation->set_rules('kondisi_algostruk', 'Kondisi Barang', 'required');

        if ($this->form_validation->run()) // Jika validasi benar
            return TRUE; // Maka kembalikan hasilnya dengan TRUE
        else // Jika ada data yang tidak sesuai validasi
            return FALSE; // Maka kembalikan hasilnya dengan FALSE
    }

    // Fungsi untuk melakukan simpan data ke tabel
    public function save()
    {
        $data = array(
            "namabarang_algostruk" => $this->input->post('namabarang_algostruk'),
            "jumlahbarang_algostruk" => $this->input->post('jumlahbarang_algostruk'),
            "satuanbarang_algostruk" => $this->input->post('satuanbarang_algostruk'),
            "tanggalupdate_algostruk" => $this->input->post('tanggalupdate_algostruk'),
            "kondisi_algostruk" => $this->input->post('kondisi_algostruk'),

        );

        $this->db->insert('lab_algostruk', $data); // Untuk mengeksekusi perintah insert data
    }

    // Fungsi untuk melakukan ubah data berdasarkan id_user
    public function edit($id)
    {
        // $id = $this->input->post('id_algostruk');
        $data = array(
            "namabarang_algostruk" => $this->input->post('namabarang_algostruk'),
            "jumlahbarang_algostruk" => $this->input->post('jumlahbarang_algostruk'),
            "satuanbarang_algostruk" => $this->input->post('satuanbarang_algostruk'),
            "tanggalupdate_algostruk" => $this->input->post('tanggalupdate_algostruk'),
            "kondisi_algostruk" => $this->input->post('kondisi_algostruk'),

        );

        $this->db->where('id_algostruk', $id);
        $this->db->update('lab_algostruk', $data); // Untuk mengeksekusi perintah update data
    }

    // Fungsi untuk melakukan menghapus data berdasarkan id_user
    public function delete($id_algostruk)
    {
        $this->db->where('id_algostruk', $id_algostruk);
        $this->db->delete('lab_algostruk'); // Untuk mengeksekusi perintah delete data
    }
}
