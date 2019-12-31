<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Artikel_Model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function simpan_artikel($tabel,$data)
    {
        // echo "Model";
        // print_r($data);die();
        $insert_query = $this->db->insert($tabel, $data);
        return $insert_query;
    }
}
