<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Quiz_Model extends MY_Model {
	function __construct() {
        parent::__construct();
        $this->table   = 'tbl_quiz';
        $this->prefix  = 'post_';
        $this->response['success'] = 0;
    }
	

}