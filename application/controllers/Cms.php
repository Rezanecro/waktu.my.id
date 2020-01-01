<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->template->write_view('sidenavs', 'template/cms/default_sidenavs', true);
		$this->template->write_view('navs', 'template/cms/default_topnavs.php', true);

		$this->load->library('session');

		$this->load->model('Kategori_Model');
	}

	public function index() {

		$this->sesi_check();

		$datas = array(
			'ccc' => 'ccccccccc',
			'ddd', 'dddddddddd'
		);

		$toHtml = array(
			'aaa' => $datas,
		);

		$this->template->write('title', 'Dashboard', TRUE);
		$this->template->write('header', 'Dashboard');
		$this->template->write_view('content', 'cms/dashboard', $toHtml, true);

		$this->template->render();
	}

	public function kategori() {

		// $this->sesi_check();

		$datas = array(
			'ccc' => 'ccccccccc',
			'ddd', 'dddddddddd'
		);

		$toHtml = array(
			'aaa' 		=> $datas,
			'aktif'		=> 'kategori',
		);

		$this->template->write('title', 'Kategori', TRUE);
		$this->template->write('header', 'Kategori');
		$this->template->write_view('content', 'cms/kategori', $toHtml, true);

		$this->template->render();
	}

	public function subkategori() {

		// $this->sesi_check();

		$datas = array(
			'ccc' => 'ccccccccc',
			'ddd', 'dddddddddd'
		);

		$toHtml = array(
			'aaa' 		=> $datas,
			'aktif'		=> 'subkategori',
		);

		$this->template->write('title', 'Sub Kategori', TRUE);
		$this->template->write('header', 'Sub Kategori');
		$this->template->write_view('content', 'cms/subkategori', $toHtml, true);

		$this->template->render();
	}

	// AJAX

	public function Ajax_DataKategori() {

		// $this->sesi_check_ajax();

		$kode = '';
		$msg = '';
		$datas = array();

		if($this->input->post('aksi') == 'data_kategori') {
			$kategori_data = $this->Kategori_Model->semua_kategori();
			if(count($kategori_data) > 0) {
				foreach ($kategori_data as $key => $val) {
					$datas[$key]['id']		= $val->id;
					$datas[$key]['nama']	= $val->nama_kategori;
					$datas[$key]['slug']	= $val->slug_kategori;
				}

				$kode = 200;
				$msg = 'Sukses';
			} else {
				$kode = 404;
				$msg = 'Kategori kosong';
			}
		} else {
			$kode = 404;
			$msg = 'Metode tidak valid';
		}

		$res = array(
			'code' => $kode,
			'datas' => $datas,
			'msg' => $msg
		);

		header('Content-Type: application/json');
		echo json_encode($res);
	}

	public function Ajax_TambahKategori() {

		// $this->sesi_check_ajax();

		$kode = '';
		$msg = '';
		$datas = array();

		$kategoriTxt = $this->input->post('kategoriTxt');

		if($artikelTxt) {

			$cleanChar = str_replace(array('ú','à', 'á', 'è', 'ì', 'ò', 'ù', '','º','Á','@','#','$','%','^','&','(',')','_','+','=','|','!',' ',',','.','~','/',':','*','?','"','<','>','|',"'"),'-',$kategoriTxt);

			$slug_kategori = strip_tags(strtolower($cleanChar));
			// CHECK
			$check_kategori_slug = $this->Kategori_Model->kategori_by_slug($slug_kategori);
			if(count($check_kategori_slug) == 0) {
				$simpan_kategori = $this->Kategori_Model->simpan_kategori($artikelTxt, $slug_kategori);
				if($simpan_kategori) {
					$kode = 200;
					$msg = 'Kategori berhasil ditambah';
				} else {
					$kode = 404;
					$msg = 'Tambah kategori gagal';
				}
			} else {
				$kode = 404;
				$msg = 'Kategori sudah ada';
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
	}

	// function simple_template() {
	// 	$this->template->set_template('default');
	// 	$this->template->write('header', 'This is Header');
	// 	$this->template->write('title', 'My Simple Template', TRUE);
	// 	$this->template->write_view('content', 'tes/mypage', '', true);

	// 	$this->template->render();
	// }

	function sesi_check() {
		if($this->session->userdata('email') == '') {
			$this->session->sess_destroy();
			redirect(base_url('masuk'));
		} 
	}
}