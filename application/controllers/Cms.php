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

		$kategori_data = $this->Kategori_Model->semua_kategori();

		$toHtml = array(
			'kategori' 	=> $kategori_data,
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

	public function Ajax_DataKategoriId() {

		// $this->sesi_check_ajax();

		$kode = '';
		$msg = '';
		$datas = array();

		$id = $this->input->post('data_kategori_id');

		if($id != '') {
			$kategori_data_id = $this->Kategori_Model->kategori_by_id($id);
			if(count($kategori_data_id) > 0) {
				foreach ($kategori_data_id as $key => $val) {
					$datas[$key]['id']		= $val->id;
					$datas[$key]['nama']	= $val->nama_kategori;
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

		if($kategoriTxt != '') {

			$cleanChar = str_replace(array('ú','à', 'á', 'è', 'ì', 'ò', 'ù', '','º','Á','@','#','$','%','^','&','(',')','_','+','=','|','!',' ',',','.','~','/',':','*','?','"','<','>','|',"'"),'-',$kategoriTxt);

			$slug_kategori = strip_tags(strtolower($cleanChar));
			// CHECK
			$check_kategori_slug = $this->Kategori_Model->kategori_by_slug($slug_kategori);
			if(count($check_kategori_slug) == 0) {
				$simpan_kategori = $this->Kategori_Model->simpan_kategori($kategoriTxt, $slug_kategori);
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

	public function Ajax_SuntingKategori() {

		// $this->sesi_check_ajax();

		$kode = '';
		$msg = '';
		$datas = array();

		$namaKategoriTxt 	= $this->input->post('namaKategoriTxt');
		$idTxt 				= $this->input->post('idTxt');

		if($namaKategoriTxt != '' && $idTxt != '') {

			$cleanChar = str_replace(array('ú','à', 'á', 'è', 'ì', 'ò', 'ù', '','º','Á','@','#','$','%','^','&','(',')','_','+','=','|','!',' ',',','.','~','/',':','*','?','"','<','>','|',"'"),'-',$namaKategoriTxt);

			$slug_kategori = strip_tags(strtolower($cleanChar));
			// CHECK
			$check_kategori_id = $this->Kategori_Model->kategori_by_id($idTxt);
			if(count($check_kategori_id) > 0) {

				$check_kategori_slug = $this->Kategori_Model->kategori_by_slug($slug_kategori);
				if(count($check_kategori_slug) == 0) {

					$ubah_kategori = $this->Kategori_Model->update_kategori($namaKategoriTxt, $slug_kategori, $idTxt);
					if($ubah_kategori) {
						$kode = 200;
						$msg = 'Kategori berhasil Ubah';
					} else {
						$kode = 404;
						$msg = 'Ubah sub-kategori gagal';
					}

				} else {
					$kode = 404;
					$msg = 'Kategori sudah ada';
				}
			} else {
				$kode = 404;
				$msg = 'Kategori tidak ditemukan';
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

	// SUB KATEGORI
	public function Ajax_DataSubKategori() {

		// $this->sesi_check_ajax();

		$kode = '';
		$msg = '';
		$datas = array();

		if($this->input->post('aksi') == 'data_sub_kategori') {
			$sub_kategori_data = $this->Kategori_Model->semua_sub_kategori();
			if(count($sub_kategori_data) > 0) {
				foreach ($sub_kategori_data as $key => $val) {
					$datas[$key]['id_kategori']		= $val->id_kategori;
					$datas[$key]['id']				= $val->id;
					$datas[$key]['nama_kategori']	= $val->nama_kategori;
					$datas[$key]['nama']			= $val->nama_sub_kategori;
				}

				$kode = 200;
				$msg = 'Sukses';
			} else {
				$kode = 404;
				$msg = 'Sub-kategori kosong';
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

	public function Ajax_TambahSubKategori() {

		// $this->sesi_check_ajax();

		$kode = '';
		$msg = '';
		$datas = array();

		$subKategoriTxt = $this->input->post('subKategoriTxt');
		$categorySelect = $this->input->post('categorySelect');

		if($subKategoriTxt != '' && $categorySelect != '') {

			$cleanChar = str_replace(array('ú','à', 'á', 'è', 'ì', 'ò', 'ù', '','º','Á','@','#','$','%','^','&','(',')','_','+','=','|','!',' ',',','.','~','/',':','*','?','"','<','>','|',"'"),'-',$subKategoriTxt);

			$slug_sub_kategori = strip_tags(strtolower($cleanChar));
			// CHECK
			$check_sub_kategori_slug = $this->Kategori_Model->sub_by_slug($slug_sub_kategori);
			if(count($check_sub_kategori_slug) == 0) {
				$simpan_sub_kategori = $this->Kategori_Model->simpan_sub_kategori($categorySelect, $subKategoriTxt, $slug_sub_kategori);
				if($simpan_sub_kategori) {
					$kode = 200;
					$msg = 'Sub-kategori berhasil ditambah';
				} else {
					$kode = 404;
					$msg = 'Tambah sub-kategori gagal';
				}
			} else {
				$kode = 404;
				$msg = 'Sub-kategori sudah ada';
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

	public function Ajax_DataSubKategoriId() {

		// $this->sesi_check_ajax();

		$kode = '';
		$msg = '';
		$datas = array();

		$id = $this->input->post('data_sub_kategori_id');

		if($id != '') {
			$sub_kategori_data_id = $this->Kategori_Model->sub_by_id($id);
			if(count($sub_kategori_data_id) > 0) {
				foreach ($sub_kategori_data_id as $key => $val) {
					$datas[$key]['id_sub']			= $val->id;
					$datas[$key]['id_kategori']		= $val->id_kategori;
					$datas[$key]['nama_sub']		= $val->nama_sub_kategori;
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

	public function Ajax_SuntingSubKategori() {

		// $this->sesi_check_ajax();

		$kode = '';
		$msg = '';
		$datas = array();

		$ubahIdSubTxt = $this->input->post('ubahIdSubTxt');
		$ubahNamaSubTxt = $this->input->post('ubahNamaSubTxt');
		$ubahSelectCategory = $this->input->post('ubahSelectCategory');

		if($ubahIdSubTxt != '' && $ubahNamaSubTxt != '' && $ubahSelectCategory != '') {

			$cleanChar = str_replace(array('ú','à', 'á', 'è', 'ì', 'ò', 'ù', '','º','Á','@','#','$','%','^','&','(',')','_','+','=','|','!',' ',',','.','~','/',':','*','?','"','<','>','|',"'"),'-',$ubahNamaSubTxt);

			$slug_sub_kategori = strip_tags(strtolower($cleanChar));
			// CHECK BY ID
			$check_sub_kategori_id = $this->Kategori_Model->sub_by_id($ubahIdSubTxt);
			if(count($check_sub_kategori_id) > 0) {

				// CHECK BY SLUG
				$check_sub_kategori_slug = $this->Kategori_Model->sub_by_slug_id_kategori($slug_sub_kategori, $ubahSelectCategory);
				if(count($check_sub_kategori_slug) == 0) {

					$update_sub_kategori = $this->Kategori_Model->update_sub_kategori($ubahSelectCategory, $ubahNamaSubTxt, $slug_sub_kategori, $ubahIdSubTxt);
					if($update_sub_kategori) {
						$kode = 200;
						$msg = 'Sub-kategori berhasil diubah';
					} else {
						$kode = 404;
						$msg = 'Ubah sub-kategori gagal';
					}
				} else {
					$kode = 404;
					$msg = 'Sub-kategori sudah ada';
				}
			} else {
				$kode = 404;
				$msg = 'Sub-kategori tidak ditemukan';
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