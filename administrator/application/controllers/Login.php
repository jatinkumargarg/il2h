<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public $response = array('message'=>'','response'=>0);
 
	function __construct(){
		parent::__construct();
        if($this->session->userdata('user_info')){
            redirect(site_url('Blogs'),'refresh');
        }
        $this->load->model('Login_Model','LOGIN');       
	}
	
    function index(){
        $this->data['title'] = 'Dis&Dat | Login'; // Page Title
		if($this->input->post()){  
			
		
			$config = array(
				array(
						'field' => 'data[email]',
						'label' => 'Username',
						'rules' => 'required|valid_email'
				),
				array(
						'field' => 'data[password]',
						'label' => 'Password',
						'rules' => 'required',						
				)
			);		
			$this->form_validation->set_rules($config);
	
            if($this->form_validation->run()===TRUE ){          
               $result = $this->LOGIN->_Login();
                $this->session->set_flashdata('Message',$result['message']);
                if($result['success']==1){
                    $result['result']['user_session'] = session_id();                 
                    $this->session->set_userdata('user_info',$result['result']);
					redirect(site_url('Dashboard'),'refresh');                          
                }
            }
        }
        $this->load->view('login',$this->data);  
	}

	
	function error_404(){
		$this->load->view('errors/error_404');
	}

}