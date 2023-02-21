<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AreYouAVolunteer extends MY_Controller {	

	function __construct(){
		parent::__construct();		
		$this->perPage = 10;
	}
	
	public function index(){		
	
		$this->data['page_title']  = 'Are you a Volunteer?';
		$this->load->view('are_you_a_volunteer',$this->data);
	}

	

}
