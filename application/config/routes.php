<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Front';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// DEF
$route['masuk']						= 'Pengguna';
$route['panel']						= 'Cms';
$route['panel/pengguna']			= 'Pengguna';
$route['panel/artikel']				= 'Artikel';
$route['panel/video']				= 'Video';
$route['panel/jadwal']				= 'Jadwal';
$route['panel/etalase']				= 'Etalase';

// MODERASI DEF 
$route['panel/moderasi']			= 'Moderasi';
$route['panel/moderasi/pengguna']	= 'Pengguna/daftar_moderasi';
$route['panel/moderasi/artikel']	= 'Artikel/daftar_moderasi';
$route['panel/moderasi/video']		= 'Video/daftar_moderasi';
$route['panel/moderasi/etalase']	= 'Etalase/daftar_moderasi';
$route['panel/moderasi/jadwal']		= 'Jadwal/daftar_moderasi';

// PENGGUNA
$route['panel/pengguna/register']	= 'Pengguna/register_pengguna';
$route['panel/pengguna/keluar']		= 'Pengguna/keluar_pengguna';
$route['panel/pengguna/profil']		= 'Pengguna/profil_pengguna';
$route['panel/pengguna/pengaturan']	= 'Pengguna/pengaturan_pengguna';


// ARTIKEL
$route['panel/artikel/daftar']		= 'Artikel';
$route['panel/artikel/tulis']		= 'Artikel/tulis_artikel';


// VIDEO
$route['panel/video/daftar']		= 'Video';
$route['panel/video/unggah']		= 'Video/unggah_video';


// ETALASE
$route['panel/etalase/daftar']		= 'Etalase/daftar_jualan';
$route['panel/etalase/tambah']		= 'Etalase/tambah_jualan';


// JADWAL
$route['panel/jadwal/daftar']		= 'Jadwal';
$route['panel/jadwal/unggah']		= 'Jadwal/tambah_jadwal';


// MDERASI
$route['panel/moderasi/pengguna/menunggu']	= 'Pengguna/daftar_moderasi';
$route['panel/moderasi/pengguna/disetujui']	= 'Pengguna/daftar_disetujui';

$route['panel/moderasi/artikel/menunggu']	= 'Artikel/daftar_moderasi';
$route['panel/moderasi/artikel/disetujui']	= 'Artikel/daftar_disetujui';

$route['panel/moderasi/video/menunggu']		= 'Video/daftar_moderasi';
$route['panel/moderasi/video/disetujui']	= 'Video/daftar_disetujui';

$route['panel/moderasi/etalase/menunggu']	= 'Etalase/daftar_moderasi';
$route['panel/moderasi/etalase/disetujui']	= 'Etalase/daftar_disetujui';

$route['panel/moderasi/jadwal/menunggu']	= 'Jadwal/daftar_moderasi';
$route['panel/moderasi/jadwal/disetujui']	= 'Jadwal/daftar_disetujui';