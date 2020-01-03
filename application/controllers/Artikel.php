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

		//SESSION
		$id_pengguna = $this->session->userdata('id');

		$artikel_pengguna = $this->Artikel_Model->artikel_pengguna($id_pengguna);

		$toHtml = array(
			'aktif'		=> 'daftar_artikel',
			'artikel'	=> $artikel_pengguna,
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
		$id_pengguna	= $this->session->userdata('id');

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

				$folderImage = 'assets/images/artikel/thumbnail/'.date('Y').'/'.date('F');
				if (!is_dir($folderImage)) {
					mkdir($folderImage, 0777, TRUE);

				}

				$cleanChar = str_replace(array('ú','à', 'á', 'è', 'ì', 'ò', 'ù', '','º','Á','@','#','$','%','^','&','(',')','_','+','=','|','!',' ',',','.','~','/',':','*','?','"','<','>','|',"'"),'-',$judulTxt);

				// TAG
				$the_tags = $TagTxt;
				if($TagTxt == '') {
					$judul_clean = str_replace(array('ú','à', 'á', 'è', 'ì', 'ò', 'ù', '','º','Á','@','#','$','%','^','&','(',')','_','+','=','|','!',',','.','~','/',':','*','?','"','<','>','|',"'"),'',$judulTxt);

					$the_tags = join(',', explode(' ', $judul_clean));
				}

				$rand_id = rand(11111,99999);
				$content_link = strip_tags($cleanChar).'-'.$id_pengguna.'-'.$rand_id;

				// ext
				$extImage = explode('/', $thum_type);
				$newName = $content_link.'.'.$extImage[1];

				$config['upload_path']          = './'.$folderImage.'/';
				$config['allowed_types']        = 'gif|jpg|jpeg|png';
				$config['file_name'] 			= $newName;

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('thumbnailImg')) {
					$kode = 404;
					$msg = 'Unggah thumbnail artikel gagal! Kesalahan : '.$this->upload->display_errors();
				} else {
					$imageUploadInfo = $this->upload->data();

	    			// print_r($imageUploadInfo); exit();

	    			//ukuran image
					$gambar_array = array();
					$gambar_array['image_library'] = 'gd2';
					$gambar_array['maintain_ratio'] = TRUE;
					$gambar_array['create_thumb'] = FALSE;

					$gambar_array['source_image'] = $imageUploadInfo['full_path'];
					$gambar_array['width'] = 700;

					$this->load->library('image_lib', $gambar_array);
					// $this->image_lib->clear(); 
					// $this->image_lib->initialize($gambar_array);


					if (!$this->image_lib->resize()) {
						$kode = 404;
	    				$msg = 'Pengaturan ukuran thumbnail artikel gagal! Kesalahan : '.$this->upload->display_errors();
					} else {
						// SIMPAN ARTIKEL

						$judul 				= $judulTxt;
						$isi_artikel 		= $artikelTxt;
						$id_kategori 		= $category;
						$id_sub_kategori 	= $subCategory;
						$tag 				= $the_tags;
						$thumbnail 			= $folderImage.'/'.$newName;
						$slug_artikel 		= $content_link;
						$short_url 			= $rand_id;
						$token 				= base64_encode($rand_id);

						$simpan_data_artikel = $this->Artikel_Model->simpan_artikel($id_pengguna, $judul, $isi_artikel, $id_kategori, $id_sub_kategori, $tag, $thumbnail, $slug_artikel, $short_url, $token);

						if($simpan_data_artikel) {
							$kode = 200;
							$msg = 'Artikel anda masuk moderasi, terima kasih!';
						} else {
							$kode = 404;
							$msg = 'Penyimpanan data artikel gagal!';
						}
					}
				}
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
