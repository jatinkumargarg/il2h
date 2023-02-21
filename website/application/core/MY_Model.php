<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {
    protected $table;
    protected $prefix;
    protected $response = array();
    function __construct()    {
        parent::__construct();
    }


}