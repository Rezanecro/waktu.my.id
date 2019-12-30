<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Email_Model extends CI_Model
{

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function send_email($kepada, $subyek, $email) {
        // Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1',
            'protocol'  => 'mail',
            'smtp_host' => 'mail.waktu.my.id',
            'smtp_user' => 'info@waktu.my.id',
            'smtp_pass'   => 'lKATHaMrHn',
            'smtp_crypto' => 'tls', 
            'smtp_port'   => 587,
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('info@waktu.my.id', 'Admin Waktu');

        // Email penerima
        $this->email->to($kepada); // Ganti dengan email tujuan

        // Lampiran email, isi dengan url/path file
        // $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

        // Subject email
        $this->email->subject($subyek);

        // Isi email
        $this->email->message($email." <br><br> <a href='".base_url()."'>".base_url()."</a>");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            $stat = 'terkirim';
            $eror = '';
        } else {
            $stat = 'gangguan';
            $eror = $this->email->print_debugger();
        }

        $created_at = date('Y-m-d H:i:s');
        $updated_at = '0000-00-00 00:00:00';

        $sql = "INSERT INTO email_tb(kepada, subyek, email, stat, eror, created_at, updated_at) "
        . "VALUES("
        . "" . $this->db->escape($kepada) . ", "
        . "" . $this->db->escape($subyek) . ", "
        . "" . $this->db->escape($email) . ", "
        . "" . $this->db->escape($stat) . ", "
        . "" . $this->db->escape($eror) . ", "
        . "" . $this->db->escape($created_at) . ", "
        . "" . $this->db->escape($updated_at) . ")";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

    public function simpan_verifikasi($email, $kode)
    {
        $created_at = date('Y-m-d H:i:s');
        $updated_at = '0000-00-00 00:00:00';

        $sql = "INSERT INTO verifikasi_tb(email, kode, created_at, updated_at) "
        . "VALUES("
        . "" . $this->db->escape($email) . ", "
        . "" . $this->db->escape($kode) . ", "
        . "" . $this->db->escape($created_at) . ", "
        . "" . $this->db->escape($updated_at) . ")";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

    public function check_email_pengguna($email) {
        $sql = "SELECT * FROM pengguna_tb WHERE email = ".$this->db->escape($email)." LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result();
    }
}