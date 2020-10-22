<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginModel extends CI_Model{
    //cek nip dan password dosen
    function asisten($username,$password){
        $query=$this->db->query("SELECT * FROM asistenpraktikum WHERE id_asisten='$username' AND password_asisten=MD5('$password') LIMIT 1");
        return $query;
    }
 
    //cek nim dan password mahasiswa
    function mahasiswa($username,$password){
        $query=$this->db->query("SELECT * FROM mahasiswa WHERE nim_mahasiswa='$username' AND password_mahasiswa=MD5('$password') LIMIT 1");
        return $query;
    }
}