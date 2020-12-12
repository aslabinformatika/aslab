<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PboModels extends CI_Model
{
    // Fungsi untuk menampilkan semua data
    public function view()
    {
        return $this->db->get('lab_pbo')->result();
    }

    // Fungsi untuk menampilkan data  berdasarkan id nya 
    public function view_by($id_pbo)
    {
        $this->db->where('id_pbo', $id_pbo);
        return $this->db->get('lab_pbo')->row();
    }

    // Fungsi untuk validasi form tambah dan ubah
    public function validation($mode)
    {
        $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

        // Tambahkan if apakah $mode save atau update
        // Karena ketika update, id_user tidak harus divalidasi
        // Jadi id_user di validasi hanya ketika menambah data  saja
        if ($mode == "save")
        $this->form_validation->set_rules('namabarang_pbo', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jumlahbarang_pbo', 'Jumlah Barang', 'required');
        $this->form_validation->set_rules('satuanbarang_pbo', 'Satuan Barang', 'required');
        $this->form_validation->set_rules('tanggalupdate_pbo', 'Tanggal Update', 'required');
        $this->form_validation->set_rules('kondisi_pbo', 'Kondisi Barang', 'required');

        if ($this->form_validation->run()) // Jika validasi benar
            return TRUE; // Maka kembalikan hasilnya dengan TRUE
        else // Jika ada data yang tidak sesuai validasi
            return FALSE; // Maka kembalikan hasilnya dengan FALSE
    }

    // Fungsi untuk melakukan simpan data ke tabel
    public function save()
    {
        $data = array(
            "namabarang_pbo" => $this->input->post('namabarang_pbo'),
            "jumlahbarang_pbo" => $this->input->post('jumlahbarang_pbo'),
            "satuanbarang_pbo" => $this->input->post('satuanbarang_pbo'),
            "tanggalupdate_pbo" => $this->input->post('tanggalupdate_pbo'),
            "kondisi_pbo" => $this->input->post('kondisi_pbo'),

        );

        $this->db->insert('lab_pbo', $data); // Untuk mengeksekusi perintah insert data
    }

    // Fungsi untuk melakukan ubah data berdasarkan id_user
    public function edit($id)
    {
        // $id = $this->input->post('id_pbo');
        $data = array(
            "namabarang_pbo" => $this->input->post('namabarang_pbo'),
            "jumlahbarang_pbo" => $this->input->post('jumlahbarang_pbo'),
            "satuanbarang_pbo" => $this->input->post('satuanbarang_pbo'),
            "tanggalupdate_pbo" => $this->input->post('tanggalupdate_pbo'),
            "kondisi_pbo" => $this->input->post('kondisi_pbo'),

        );

        $this->db->where('id_pbo', $id);
        $this->db->update('lab_pbo', $data); // Untuk mengeksekusi perintah update data
    }

    // Fungsi untuk melakukan menghapus data berdasarkan id_user
    public function delete($id_pbo)
    {
        $this->db->where('id_pbo', $id_pbo);
        $this->db->delete('lab_pbo'); // Untuk mengeksekusi perintah delete data
    }
}
