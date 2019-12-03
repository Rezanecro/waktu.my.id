<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->template->write_view('sidenavs', 'template/cms/default_sidenavs', true);
		$this->template->write_view('navs', 'template/cms/default_topnavs.php', true);
	}

	// LOGIN
	public function index() {

		$datas = array(
			'ccc' => 'ccccccccc',
			'ddd', 'dddddddddd'
		);

		$toHtml = array(
			'aaa' => $datas,
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

	// function simple_template() {
	// 	$this->template->set_template('default');
	// 	$this->template->write('header', 'This is Header');
	// 	$this->template->write('title', 'My Simple Template', TRUE);
	// 	$this->template->write_view('content', 'tes/mypage', '', true);

	// 	$this->template->render();
	// }
}