<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Video_Model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function simpan_video_draf($id_pengguna, $video_path, $token)
    {
        $created_at = date('Y-m-d H:i:s');
        $updated_at = '0000-00-00 00:00:00';

        $sql = "INSERT INTO video_tb(id_pengguna, video_path, token, created_at, updated_at) "
        . "VALUES("
        . "" . $this->db->escape($id_pengguna) . ", "
        . "" . $this->db->escape($video_path) . ", "
        . "" . $this->db->escape($token) . ", "
        . "" . $this->db->escape($created_at) . ", "
        . "" . $this->db->escape($updated_at) . ")";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

    public function simpan_video_full($judul, $deskripsi, $id_kategori, $id_sub_kategori, $tag, $thumbnail, $slug_video, $short_url, $id_pengguna, $token) {

        $updated_at = date('Y-m-d H:i:s');

        $sql = "UPDATE video_tb SET 
        judul = ".$this->db->escape($judul).",
        deskripsi = ".$this->db->escape($deskripsi).",
        id_kategori = ".$this->db->escape($id_kategori).",
        id_sub_kategori = ".$this->db->escape($id_sub_kategori).",
        tag = ".$this->db->escape($tag).",
        thumbnail = ".$this->db->escape($thumbnail).",
        slug_video = ".$this->db->escape($slug_video).",
        short_url = ".$this->db->escape($short_url).",
        stat = 'moderasi',
        updated_at = ".$this->db->escape($updated_at)." 
        WHERE id_pengguna = ".$this->db->escape($id_pengguna)." AND token = ".$this->db->escape($token)."";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

    public function video_pengguna($id_pengguna) {
        $sql = "SELECT * FROM video_tb WHERE id_pengguna = ".$this->db->escape($id_pengguna)." AND stat != 'hapus' ORDER BY created_at ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function video_draf($id_pengguna, $token) {
        $sql = "SELECT * FROM video_tb WHERE id_pengguna = ".$this->db->escape($id_pengguna)." AND token = ".$this->db->escape($token)." LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result();
    }
}
