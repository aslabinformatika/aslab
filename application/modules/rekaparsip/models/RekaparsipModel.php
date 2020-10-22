<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RekaparsipModel extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function getAllFiles(){
			$query = $this->db->get('files');
			return $query->result(); 
		}
 
		public function insertfile($file){
			return $this->db->insert('files', $file);
		}
 
		public function download($id_sop){
			$query = $this->db->get_where('files',array('id_sop'=>$id_sop));
			return $query->row_array();
		}

		// IKI MODEL RAPAT MULAI

		public function getAllFiles_rapat(){
			$query = $this->db->get('rapat');
			return $query->result(); 
		}
 
		public function insertfile_rapat($file_rapat){
			return $this->db->insert('rapat', $file_rapat);
		}
 
		public function download_rapat($id_rapat){
			$query = $this->db->get_where('rapat',array('id_rapat'=>$id_rapat));
			return $query->row_array();
		}

  		public function detail_rapat($id_rapat){
    		return $this->db->get_where('rapat', array('id_rapat'=>$id_rapat))->row_array();
  		}

		// Fungsi untuk melakukan menghapus data berdasarkan id_user
  		public function delete_rapat($id_rapat){
    		$this->db->where('id_rapat', $id_rapat);
    		$this->db->delete('rapat'); // Untuk mengeksekusi perintah delete data
  		}

  		// IKI MODEL RAPAT BUYAR

		// IKI MODEL LPJ KEGIATAN MULAI

		public function getAllFiles_lpj(){
			$query = $this->db->get('lpj_kegiatan');
			return $query->result(); 
		}

		public function get_option(){
				$this->db->order_by('angkatan_asisten','ASC');
        		$query = $this->db->get('asistenpraktikum');
 				return $query->result();
			} 
 
		public function insertfile_lpj($file_lpjkegiatan){
			return $this->db->insert('lpj_kegiatan', $file_lpjkegiatan);
		}
 
		public function download_lpj($id_lpj){
			$query = $this->db->get_where('lpj_kegiatan',array('id_lpj'=>$id_lpj));
			return $query->row_array();
		}

  		public function detail_lpj($id_lpj){
    		return $this->db->get_where('lpj_kegiatan', array('id_lpj'=>$id_lpj))->row_array();
  		}

		// Fungsi untuk melakukan menghapus data berdasarkan id_user
  		public function delete_lpj($id_lpj){
    		$this->db->where('id_lpj', $id_lpj);
    		$this->db->delete('lpj_kegiatan'); // Untuk mengeksekusi perintah delete data
  		}

  		// IKI MODEL LPJ KEGIATAN BUYAR
	}