<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller
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

		$this->template->write('title', 'Daftar Video - Waktu.my.id', TRUE);
		$this->template->write('header', 'Daftar Video');
		$this->template->write_view('content', 'cms/video/daftar_video', $toHtml, true);

		$this->template->render();
	}

	public function unggah_video() {

		$datas = array(
			'ccc' => 'ccccccccc',
			'ddd', 'dddddddddd'
		);

		$toHtml = array(
			'aaa' => $datas,
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

	// function simple_template() {
	// 	$this->template->set_template('default');
	// 	$this->template->write('header', 'This is Header');
	// 	$this->template->write('title', 'My Simple Template', TRUE);
	// 	$this->template->write_view('content', 'tes/mypage', '', true);

	// 	$this->template->render();
	// }
}