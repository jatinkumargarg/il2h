<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$protocol = is_https() ? "https://" : "http://";
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'].'/' : "";
 $folder = "administrator/";
$config['base_url'] = $protocol.$host.$folder;

$config['index_page'] = '';

$config['uri_protocol']	= 'REQUEST_URI';


$config['url_suffix'] = '';


$config['language']	= 'english';

$config['charset'] = 'UTF-8';

$config['enable_hooks'] = FALSE;

$config['subclass_prefix'] = 'MY_';

$config['composer_autoload'] = FALSE;

$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-@\=';

$config['enable_query_strings'] = FALSE;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';

$config['allow_get_array'] = TRUE;

$config['log_threshold'] = 0;

$config['log_path'] = '';

$config['log_file_extension'] = '';

$config['log_file_permissions'] = 0644;

$config['log_date_format'] = 'Y-m-d H:i:s';

$config['error_views_path'] = '';

$config['cache_path'] = '';

$config['cache_query_string'] = FALSE;

$config['encryption_key'] = '';

$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'ci_session';
$config['sess_expiration'] = 3600;
$config['sess_save_path'] = APPPATH . 'cache/session/';
$config['sess_match_ip'] = FALSE;
$config['sess_time_to_update'] = 0;
$config['sess_regenerate_destroy'] = FALSE;

$config['cookie_prefix']	= '';
$config['cookie_domain']	= '';
$config['cookie_path']		= '/';
$config['cookie_secure']	= FALSE;
$config['cookie_httponly'] 	= FALSE;

$config['standardize_newlines'] = FALSE;

$config['global_xss_filtering'] = FALSE;

$config['csrf_protection'] = TRUE;
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200;
$config['csrf_regenerate'] = FALSE;
$config['csrf_exclude_uris'] = array('Static_page/fileUploadSummernote','Dashboard/drawUserPerQuiz','Dashboard/drawTopFiveAnswers');

$config['compress_output'] = FALSE;

$config['time_reference'] = 'local';


$config['rewrite_short_tags'] = FALSE;

$config['proxy_ips'] = '';
