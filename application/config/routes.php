<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------

|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Depan';
$route['home'] = 'Depan';
$route['registrasi'] = 'Depan/registrasi';
$route['pengaduan'] = 'Depan/pengaduan';
$route['registproses'] = 'Depan/registProses';
$route['laporproses'] = 'Pengaduan/postingan';
$route['lapor'] = 'Depan/lapor';
$route['laporan'] = 'Depan/laporan';
$route['login'] = 'Login';
$route['loginproses'] = 'Login/cekLogin';
$route['logout'] = 'Login/logout';
$route['profil'] = 'Login/userMasuk';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
