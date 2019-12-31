<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->template->write_view('sidenavs', 'template/cms/default_sidenavs', true);
		$this->template->write_view('navs', 'template/cms/default_topnavs.php', true);

		$this->load->library('session');

		$this->load->model('Pengguna_Model');
		$this->load->model('Email_Model');
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

		$this->sesi_check();

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

		$this->sesi_check();

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

		$this->sesi_check();

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

		$this->sesi_check();

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

	public function keluar_pengguna()
	{
		$this->session->sess_destroy();

		redirect(base_url('masuk'));
	}

	// WEB
	public function email_validasi()
	{
		$pesan = '';

		if($this->input->get('token') != '') {

			$kode = $this->input->get('token');

			// pengecekan kode = token yang diterima user
			$check_kode = $this->Email_Model->check_token_validasi($kode);
			if(count($check_kode) > 0) {
				foreach ($check_kode as $key => $val) {
					if($val->stat == 'belum') {

						// jika status validasinya belum, maka di cek kode terakhir yang diterima oleh email dengan kode yang diterima
						$last_kode = $this->Email_Model->last_kode($val->email);
						if(count($last_kode) > 0) {
							foreach ($last_kode as $keyLc => $valLc) {

								// jika kode sama dengan kode terakhir request dari database sama
								if($kode == $valLc->kode) {

									// ubah satatus validasi menjadi sudah
									$up_verifikasi = $this->Email_Model->update_status_verifikasi($valLc->email, $valLc->kode);
									if($up_verifikasi) {
										// ubah status pengguna menjadi aktif
										$up_pengguna = $this->Pengguna_Model->update_status_pengguna($valLc->email);
										if($up_pengguna) {
											$pesan = 'Validasi email berhasil';
										} else {
											$pesan = 'Validasi pengguna gagal';
										}										
									} else {
										$pesan = 'Validasi email gagal';
									}
								} else {
									$pesan = 'Link validasi tidak cocok';
								}
							}
						} else {
							$pesan = 'Email tidak ditemukan';
						}
					} else {
						$pesan = 'Link kadaluarsa';
					}
				}

			} else {
				$pesan = 'Link tidak valid';
			}
		} else {
			redirect(base_url('register'));
		}

		$toHtml = array(
			'pesan' => $pesan,
		);

		$this->template->set_template('non_pebri_cms');
		$this->template->write('title', 'Validasi Email - Waktu.my.id', TRUE);
		$this->template->write('header', 'Validasi Email');
		$this->template->write_view('content', 'cms/pengguna/validasi_email', $toHtml, true);

		$this->template->render();
	}

	// AJAX

	public function Ajax_RegisterPengguna() { 

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
					$kode_verifikasi = date('YmdHis').rand(0000,9999);

					$simpan_verifikasi = $this->Email_Model->simpan_verifikasi($emaiUserTxt, $kode_verifikasi);
					if($simpan_verifikasi) {

						$subyek = 'Verifikasi akun Waktu.my.id '.$kode_verifikasi;
						$email = "Berikut adalah link untuk verifikasi email. <br><br> <a href='".base_url('panel/email/validasi?token='.$kode_verifikasi)."'>".base_url('panel/email/validasi?token='.$kode_verifikasi)."</a>";

						$kirim_email = $this->Email_Model->send_email($emaiUserTxt, $subyek, $email);
						if($kirim_email) {
							$kode = 200;
							$msg = 'Masuk ke email anda dan lakukan verifikasi!';
						} else {
							$kode = 404;
							$msg = 'Gagal simpan data email!';
						}

					} else {
						$kode = 404;
						$msg = 'Gagal simpan data verifikasi!';
					}
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
			$check_masuk = $this->Pengguna_Model->check_masuk_pengguna($emaiUserTxt, md5($passwordUserTxt));
			if(count($check_masuk) > 0) {

				foreach ($check_masuk as $key => $val) {
					if($val->stat == 'tunggu') {
						$kode = 404;
						$msg = 'Anda belum terverifikasi oleh moderator';
					} elseif($val->stat == 'blok') {
						$kode = 404;
						$msg = 'Akun Anda diblokir';
					} elseif($val->stat == 'hapus') {
						$kode = 404;
						$msg = 'Akun Anda sudah dihapus';
					} else {
						$sess_array = array(
							'id' 	=> $val->id,
							'nama' 	=> $val->nama,
							'email' => $val->email,
							'avatar'=> $val->avatar,
						);

						$this->session->set_userdata($sess_array);

						$kode = 200;
						$msg = 'Berhasil';
					}
				}

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