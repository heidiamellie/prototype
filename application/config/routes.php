<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['percobaan']='welcome/coba';
$route['percobaandua'] = 'percobaan/dua';

$route['percobaantiga/(:any)'] = 'percobaan/tiga/$1';
$route['percobaanempat/(:any)/(:any)'] = 'percobaan/empat/$1/$2';
$route['template'] = 'percobaan/lima';
