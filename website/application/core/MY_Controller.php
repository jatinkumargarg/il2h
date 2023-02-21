<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    public $data = array();           
    function __construct(){
        parent::__construct();
        header('X-Frame-Options: SAMEORIGIN');
		header("X-XSS-Protection: 1; mode=block");
        $this->_isLoggedIn();
        
    } 

    
    /**
    * Function to check Whether Current Session Id is Equal to User Login Session Id  If 
    * Not Redirect to LogoutPage
    */
    function _isLoggedIn(){        
        if(isset($this->session->userdata['user_info'])){
            if($this->session->userdata['user_info']['user_session'] != session_id()){
                $this->session->unset_userdata('user_info'); 
                redirect(site_url('logout'));
            } 
        } else {
            redirect(site_url());
        }
    }

       
  
}