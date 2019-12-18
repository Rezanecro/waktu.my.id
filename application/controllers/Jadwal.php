<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller
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

		$this->template->write('title', 'Daftar Jadwal Kajian - Waktu.my.id', TRUE);
		$this->template->write('header', 'Daftar Jadwal Kajian');
		$this->template->write_view('content', 'cms/jadwal/daftar_jadwal', $toHtml, true);

		$this->template->render();
	}

	public function tambah_jadwal() {

		$datas = array(
			'ccc' => 'ccccccccc',
			'ddd', 'dddddddddd'
		);

		$toHtml = array(
			'aaa' 	=> $datas,
			'aktif'	=> 'tambah_jadwal'
		);

		$this->template->write('title', 'Tambah Jadwal Kajian - Waktu.my.id', TRUE);
		$this->template->write('header', 'Tambah Jadwal Kajian');
		$this->template->write_view('content', 'cms/jadwal/tambah_jadwal', $toHtml, true);

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

		$this->template->write('title', 'Jadwal Kajian Dalam Moderasi - Waktu.my.id', TRUE);
		$this->template->write('header', 'Jadwal Kajian Dalam Moderasi');
		$this->template->write_view('content', 'cms/jadwal/daftar_moderasi', $toHtml, true);

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

		$this->template->write('title', 'Jadwal Kajian Di Setujui - Waktu.my.id', TRUE);
		$this->template->write('header', 'Jadwal Kajian Di Setujui');
		$this->template->write_view('content', 'cms/jadwal/daftar_disetujui', $toHtml, true);

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
