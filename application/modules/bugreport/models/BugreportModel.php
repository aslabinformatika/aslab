<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BugreportModel extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function getAllFiles(){
			$query = $this->db->get('bugreport');
			return $query->result(); 
		}
 
		public function insertfile($file){
			return $this->db->insert('bugreport', $file);
		}
 
		public function download($id_bug){
			$query = $this->db->get_where('bugreport',array('id_bug'=>$id_bug));
			return $query->row_array();
		}
	}