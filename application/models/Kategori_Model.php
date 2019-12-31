<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kategori_Model extends CI_Model
{

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // KATEGORI
    public function simpan_kategori($nama_kategori, $slug_kategori) {

        $created_at = date('Y-m-d H:i:s');
        $updated_at = '0000-00-00 00:00:00';

        $sql = "INSERT INTO kategori_tb(nama_kategori, slug_kategori, created_at, updated_at) "
        . "VALUES("
        . "" . $this->db->escape($nama_kategori) . ", "
        . "" . $this->db->escape($slug_kategori) . ", "
        . "" . $this->db->escape($created_at) . ", "
        . "" . $this->db->escape($updated_at) . ")";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

    public function semua_kategori() {
        $sql = "SELECT * FROM kategori_tb WHERE stat = 'aktif' ORDER BY nama_kategori ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function kategori_by_id($id) {
        $sql = "SELECT * FROM kategori_tb WHERE id = ".$this->db->escape($id)." LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function kategori_by_slug($slug_kategori) {
        $sql = "SELECT * FROM kategori_tb WHERE slug_kategori = ".$this->db->escape($slug_kategori)." LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result();
    }


    // SUB KATEGORI
    public function simpan_sub_kategori($id_kategori, $nama_sub_kategori, $slug_sub_kategori) {

        $created_at = date('Y-m-d H:i:s');
        $updated_at = '0000-00-00 00:00:00';

        $sql = "INSERT INTO sub_kategori_tb(id_kategori, nama_sub_kategori, slug_sub_kategori, created_at, updated_at) "
        . "VALUES("
        . "" . $this->db->escape($id_kategori) . ", "
        . "" . $this->db->escape($nama_sub_kategori) . ", "
        . "" . $this->db->escape($slug_sub_kategori) . ", "
        . "" . $this->db->escape($created_at) . ", "
        . "" . $this->db->escape($updated_at) . ")";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

    public function sub_by_id($id) {
        $sql = "SELECT * FROM sub_kategori_tb WHERE id = ".$this->db->escape($id)." LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function sub_by_id_kategori($id_kategori) {
        $sql = "SELECT * FROM sub_kategori_tb WHERE id_kategori = ".$this->db->escape($id_kategori)." ORDER BY nama_sub_kategori ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function sub_by_slug($slug_sub_kategori) {
        $sql = "SELECT * FROM sub_kategori_tb WHERE slug_sub_kategori = ".$this->db->escape($slug_sub_kategori)." LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result();
    }






    public function check_email_pengguna($email) {
        $sql = "SELECT * FROM pengguna_tb WHERE email = ".$this->db->escape($email)." LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function update_status_pengguna($email) {
        $updated_at = date('Y-m-d H:i:s');

        $sql = "UPDATE pengguna_tb SET stat = 'aktif', updated_at = ".$this->db->escape($updated_at)." WHERE email = ".$this->db->escape($email)."";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }
}