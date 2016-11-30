<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['ronald'] = 'hallo_ronald';

//BAGIAN LATIH 6===========================================================================
$route['biodata'] = 'biodata_ronald'; //berisi informasi biofata
$route['ukmku'] = 'ukm_ronald';  //berisi informasi ukm sesuai tugas mid
$route['pengalaman'] = 'cerita_ronald'; //berisi pengalaman anda saat mengerjakan tugaas ini

$route['filmanak'] = 'film_anak';    //film anak-anak
$route['filmfantasi'] = 'film_fantasi';    //=film fantasi
$route['filmhorror'] = 'film_horror';    //=film fantasi
$route['filmthriller'] = 'film_thriller';    //=film fantasi
$route['filmmotivasi'] = 'film__motivasi';    //=film fantasi
$route['buatfilm'] = 'buat_film';    //=film fantasi
$route['belajaredit'] = 'belajar_adobe_premiere';    //=film fantasi
$route['downloadfilm'] = 'download_film';    //download filem
//=========================================================================================



$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
