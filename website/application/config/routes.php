<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Homepage';

$route['about-us'] = 'About_us';
$route['are-you-a-volunteer'] = 'AreYouAVolunteer';

/** With Login Session */
$route['signup-basic-details'] ='User';
$route['signup-upload'] ='User/upload_doc_view';
$route['submit-upload'] ='User/submit_upload_doc';
$route['dashboard-ngo'] ='User/dashboard_ngo';
$route['logout'] ='User/Logout';
$route['create-campaign'] ='Campaign';
$route['camp-details/(:any)'] = 'Campaign/camp_details/$1';
$route['volunteer-request/(:any)'] = 'Campaign/create_volunteer_request/$1';
$route['Campaign/create_campaign'] = 'Campaign/create_campaign';


/** Without login session */
$route['sign-up/(:any)'] = 'SignUp/index/$1';
$route['login'] ='SignUp/login_view';
$route['login_submit'] ='SignUp/login_submit';
$route['forgot_password'] ='SignUp/forgot_password';

$route['404_override'] = 'Homepage/override_404';
$route['translate_uri_dashes'] = FALSE;
$route['search-campaign'] = 'Homepage/searchCampaignView';


require_once (FCPATH.ADMINPATH.'/application/cache/routes.php');

