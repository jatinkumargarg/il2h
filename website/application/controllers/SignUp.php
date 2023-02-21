<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUp extends CI_Controller {	

	function __construct(){
		parent::__construct();
        // if($this->session->userdata('user_info')){
        //     redirect(site_url(),'refresh');
        // }

        $this->load->model('Signup_Model','SIGNUP');
        $this->load->model('Login_Model','LOGIN');              
	}
	
	public function index($user_type = 0){			
		$this->data['page_title']  = 'Sign-Up';
        $this->data['user_type'] = $user_type;
		$this->load->view('sign_up',$this->data);
	}

    public function signup_user(){
      

        $config = array(
            array(
                    'field' => 'data[name]',
                    'label' => 'Name',
                    'rules' => 'trim|required'
            ),
            array(
                    'field' => 'data[email]',
                    'label' => 'Email',
                    'rules' => 'trim|valid_email|is_unique[tbl_users.email]',						
            ),
            array(
                    'field' => 'data[terms_condtions]',
                    'label' => 'Term & Conditions',
                    'rules' => 'trim|required',						
            ),
            array(
                    'field' => 'data[password]',
                    'label' => 'Password',
                    'rules' => 'trim|required'						
            ),
            array(
                    'field' => 'data[confirm_password]',
                    'label' => 'Confirm Password',
                    'rules' => 'trim|required|matches[data[password]]'						
            )
        );
        $this->form_validation->set_message('is_unique', 'The %s is already taken');
        $this->form_validation->set_rules($config);	
        // print_r($this->input->post());die;
        if($this->form_validation->run()){          
            $data =   $this->security->xss_clean($this->input->post('data')) ;
            $data['password'] = md5($data['password']);
            unset($data['confirm_password']);
            $insert_id = $this->CRUD->Insert('tbl_users',$data);

            $result = $this->LOGIN->_Login();
                  
            if($result['success']==1){
                $result['result']['user_session'] = session_id();                 
                $this->session->set_userdata('user_info',$result['result']);    
                $array = array(
                    'success'   => true,
                    'redirect_url' => site_url('signup-basic-details')
                );               
            }else{
                $array = array(
                    'error'   => true,
                    'error-div' => '<p>Error!, Something went wrong. Please try after sometime.'
                );               
            }
            echo json_encode($array);
            exit;  
          
        }else{
            $array = array(
                'error'   => true,
                'full_name' => form_error('data[name]'),
                'email' => form_error('data[email]'),
                'terms_condition' => form_error('data[terms_condition]'),
                'password' => form_error('data[password]'),
                'confirm_password' => form_error('data[confirm_password]')
            );
            echo json_encode($array);
            exit;
        }
      
    }
	
    public function login_view(){			
		$this->data['page_title']  = 'Login';
		$this->load->view('login',$this->data);
	}

    public function login_submit(){			
		$config = array(
            array(
                    'field' => 'data[email]',
                    'label' => 'Email',
                    'rules' => 'trim|valid_email[tbl_users.email]',						
            ),
            array(
                    'field' => 'data[password]',
                    'label' => 'Password',
                    'rules' => 'trim|required'						
            )
        );
        $this->form_validation->set_rules($config);
        if($this->form_validation->run()){    
            $result = $this->LOGIN->_Login();
            if($result['success']==1){
                $result['result']['user_session'] = session_id();                 
                $this->session->set_userdata('user_info',$result['result']);
                redirect(site_url('dashboard-ngo'));               
            } else {
                $this->session->set_flashdata('incorrent_credentials', 'Incorrect username or password!!');
                redirect(site_url('login'));               
            }
        }
	}

}
