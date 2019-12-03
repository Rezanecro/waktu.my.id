<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Etalase extends CI_Controller
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

		$this->template->write('title', 'Etalase Toko - Waktu.my.id', TRUE);
		$this->template->write('header', 'Etalase Toko');
		$this->template->write_view('content', 'cms/etalase/etalase', $toHtml, true);

		$this->template->render();
	}

	public function daftar_jualan() {

		$datas = array(
			'ccc' => 'ccccccccc',
			'ddd', 'dddddddddd'
		);

		$toHtml = array(
			'aaa' => $datas,
		);

		$this->template->write('title', 'Daftar Barang Jualan - Waktu.my.id', TRUE);
		$this->template->write('header', 'Daftar Barang Jualan');
		$this->template->write_view('content', 'cms/etalase/daftar_jualan', $toHtml, true);

		$this->template->render();
	}

	public function tambah_jualan() {

		$datas = array(
			'ccc' => 'ccccccccc',
			'ddd', 'dddddddddd'
		);

		$toHtml = array(
			'aaa' => $datas,
		);

		$this->template->write('title', 'Tambah Barang Jualan - Waktu.my.id', TRUE);
		$this->template->write('header', 'Tambah Barang Jualan');
		$this->template->write_view('content', 'cms/etalase/tambah_jualan', $toHtml, true);

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

		$this->template->write('title', 'Barang Jualan Dalam Moderasi - Waktu.my.id', TRUE);
		$this->template->write('header', 'Barang Jualan Dalam Moderasi');
		$this->template->write_view('content', 'cms/etalase/daftar_moderasi', $toHtml, true);

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

		$this->template->write('title', 'Barang Jualan Di Setujui - Waktu.my.id', TRUE);
		$this->template->write('header', 'Barang Jualan Di Setujui');
		$this->template->write_view('content', 'cms/etalase/daftar_disetujui', $toHtml, true);

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