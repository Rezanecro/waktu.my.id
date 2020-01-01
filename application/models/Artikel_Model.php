<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Artikel_Model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function simpan_artikel($id_pengguna, $judul, $isi_artikel, $id_kategori, $id_sub_kategori, $tag, $thumbnail, $slug_artikel, $short_url, $token)
    {
        $created_at = date('Y-m-d H:i:s');
        $updated_at = '0000-00-00 00:00:00';

        $sql = "INSERT INTO artikel_tb(id_pengguna, judul, isi_artikel, id_kategori, id_sub_kategori, tag, thumbnail, slug_artikel, short_url, token, created_at, updated_at) "
        . "VALUES("
        . "" . $this->db->escape($id_pengguna) . ", "
        . "" . $this->db->escape($judul) . ", "
        . "" . $this->db->escape($isi_artikel) . ", "
        . "" . $this->db->escape($id_kategori) . ", "
        . "" . $this->db->escape($id_sub_kategori) . ", "
        . "" . $this->db->escape($tag) . ", "
        . "" . $this->db->escape($thumbnail) . ", "
        . "" . $this->db->escape($slug_artikel) . ", "
        . "" . $this->db->escape($short_url) . ", "
        . "" . $this->db->escape($token) . ", "
        . "" . $this->db->escape($created_at) . ", "
        . "" . $this->db->escape($updated_at) . ")";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }
}
