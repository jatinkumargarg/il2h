<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller {	

	function __construct(){
		parent::__construct();		
		$this->perPage = 10;
	}
	
	public function index(){		
	
		$this->data['page_title']  = 'About Us';
		$this->load->view('about_us',$this->data);
	}

	

}
