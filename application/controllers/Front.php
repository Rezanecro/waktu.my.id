<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		// $this->template->write_view('sidenavs', 'template/cms/default_sidenavs', true);
	}

	public function index() {

		$datas = array(
			'ccc' => 'ccccccccc',
			'ddd', 'dddddddddd'
		);

		$toHtml = array(
			'aaa' => $datas,
		);

		$this->template->set_template('pebri_front');
		$this->template->write('title', 'Assalamualaikum Selamat Datang Di Waktu.my.id', TRUE);
		$this->template->write('header', 'Assalamualaikum Selamat Datang Di Waktu.my.id');
		$this->template->write_view('content', 'front/landing', $toHtml, true);

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