<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->template->write_view('sidenavs', 'template/cms/default_sidenavs', true);
		$this->template->write_view('navs', 'template/cms/default_topnavs.php', true);

		$this->load->library('session');

		$this->load->model('Kategori_Model');
		$this->load->model('Video_Model');
	}

	// Daftar Video
	public function index() {

		$id_pengguna	= $this->session->userdata('id');

		$video_pengguna = $this->Video_Model->video_pengguna($id_pengguna);

		$toHtml = array(
			'aktif'	=> 'daftar_video',
			'video' => $video_pengguna,
		);

		$this->template->write('title', 'Daftar Video - Waktu.my.id', TRUE);
		$this->template->write('header', 'Daftar Video');
		$this->template->write_view('content', 'cms/video/daftar_video', $toHtml, true);

		$this->template->render();
	}

	public function unggah_video() {

		// KATEGORI
		$semua_kategori = $this->Kategori_Model->semua_kategori();

		$toHtml = array(
			'aktif'	=> 'unggah_video',
			'kategori'	=> $semua_kategori,
		);

		$this->template->write('title', 'Unggah Video - Waktu.my.id', TRUE);
		$this->template->write('header', 'Unggah Video');
		$this->template->write_view('content', 'cms/video/unggah_video', $toHtml, true);

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

		$this->template->write('title', 'Video Dalam Moderasi - Waktu.my.id', TRUE);
		$this->template->write('header', 'Video Dalam Moderasi');
		$this->template->write_view('content', 'cms/video/daftar_moderasi', $toHtml, true);

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

		$this->template->write('title', 'Video Di Setujui - Waktu.my.id', TRUE);
		$this->template->write('header', 'Video Di Setujui');
		$this->template->write_view('content', 'cms/video/daftar_disetujui', $toHtml, true);

		$this->template->render();
	}

	public function draf_video() {

		if($this->input->get('id') != '') { 

			$id_pengguna	= $this->session->userdata('id');
			$token 			= $this->input->get('id');

			// DRAF
			$draf_video = $this->Video_Model->video_draf($id_pengguna, $token);
			if(count($draf_video) > 0) {

				foreach ($draf_video as $key => $val) {

					if($val->stat == 'draf') {
						// KATEGORI
						$semua_kategori = $this->Kategori_Model->semua_kategori();

						$toHtml = array(
							'aktif'			=> 'lengkapi_video',
							'kategori'		=> $semua_kategori,
							'draf_video'	=> $draf_video,
						);

						$this->template->write('title', 'Melengkapi Draf Video - Waktu.my.id', TRUE);
						$this->template->write('header', 'Melengkapi Draf Video');
						$this->template->write_view('content', 'cms/video/lengkapi_video', $toHtml, true);

						$this->template->render();
					} else {
						redirect(base_url('panel/video/daftar'));
					}
				}
			} else {
				redirect(base_url('panel/video/daftar'));
			}
		} else {
			redirect(base_url('panel/video/daftar'));
		}
	}

	public function sunting_video() {

		if($this->input->get('id') != '') { 

			$id_pengguna	= $this->session->userdata('id');
			$token 			= $this->input->get('id');

			// DRAF
			$draf_video = $this->Video_Model->video_draf($id_pengguna, $token);
			if(count($draf_video) > 0) {

				foreach ($draf_video as $key => $val) {

					if($val->stat == 'tayang') {
						// KATEGORI
						$semua_kategori = $this->Kategori_Model->semua_kategori();

						$toHtml = array(
							'aktif'			=> 'sunting_video',
							'kategori'		=> $semua_kategori,
							'draf_video'	=> $draf_video,
						);

						$this->template->write('title', 'Sunting Video - Waktu.my.id', TRUE);
						$this->template->write('header', 'Sunting Video');
						$this->template->write_view('content', 'cms/video/sunting_video', $toHtml, true);

						$this->template->render();
					} else {
						redirect(base_url('panel/video/daftar'));
					}
				}
			} else {
				redirect(base_url('panel/video/daftar'));
			}
		} else {
			redirect(base_url('panel/video/daftar'));
		}
	}

	// AJAX

	public function Ajax_UnggahVideo() { 

		$kode = '';
		$msg = '';
		$datas = array();

		$videoNameId 	= $this->input->post('videoNameId');
		$videonya 		= $_FILES['videonya'];
		$id_pengguna	= $this->session->userdata('id');

		$video_name 	= $videonya['name'];
		$video_tmp		= $videonya['tmp_name'];
		$video_type		= $videonya['type'];
		$video_size		= $videonya['size'];

		$video_type_bool = false;
		if($video_type == 'video/mp4' || $video_type == 'video/avi' || $video_type == 'video/3gp') {
			$video_type_bool = true;
		}

		$video_bool = false;
		if($video_name != '' && $video_tmp != '' && $video_type_bool == true && $video_size > 0) {
			$video_bool = true;
		}

		if($videoNameId != '') {

			if($video_bool) {

				$folderVideo = 'assets/videos/'.date('Y').'/'.date('F');
				if (!is_dir($folderVideo)) {
					mkdir($folderVideo, 0777, TRUE);

				}

				$cleanChar = str_replace(array('ú','à', 'á', 'è', 'ì', 'ò', 'ù', '','º','Á','@','#','$','%','^','&','(',')','_','+','=','|','!',' ',',','.','~','/',':','*','?','"','<','>','|',"'"),'-',$videoNameId);

				$rand_id = rand(11111,99999);
				$content_link = strip_tags($cleanChar).'-'.$id_pengguna.'-'.$rand_id;

				// ext
				$extVideo = explode('/', $video_type);
				$newName = $content_link.'.'.$extVideo[1];

				$config['upload_path']          = './'.$folderVideo.'/';
				$config['allowed_types']        = 'mp4|avi|3gp';
				$config['file_name'] 			= $newName;

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('videonya')) {
					$kode = 404;
					$msg = 'Unggah video gagal! Kesalahan : '.$this->upload->display_errors();
				} else {
					// $imageUploadInfo = $this->upload->data();
					$video_path = $folderVideo.'/'.$newName;
					$token		= base64_encode($rand_id);
					
					$draf_video = $this->Video_Model->simpan_video_draf($id_pengguna, $video_path, $token);
					if($draf_video) {
						$kode = 200;
						$datas = array('token' => $token);
						$msg = 'Unggah draf video berhasil!';
					} else {
						$kode = 404;
						$msg = 'Simpan data draf video gagal!';
					}
				}
			} else {
				$kode = 404;
				$msg = 'Media video tidak valid!';
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

	public function Ajax_LengkapiVideo() {

		// $this->sesi_check_ajax();

		$kode = '';
		$msg = '';
		$datas = array();

		$tokenDraf 				= $this->input->post('tokenDraf');
		$lengkapiJudulVideoTxt 	= $this->input->post('lengkapiJudulVideoTxt');
		$categorySelect 		= $this->input->post('categorySelect');
		$subCategorySelect 		= $this->input->post('subCategorySelect');
		$lengkapiTagTxt 		= $this->input->post('lengkapiTagTxt');
		$thumbnailImg 			= $_FILES['thumbnailImg'];
		$lengkapiDeskripsiTxt 	= $this->input->post('lengkapiDeskripsiTxt');
		$id_pengguna			= $this->session->userdata('id');

		// CHECK THUMBNAIL IMAGE TRUE
		$thum_name 	= $thumbnailImg['name'];
		$thum_tmp	= $thumbnailImg['tmp_name'];
		$thum_type	= $thumbnailImg['type'];
		$thum_size	= $thumbnailImg['size'];

		$thum_type_bool = false;
		if($thum_type == 'image/jpeg' || $thum_type == 'image/jpg' || $thum_type == 'image/png') {
			$thum_type_bool = true;
		}

		$thum_bool = false;
		if($thum_name != '' && $thum_tmp != '' && $thum_type_bool == true && $thum_size > 0) {
			$thum_bool = true;
		}

		if($tokenDraf != '' && $lengkapiJudulVideoTxt != '' && $categorySelect != '' && $subCategorySelect != '') {

			if($thum_bool) {

				$folderImage = 'assets/images/video/thumbnail/'.date('Y').'/'.date('F');
				if (!is_dir($folderImage)) {
					mkdir($folderImage, 0777, TRUE);

				}

				$cleanChar = str_replace(array('ú','à', 'á', 'è', 'ì', 'ò', 'ù', '','º','Á','@','#','$','%','^','&','(',')','_','+','=','|','!',' ',',','.','~','/',':','*','?','"','<','>','|',"'"),'-',$lengkapiJudulVideoTxt);

				// TAG
				$the_tags = $lengkapiTagTxt;
				if($lengkapiTagTxt == '') {
					$judul_clean = str_replace(array('ú','à', 'á', 'è', 'ì', 'ò', 'ù', '','º','Á','@','#','$','%','^','&','(',')','_','+','=','|','!',',','.','~','/',':','*','?','"','<','>','|',"'"),'',$lengkapiJudulVideoTxt);

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
					$msg = 'Unggah thumbnail video gagal! Kesalahan : '.$this->upload->display_errors();
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
	    				$msg = 'Pengaturan ukuran thumbnail video gagal! Kesalahan : '.$this->upload->display_errors();
					} else {
						// SIMPAN VIDEO (lebih tepatnya update data video)

						$judul 				= $lengkapiJudulVideoTxt;
						$deskripsi 			= $lengkapiDeskripsiTxt;
						$id_kategori 		= $categorySelect;
						$id_sub_kategori 	= $subCategorySelect;
						$tag 				= $the_tags;
						$thumbnail 			= $folderImage.'/'.$newName;
						$slug_video 		= $content_link;
						$short_url 			= $rand_id;
						$token 				= $tokenDraf;

						$simpan_data_video = $this->Video_Model->simpan_video_full($judul, $deskripsi, $id_kategori, $id_sub_kategori, $tag, $thumbnail, $slug_video, $short_url, $id_pengguna, $token);


						if($simpan_data_video) {
							$kode = 200;
							$msg = 'Video anda masuk moderasi, terima kasih!';
						} else {
							$kode = 404;
							$msg = 'Penyimpanan data video gagal!';
						}
					}
				}
			} else {
				$kode = 404;
				$msg = 'Thumbnail/cover video anda tidak valid!';
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
}