<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {	
    protected $user_id, $user_type;
	function __construct(){
		parent::__construct();      
        $this->load->model('Signup_Model','SIGNUP');
        $this->load->model('Campaign_Model','Campaign');
        $this->load->model('Volunteer_request','Volunteer_request');
        $this->user_id = $this->session->userdata['user_info']['id'];
        $this->user_type = $this->session->userdata['user_info']['user_type'];
        $user_data = $this->session->userdata['user_info'];
        // $user_data['user_type'] = $this->user_type;
        $this->load->vars($user_data);
        
	}
	
	public function index(){		
       
        $res= $this->db->query("SELECT basic_info_status FROM tbl_users WHERE id='".$this->user_id."'")->row_array();
      
        if($res['basic_info_status'] != 0){
            redirect(site_url());
        }
		$this->data['page_title']  = 'Basic Details';
		$this->load->view('user_basic_details',$this->data);
	}

    /** Submit Basic Information */

    public function submit_basic_information(){
        $config = array(
        
            array(
                    'field' => 'data[contact_email]',
                    'label' => 'Email',
                    'rules' => 'trim|valid_email|is_unique[tbl_users.contact_email]',						
            ),
            array(
                'field' => 'data[offiicial_contact_number]',
                'label' => 'Mobile Number',
                'rules' => 'trim|required|regex_match[/^[0-9]{10}$/]'						
            ),
            array(
                'field' => 'data[contact_number]',
                'label' => 'Mobile Number',
                'rules' => 'trim|required|regex_match[/^[0-9]{10}$/]'						
            )
        );
        $this->form_validation->set_message('is_unique', 'The %s is already taken');
        $this->form_validation->set_rules($config);	
        if($this->form_validation->run()){          
            // die('hh');
            $data =   $this->security->xss_clean($this->input->post('data')) ;
            $data['basic_info_status'] = 1;
            $update = $this->CRUD->Update('tbl_users',array('id'=>$this->user_id), $data); 

            // $result = $this->LOGIN->_Login();
            // if($result['success']==1){
            //     $result['result']['user_session'] = session_id();                 
            //     $this->session->set_userdata('user_info',$result['result']);    
            //     $array = array(
            //         'success'   => true,
            //         'redirect_url' => site_url('signup-upload')
            //     );               
            // }else{
            //     $array = array(
            //         'error'   => true,
            //         'error-div' => '<p>Error!, Something went wrong. Please try after sometime.'
            //     );               
            // }
            if($update == 1){              
                $array = array(
                    'success'   => true,
                    'redirect_url' => site_url('signup-upload')
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
     /** Submit Basic Information */

    public function upload_doc_view(){
        // die('ere');
        $res= $this->db->query("SELECT basic_info_status FROM tbl_users WHERE id='".$this->user_id."'")->row_array();
      
        if($res['basic_info_status'] != 1){
            redirect(site_url());
        }
        // Read new token and assing in $data['token']
        // $data['token'] = $this->security->get_csrf_hash();
		
        $this->data['page_title']  = 'Basic Details';
		$this->load->view('onboarding_upload_doc',$this->data);
    }
    
    public function submit_upload_doc(){
        
        // print_r($this->input->post('data'));
        // echo '<pre>';print_r($_FILES['user_doc']);die;
        $config = array(
        
            array(
                    'field' => 'data[doc_type]',
                    'label' => 'doc_type',
                    'rules' => 'trim|required',						
            )
        );
        $this->form_validation->set_rules($config);	
        if (empty($_FILES['data']['name']['user_doc']))
        {
            $this->form_validation->set_rules("['data']['name']['user_doc']", 'Document', 'required');
        }
        if($this->form_validation->run()){          
            $data =   $this->security->xss_clean($this->input->post('data')) ;
            $data['basic_info_status'] = 2;
            $config1['upload_path']   = './uploads/';
            $config1['allowed_types'] = 'gif|jpg|png'; 
            $config1['max_size']      = 5000; 
            $this->load->library('upload', $config1);

            if ( ! $this->upload->do_upload('user_doc')) {
                $array = array(
                    'error'   => true,
                    'error-div' => '<p>Error!, Something went wrong. Please try after sometime.'
                );               
                echo json_encode($array);
                exit;  
            } else {
                $data['document'] = $_FILES['user_doc']['name'];
                // unset($data['name']);
                $update = $this->CRUD->Update('tbl_users',array('id'=>$this->user_id), $data); 
                // die('here');
                if($update == 1){             
                    redirect(site_url('dashboard-ngo'));
                }else{
                    $array = array(
                        'error'   => true,
                        'error-div' => '<p>Error!, Something went wrong. Please try after sometime.'
                    );               
                    echo json_encode($array);
                    exit;  
                }
            }
                    
        }else{
            $array = array(
                'error'   => true,
                'doc_type' => form_error('data[doc_type]'),
                'user_doc' => form_error('user_doc')
            );
            echo json_encode($array);
            exit;
        }
    }

    public function dashboard_ngo() {		
        if(! $this->session->userdata['user_info']['id']){
            $this->load->view('login'); }
        else {
            $res = $this->db->select('*')->where('user_type', 3)->get('tbl_users')->result_array();
            $this->data['camp_online_published'] = $this->Campaign->get_all_campaigns(1, 1);
            $this->data['camp_onsite_published'] = $this->Campaign->get_all_campaigns(2, 1);
            $this->data['camp_online_verify'] = $this->Campaign->get_all_campaigns(1, 0);
            $this->data['camp_onsite_verify'] = $this->Campaign->get_all_campaigns(2, 0);
            // print_r($res);die;
            $this->data['page_title']  = 'Dashboard';
            if($this->session->userdata['user_info']['user_type'] == 3){
                $this->data['online_vol_request'] = $this->Volunteer_request->get_vol_request($this->user_id, 1);
                $this->data['onsite_vol_request'] = $this->Volunteer_request->get_vol_request($this->user_id, 2);
                $this->load->view('dashboard_ngo',$this->data);
            } else {
                $this->data['camp_online_all'] = $this->Campaign->get_all_camps_for_val(1);
                // echo '<pre>';print_r($this->data['camp_online_all']);die;
                $this->data['camp_onsite_all'] = $this->Campaign->get_all_camps_for_val(2);
                $this->load->view('dashboard_vol',$this->data);
            }

        }
	}
   
    function Logout(){    
        $result = $this->SIGNUP->_DestrorySession($this->session->userdata['user_info']['id']);
        $this->session->set_flashdata('message', 'Logged out successfully!!!');
        $this->session->unset_userdata('user_info');		
        redirect(site_url());
    }


}
