<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->template->write_view('sidenavs', 'template/cms/default_sidenavs', true);
		$this->template->write_view('navs', 'template/cms/default_topnavs.php', true);

		$this->load->model('Pengguna_Model');
	}

	// LOGIN
	public function index() {

		$datas = array(
			'ccc' => 'ccccccccc', 
			'ddd', 'dddddddddd'
		);

		$toHtml = array(
			'aaa' => $datas,
			'aktif'	=> 'masuk',
		);

		$this->template->set_template('non_pebri_cms');
		$this->template->write('title', 'Masuk Untuk Akses Panel - Waktu.my.id', TRUE);
		$this->template->write_view('content', 'cms/pengguna/masuk', $toHtml, true);

		$this->template->render();
	}

	public function register_pengguna() {

		$datas = array(
			'ccc' => 'ccccccccc',
			'ddd', 'dddddddddd'
		);

		$toHtml = array(
			'aaa' => $datas,
			'aktif'	=> 'register',
		);

		$this->template->set_template('non_pebri_cms');
		$this->template->write('title', 'Registrasi Akun - Waktu.my.id', TRUE);
		$this->template->write('header', 'Registrasi Akun');
		$this->template->write_view('content', 'cms/pengguna/register', $toHtml, true);

		$this->template->render();
	}

	public function lupa_password() {

		$datas = array(
			'ccc' => 'ccccccccc',
			'ddd', 'dddddddddd'
		);

		$toHtml = array(
			'aaa' => $datas,
		);

		$this->template->set_template('non_pebri_cms');
		$this->template->write('title', 'Lupa Password Akun - Waktu.my.id', TRUE);
		$this->template->write('header', 'Lupa Password Akun');
		$this->template->write_view('content', 'cms/pengguna/lupa_password', $toHtml, true);

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

		$this->template->write('title', 'Daftar Pengguna Dalam Moderasi - Waktu.my.id', TRUE);
		$this->template->write('header', 'Daftar Pengguna Dalam Moderasi');
		$this->template->write_view('content', 'cms/pengguna/daftar_moderasi', $toHtml, true);

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

		$this->template->write('title', 'Pengguna Di Setujui - Waktu.my.id', TRUE);
		$this->template->write('header', 'Pengguna Di Setujui');
		$this->template->write_view('content', 'cms/pengguna/daftar_disetujui', $toHtml, true);

		$this->template->render();
	}

	public function profil_pengguna() {

		$datas = array(
			'ccc' => 'ccccccccc',
			'ddd', 'dddddddddd'
		);

		$toHtml = array(
			'aaa' => $datas,
		);

		$this->template->write('title', 'Profil Pengguna - Waktu.my.id', TRUE);
		$this->template->write('header', 'Profil Pengguna');
		$this->template->write_view('content', 'cms/pengguna/profil', $toHtml, true);

		$this->template->render();
	}

	public function pengaturan_pengguna() {

		$datas = array(
			'ccc' => 'ccccccccc',
			'ddd', 'dddddddddd'
		);

		$toHtml = array(
			'aaa' => $datas,
		);

		$this->template->write('title', 'Pengaturan - Waktu.my.id', TRUE);
		$this->template->write('header', 'Pengaturan');
		$this->template->write_view('content', 'cms/pengguna/pengaturan', $toHtml, true);

		$this->template->render();
	}

	// AJAX

	public function Ajax_RegistePengguna() {

		$kode = '';
		$msg = '';
		$datas = array();

		$namaTxt 			= $this->input->post('namaTxt');
		$emaiUserTxt 		= $this->input->post('emaiUserTxt');
		$passwordUserTxt 	= $this->input->post('passwordUserTxt');

		if($namaTxt != '' && $emaiUserTxt != '' && $passwordUserTxt != '') {

			//check email
			$check_email = $this->Pengguna_Model->check_email_pengguna($emaiUserTxt);
			if(count($check_email) > 0) {
				$kode = 404;
				$msg = 'Email sudah terdaftar!';
			} else {
				$simpan_pengguna = $this->Pengguna_Model->simpan_pengguna($namaTxt, $emaiUserTxt, md5($passwordUserTxt));
				if($simpan_pengguna) {
					$kode = 200;
					$msg = 'Data pengguna berhasil disimpan!';
				} else {
					$kode = 404;
					$msg = 'Data pengguna gagal disimpan!';
				}
			}
		} else {
			$kode = 404;
			$msg = 'Form inputan kosong!';
		}

		$res = array(
			'code' => $kode,
			'datas' => array(),
			'msg' => $msg
		);

		header('Content-Type: application/json');
		echo json_encode($res);
	}

	public function Ajax_MasukPengguna() {

		$kode = '';
		$msg = '';
		$datas = array();

		$emaiUserTxt 		= $this->input->post('emaiUserTxt');
		$passwordUserTxt 	= $this->input->post('passwordUserTxt');

		if($emaiUserTxt != '' && $passwordUserTxt != '') {

			//check email
			$check_email = $this->Pengguna_Model->check_masuk_pengguna($emaiUserTxt, md5($passwordUserTxt));
			if(count($check_email) > 0) {
				$kode = 200;
				$msg = 'Email terdaftar!';
			} else {
				$kode = 404;
				$msg = 'Email atau password tidak cocok!';
			}
		} else {
			$kode = 404;
			$msg = 'Form inputan kosong!';
		}

		$res = array(
			'code' => $kode,
			'datas' => array(),
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