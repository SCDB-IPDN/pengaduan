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
$route['lapor'] = 'Depan/lapor';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
