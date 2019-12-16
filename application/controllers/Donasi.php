<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->template->write_view('sidenavs', 'template/cms/default_sidenavs', true);
		$this->template->write_view('navs', 'template/cms/default_topnavs.php', true);
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

		$this->template->write('title', 'Daftar Permintaan Donasi - Waktu.my.id', TRUE);
		$this->template->write('header', 'Daftar Permintaan Donasi');
		$this->template->write_view('content', 'cms/donasi/daftar_donasi', $toHtml, true);

		$this->template->render();
	}

	public function permintaan_donasi() {

		$datas = array(
			'ccc' => 'ccccccccc',
			'ddd', 'dddddddddd'
		);

		$toHtml = array(
			'aaa' 	=> $datas,
			'aktif'	=> 'permintaan_donasi'
		);

		$this->template->write('title', 'Tambah Permintaan Donasi - Waktu.my.id', TRUE);
		$this->template->write('header', 'Tambah Permintaan Donasi');
		$this->template->write_view('content', 'cms/donasi/tambah_donasi', $toHtml, true);

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

		$this->template->write('title', 'Permintaan Donasi Dalam Moderasi - Waktu.my.id', TRUE);
		$this->template->write('header', 'Permintaan Donasi Dalam Moderasi');
		$this->template->write_view('content', 'cms/donasi/daftar_moderasi', $toHtml, true);

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

		$this->template->write('title', 'Permintaan Donasi Di Setujui - Waktu.my.id', TRUE);
		$this->template->write('header', 'Permintaan Donasi Di Setujui');
		$this->template->write_view('content', 'cms/donasi/daftar_disetujui', $toHtml, true);

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