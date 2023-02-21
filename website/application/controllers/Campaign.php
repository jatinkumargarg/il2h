<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campaign extends MY_Controller {	
    protected $user_id, $user_type;
	function __construct(){
		parent::__construct();      
        $this->load->model('Signup_Model','SIGNUP');
        $this->user_id = $this->session->userdata['user_info']['id'];
        $this->user_type = $this->session->userdata['user_info']['user_type'];
        $user_data = $this->session->userdata['user_info'];
        $this->load->vars($user_data);
        
	}
	
	public function index(){		
       
        $this->data['page_title']  = 'Create Campaign';
		$this->load->view('ngo/create_campaign',$this->data);
	}

    


}
