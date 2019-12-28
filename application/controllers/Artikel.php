<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller
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

		$this->template->write('title', 'Daftar Artikel - Waktu.my.id', TRUE);
		$this->template->write('header', 'Daftar Artikel');
		$this->template->write_view('content', 'cms/artikel/daftar_artikel', $toHtml, true);

		$this->template->render();
	}

	public function tulis_artikel() {

		//SESSION
		$userToken = md5(date('YmdHis')); // << nanti ini session toke dari hasil login

		$toHtml = array(
			'aktif'	=> 'tulis_artikel',
			'token'	=> $userToken,
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

	public function Ajax_TulisArtikel() {

		$artikelTxt = $this->input->post('artikelTxt');
		$judulTxt = $this->input->post('judulTxt');
		$category = $this->input->post('categorySelect');
		$subCategory = $this->input->post('subCategorySelect');
		$TagTxt = $this->input->post('TagTxt');
		$thumbnail = $_FILES;

		$data = array(
			'artikel' => $artikelTxt,
			'judul' => $judulTxt,
			'kategori' => $category,
			'sub-kategori' => $subCategory,
			'tag' => $TagTxt,
			'thumbnail' => $thumbnail
		);

		print_r($data);
		
	}

	// function simple_template() {
	// 	$this->template->set_template('default');
	// 	$this->template->write('header', 'This is Header');
	// 	$this->template->write('title', 'My Simple Template', TRUE);
	// 	$this->template->write_view('content', 'tes/mypage', '', true);

	// 	$this->template->render();
	// }
}
