<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['logout']    = 'Quiz/Logout';
$route['onsite_camp_list'] = 'Ngo/onsite_camp_list';
$route['online_camp_list'] = 'Ngo/online_camp_list';
$route['volunteer'] = 'Ngo/volunteer';
