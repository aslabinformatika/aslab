<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PraktikumModel extends CI_Model {
  // Fungsi untuk menampilkan semua data
  public function view(){
  $query = $this->db->order_by('nim_praktikum','DESC')
                    ->get('prak02_algostruk');
  return $query->result();
  }
  
  // Fungsi untuk menampilkan data  berdasarkan id_user nya
  public function view_by($nim_praktikum){
    $this->db->where('nim_praktikum', $nim_praktikum);
    return $this->db->get('prak02_algostruk')->row();
  }
  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, id_user tidak harus divalidasi
    // Jadi id_user di validasi hanya ketika menambah data  saja
    if($mode == "save")
      $this->form_validation->set_rules('nim_praktikum', 'NIM Praktikan', 'required');
    
    $this->form_validation->set_rules('nama_praktikan', 'Nama Praktikan', 'required');
    $this->form_validation->set_rules('kelompok_praktikum', 'Kelompok Praktikum', 'required');
    $this->form_validation->set_rules('link_rangkuman', 'Link Rangkuman');
    $this->form_validation->set_rules('tanggal_pengumpulan', 'Tanggal Pengumpulan');
    $this->form_validation->set_rules('nama_asisten', 'Nama Asisten', 'required');
    $this->form_validation->set_rules('penerima_laporan', 'Penerima Laporan', 'required');
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel
  public function save(){
    $data = array(
      "nim_praktikum" => $this->input->post('nim_praktikum'),
      "nama_praktikan" => $this->input->post('nama_praktikan'),
      "kelompok_praktikum" => $this->input->post('kelompok_praktikum'),
      "link_rangkuman" => $this->input->post('link_rangkuman'),
      "tanggal_pengumpulan" => $this->input->post('tanggal_pengumpulan'),
      "nama_asisten" => $this->input->post('nama_asisten'),
      "penerima_laporan" => $this->input->post('penerima_laporan'),
    );
    
    $this->db->insert('prak06_web', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data berdasarkan id_user
  public function edit($nim_praktikum){
    $data = array(
      "nim_praktikum" => $this->input->post('nim_praktikum'),
      "nama_praktikan" => $this->input->post('nama_praktikan'),
      "kelompok_praktikum" => $this->input->post('kelompok_praktikum'),
      "link_rangkuman" => $this->input->post('link_rangkuman'),
      "tanggal_pengumpulan" => $this->input->post('tanggal_pengumpulan'),
      "nama_asisten" => $this->input->post('nama_asisten'),
      "penerima_laporan" => $this->input->post('penerima_laporan'),
    );
    
    $this->db->where('nim_praktikum', $nim_praktikum);
    $this->db->update('prak06_web', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data berdasarkan id_user
  public function delete($nim_praktikum){
    $this->db->where('nim_praktikum', $nim_praktikum);
    $this->db->delete('prak06_web'); // Untuk mengeksekusi perintah delete data
  }

  function Datatables($dt)
    {
        $columns = implode(', ', $dt['col-display']) . ', ' . $dt['id-table'];
        $join = $dt['join'];
        $sql  = "SELECT {$columns} FROM {$dt['table']} {$join}";
        $data = $this->db->query($sql);
        $rowCount = $data->num_rows();
        $data->free_result();
        // pengkondisian aksi seperti next, search dan limit
        $columnd = $dt['col-display'];
        $count_c = count($columnd);
        // search
        $search = $dt['search']['value'];
        /**
         * Search Global
         * pencarian global pada pojok kanan atas
         */
        $where = '';
        if ($search != '') {   
            for ($i=0; $i < $count_c ; $i++) {
                $where .= $columnd[$i] .' LIKE "%'. $search .'%"';
                
                if ($i < $count_c - 1) {
                    $where .= ' OR ';
                }
            }
        }
        
        /**
         * Search Individual Kolom
         * pencarian dibawah kolom
         */
        for ($i=0; $i < $count_c; $i++) { 
            $searchCol = $dt['columns'][$i]['search']['value'];
            if ($searchCol != '') {
                $where = $columnd[$i] . ' LIKE "%' . $searchCol . '%" ';
                break;
            }
        }
        /**
         * pengecekan Form pencarian
         * pencarian aktif jika ada karakter masuk pada kolom pencarian.
         */
        if ($where != '') {
            $sql .= " WHERE " . $where;
            
        }
        
        // sorting
        $sql .= " ORDER BY {$columnd[$dt['order'][0]['column']]} {$dt['order'][0]['dir']}";
        
        // limit
        $start  = $dt['start'];
        $length = $dt['length'];
        $sql .= " LIMIT {$start}, {$length}";
        
        $list = $this->db->query($sql);
        /**
         * convert to json
         */
        $option['draw']            = $dt['draw'];
        $option['recordsTotal']    = $rowCount;
        $option['recordsFiltered'] = $rowCount;
        $option['data']            = array();
        foreach ($list->result() as $row) {
        /**
         * custom gunakan
         * $option['data'][] = array(
         *                       $row->columnd[0],
         *                       $row->columnd[1],
         *                       $row->columnd[2],
         *                       $row->columnd[3],
         *                       $row->columnd[4],
         *                       .....
         *                     );
         */
           $rows = array();
           for ($i=0; $i < $count_c; $i++) { 
               $rows[] = $row->$columnd[$i];
           }
           $option['data'][] = $rows;
        }
        // eksekusi json
        echo json_encode($option);
    }

  // var $table = "prak06_web";  
  //     var $select_column = array("nim_praktikum", "nama_praktikan", "kelompok_praktikum", "link_rangkuman", "tanggal_pengumpulan", "nama_asisten", "penerima_laporan");  
  //     var $order_column = array("nim_praktikum", "nama_praktikan", "kelompok_praktikum", null, "tanggal_pengumpulan", "nama_asisten", "penerima_laporan");  
  //     function make_query()  
  //     {  
  //          $this->db->select($this->select_column);  
  //          $this->db->from($this->table);  
  //          if(isset($_POST["search"]["value"]))  
  //          {  
  //               $this->db->like("nim_praktikum", $_POST["search"]["value"]);  
  //               $this->db->or_like("nama_praktikan", $_POST["search"]["value"]);  
  //          }  
  //          if(isset($_POST["order"]))  
  //          {  
  //               $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
  //          }  
  //          else  
  //          {  
  //               $this->db->order_by('nim_praktikum', 'DESC');  
  //          }  
  //     }

  //     function make_datatables(){  
  //          $this->make_query();  
  //          if($_POST["length"] != -1)  
  //          {  
  //               $this->db->limit($_POST['length'], $_POST['start']);  
  //          }  
  //          $query = $this->db->get();  
  //          return $query->result();  
  //     }  
  //     function get_filtered_data(){  
  //          $this->make_query();  
  //          $query = $this->db->get();  
  //          return $query->num_rows();  
  //     }

  //     function get_all_data()  
  //     {  
  //          $this->db->select("*");  
  //          $this->db->from($this->table);  
  //          return $this->db->count_all_results();  
  //     }  
}