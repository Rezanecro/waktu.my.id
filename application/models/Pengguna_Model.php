<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pengguna_Model extends CI_Model
{

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function simpan_pengguna($nama, $email, $password) {

        $created_at = date('Y-m-d H:i:s');
        $updated_at = '0000-00-00 00:00:00';

        $sql = "INSERT INTO pengguna_tb(nama, email, password, created_at, updated_at) "
        . "VALUES("
        . "" . $this->db->escape($nama) . ", "
        . "" . $this->db->escape($email) . ", "
        . "" . $this->db->escape($password) . ", "
        . "" . $this->db->escape($created_at) . ", "
        . "" . $this->db->escape($updated_at) . ")";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

    public function check_masuk_pengguna($email, $password) {
        $sql = "SELECT * FROM pengguna_tb WHERE email = ".$this->db->escape($email)." AND password = ".$this->db->escape($password)." LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function check_email_pengguna($email) {
        $sql = "SELECT * FROM pengguna_tb WHERE email = ".$this->db->escape($email)." LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result();
    }
}