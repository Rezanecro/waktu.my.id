<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->template->write_view('sidenavs', 'template/cms/default_sidenavs', true);
		$this->template->write_view('navs', 'template/cms/default_topnavs.php', true);

		$this->load->library('session');

		$this->load->model('Kategori_Model');
		$this->load->model('Artikel_Model');
	}

	// Daftar Artikel
	public function index() {

		$datas = array(
			'ccc' => 'ccccccccc',
			'ddd', 'dddddddddd' 
		);

		$toHtml = array(
			'aaa' => $datas,
		);

		$this->template->write('title', 'Daftar Artikel - Waktu.my.id', TRUE);
		$this->template->write('header', 'Daftar Artikel');
		$this->template->write_view('content', 'cms/artikel/daftar_artikel', $toHtml, true);

		$this->template->render();
	}

	public function tulis_artikel() {

		// $this->sesi_check();

		//SESSION
		$userToken = $this->session->userdata('email');

		// KATEGORI
		$semua_kategori = $this->Kategori_Model->semua_kategori();

		$toHtml = array(
			'aktif'		=> 'tulis_artikel',
			'token'		=> $userToken,
			'kategori'	=> $semua_kategori,
		);

		$this->template->write('title', 'Tulis Artikel - Waktu.my.id', TRUE);
		$this->template->write('header', 'Tulis Artikel');
		$this->template->write_view('content', 'cms/artikel/tulis_artikel', $toHtml, true);

		$this->template->render();
	}

	public function daftar_moderasi() {

		$datas = array(
			'ccc' => 'ccccccccc',
			'ddd', 'dddddddddd'
		);

		$toHtml = array(
			'aaa' => $datas,
		);

		$this->template->write('title', 'Artikel Dalam Moderasi - Waktu.my.id', TRUE);
		$this->template->write('header', 'Artikel Dalam Moderasi');
		$this->template->write_view('content', 'cms/artikel/daftar_moderasi', $toHtml, true);

		$this->template->render();
	}

	public function daftar_disetujui() {

		$datas = array(
			'ccc' => 'ccccccccc',
			'ddd', 'dddddddddd'
		);

		$toHtml = array(
			'aaa' => $datas,
		);

		$this->template->write('title', 'Artikel Di Setujui - Waktu.my.id', TRUE);
		$this->template->write('header', 'Artikel Di Setujui');
		$this->template->write_view('content', 'cms/artikel/daftar_disetujui', $toHtml, true);

		$this->template->render();
	}

	// AJAX

	public function Ajax_KategoriForSub() {

		// $this->sesi_check_ajax();

		$kode = '';
		$msg = '';
		$datas = array();

		$id_kategori = $this->input->post('id_kategori');

		if($id_kategori != '') {

			//check sub kategori
			$sub_kategori_by_slug_kategori = $this->Kategori_Model->sub_by_id_kategori($id_kategori);
			if(count($sub_kategori_by_slug_kategori) > 0) {

				foreach ($sub_kategori_by_slug_kategori as $key => $val) {
					$datas[$key]['id_sub'] = $val->id;
					$datas[$key]['nama_sub'] = $val->nama_sub_kategori;
				}

				$kode = 200;
				$msg = 'Email sudah terdaftar!';
			} else {
				$kode = 404;
				$msg = 'Sub kategori tidak ditemukan!';
			}
		} else {
			$kode = 404;
			$msg = 'Form inputan kosong!';
		}

		$res = array(
			'code' => $kode,
			'datas' => $datas,
			'msg' => $msg
		);

		header('Content-Type: application/json');
		echo json_encode($res);
	}

	public function Ajax_TulisArtikel() {

		// $this->sesi_check_ajax();

		$kode = '';
		$msg = '';
		$datas = array();

		$artikelTxt 	= $this->input->post('artikelTxt');
		$judulTxt 		= $this->input->post('judulTxt');
		$category 		= $this->input->post('categorySelect');
		$subCategory 	= $this->input->post('subCategorySelect');
		$TagTxt 		= $this->input->post('TagTxt');
		$thumbnail 		= $_FILES['thumbnailImg'];

		// CHECK THUMBNAIL IMAGE TRUE
		$thum_name 	= $thumbnail['name'];
		$thum_tmp	= $thumbnail['tmp_name'];
		$thum_type	= $thumbnail['type'];
		$thum_size	= $thumbnail['size'];

		$thum_type_bool = false;
		if($thum_type == 'image/jpeg' || $thum_type == 'image/jpg' || $thum_type == 'image/png') {
			$thum_type_bool = true;
		}

		$thum_bool = false;
		if($thum_name != '' && $thum_tmp != '' && $thum_type_bool == true && $thum_size > 0) {
			$thum_bool = true;
		}

		if($artikelTxt != '' && $judulTxt != '' && $category != '' && $subCategory != '') {

			if($thum_bool) {
				$kode = 200;
				$msg = 'Artikel anda masuk moderasi, terima kasih!';
			} else {
				$kode = 404;
				$msg = 'Thumbnail/cover artikel anda tidak valid!';
			}
		} else {
			$kode = 404;
			$msg = 'Ada form yang kosong, mohon diisi';
		}

		$res = array(
			'code' => $kode,
			'datas' => $datas,
			'msg' => $msg
		);

		header('Content-Type: application/json');
		echo json_encode($res);




















		// $data 	= array(
		// 		'isi_artikel' 	=> $this->db->escape($artikelTxt),
		// 		'judul'		=> $this->db->escape($judulTxt),
		// 		'id_kategori'	=> $this->db->escape($category),
		// 		'id_sub_kategori' => $this->db->escape($subCategory),
		// 		'tag'		=> $this->db->escape($TagTxt),
		// 		// 'thumbnail'	=> $this->db->escape($thumbnail),
		// 		'created_at'=> $this->db->escape($created_at),
		// 		'updated_at'=> $this->db->escape($updated_at)
		// );

		// $insert = $this->Artikel_Model->simpan_artikel('artikel_tb', $data);
		// // print_r($insert);

		// if ($insert > 0) {
		// 	echo "Berhasil";
		// }else{
		// 	echo "Tidak berhasil";
		// }

		// header('Content-Type: application/json');
		// echo json_encode($data);

	}

	// function simple_template() {
	// 	$this->template->set_template('default');
	// 	$this->template->write('header', 'This is Header');
	// 	$this->template->write('title', 'My Simple Template', TRUE);
	// 	$this->template->write_view('content', 'tes/mypage', '', true);

	// 	$this->template->render();
	// }\

	function sesi_check() {
		if($this->session->userdata('email') == '') {
			$this->session->sess_destroy();
			redirect(base_url('masuk'));
		} 
	}

	function sesi_check_ajax() {
		if($this->session->userdata('email') == '') {
			$this->session->sess_destroy();

			$res = array(
				'code' => 400,
				'datas' => array(),
				'msg' => 'Akses dilarang'
			);

			header('Content-Type: application/json');
			echo json_encode($res);
		}

		exit();
	}
}
