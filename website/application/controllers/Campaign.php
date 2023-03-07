<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campaign extends MY_Controller {	
    protected $user_id, $user_type;
	function __construct(){
		parent::__construct();      
        $this->load->model('Signup_Model','SIGNUP');
        $this->load->model('Campaign_Model','Campaign_Model');
        $this->load->model('Campaign_questions','Campaign_ques');
        $this->load->model('Volunteer_request','Volunteer_request');
        $this->user_id = $this->session->userdata['user_info']['id'];
        $this->user_type = $this->session->userdata['user_info']['user_type'];
        $user_data = $this->session->userdata['user_info'];
        $this->load->vars($user_data);
        
	}
	
	public function index(){		
       
        $this->data['page_title']  = 'Create Campaign';
		$this->load->view('ngo/create_campaign',$this->data);
	}

    public function create_campaign() {
        // echo '<pre>';print_r($_FILES);
        // print_r($this->input->post('data'));die;

        $config = array(
        
            array(
                    'field' => 'data[title]',
                    'label' => 'title',
                    'rules' => 'trim|required',						
            ),
            array(
                'field' => 'data[description]',
                'label' => 'description',
                'rules' => 'trim|required',						
            ),
            array(
                'field' => 'data[mentor_id]',
                'label' => 'mentor_id',
                'rules' => 'trim|required',						
            ),
            array(
                'field' => 'data[mentor_contact_number]',
                'label' => 'mentor_contact_number',
                'rules' => 'trim|required',						
            ),
            array(
                'field' => 'data[estimated_hour]',
                'label' => 'estimated_hour',
                'rules' => 'trim|required',						
            )
        );
        $this->form_validation->set_message('is_unique', 'The %s is already taken');
        $this->form_validation->set_rules($config);	
        if($this->form_validation->run()){    
            $data =   $this->security->xss_clean($this->input->post('data')) ;
            
            //Upload Images
            $this->load->library('upload');
            $name = substr(str_replace('-','_',str_replace(' ','_',$_FILES['camp_photo']['name'] ) ),0,10).date('ymd');
            $this->upload->initialize($this->set_upload_options('./uploads/', $name));

            if ( !$this->upload->do_upload('camp_photo')) {
                // print_r($this->upload->display_errors());
                $array = array(
                    'error'   => true,
                    'error-div' => '<p>Error!, Something went wrong. Please try after sometime.'
                );               
                echo json_encode($array);
                exit;  
            }
            $data['banner_image'] = $this->upload->file_name;

            $name2 = substr(str_replace('-','_',str_replace(' ','_',$_FILES['cv_url']['name'] ) ),0,10).date('ymd');
            $this->upload->initialize($this->set_upload_options('./uploads/', $name2));
            if (!$this->upload->do_upload('cv_url')) {
                $array = array(
                    'error'   => true,
                    'error-div' => '<p>Error!, Something went wrong. Please try after sometime.'
                );               
                echo json_encode($array);
                exit;  
            }
            $data['cv_url'] = $this->upload->file_name;
            $data['user_id'] = $this->user_id;
            if ($data['camp_type'] == 'online') {
                $data['campaign_type'] = 1;
            } else {
                $data['campaign_type'] = 2;
            }
            $camp_ques = $data['question_name'];
            unset($data['question_name']);
            $update = $this->CRUD->Insert('tbl_campaigns', $data); 
            // echo $update;die;
            if($update){             
                $q = array();
                foreach ($camp_ques as $key => $value) {
                    $q['campaign_id'] = $update;
                    $q['question_name'] = $value;
                    $this->CRUD->Insert('tbl_campaign_questions', $q); 
                    unset($q['campaign_id']);
                    unset($q['question_name']);
                }
                redirect(site_url('dashboard-ngo'));   
            }else{
                $array = array(
                    'error'   => true,
                    'error-div' => '<p>Error!, Something went wrong. Please try after sometime.'
                );               
                echo json_encode($array);
                exit;  
            }
                
        } else {
            $array = array(
                'error'   => true,
                'title' => form_error('data[title]'),
                'description' => form_error('data[description]'),
                'estimated_hour' => form_error('data[estimated_hour]'),
                'cv_url' => form_error('data[cv_url]'),
                // 'camp_photo' => form_error('data[camp_photo]'),
            );
            echo json_encode($array);
            exit;
        }

    }

    function camp_details($camp_id){
        $data['value'] = $this->Campaign_Model->camp_details($camp_id);
        $application_exist = $this->Volunteer_request->is_app_exist($this->user_id, $camp_id);
        $data['app_exist'] = 0;
        if ($application_exist > 0) {
            $data['app_exist'] = 1;
        }
        $this->load->view('volunteer_online_details',$data);  
	}

    function create_volunteer_request($camp_id) {
        $data['value'] = $this->Campaign_Model->camp_details($camp_id);
        $data['camp_questions'] = $this->Campaign_ques->camp_ques($camp_id);
        // echo '<pre>';print_r($data);die;
        $this->load->view('volunteer_online_request_form',$data);  
    }

    public function vol_submit_request() {
        $config = array(
        
            array(
                'field' => 'data[description]',
                'label' => 'description',
                'rules' => 'trim|required',						
            ),
            array(
                'field' => 'data[hours_work]',
                'label' => 'hours_work',
                'rules' => 'trim|required',						
            )
        );
        $this->form_validation->set_message('is_unique', 'The %s is already taken');
        $this->form_validation->set_rules($config);	
        if($this->form_validation->run()){    
            $data =   $this->security->xss_clean($this->input->post('data')) ;
            
            //Upload Images
            $this->load->library('upload');
            $name = substr(str_replace('-','_',str_replace(' ','_',$_FILES['vol_cv']['name'] ) ),0,10).date('ymd');
            $this->upload->initialize($this->set_upload_options('./uploads/', $name));

            if ( !$this->upload->do_upload('vol_cv')) {
                $array = array(
                    'error'   => true,
                    'error-div' => '<p>Error!, Something went wrong. Please try after sometime.'
                );               
                echo json_encode($array);
                exit;  
            }
            $data['vol_cv'] = $this->upload->file_name;
            $data['status'] = 0;
            $data['user_id'] = $this->user_id;
            $data['camp_ques'] = json_encode($data['ques']);
            $update = $this->CRUD->Insert('tbl_vol_application', $data); 
            if($update){
                $this->session->set_flashdata('Message','Request sent successfully!!');
                redirect(site_url('dashboard-ngo'));   
            }else{
                $array = array(
                    'error'   => true,
                    'error-div' => '<p>Error!, Something went wrong. Please try after sometime.'
                );               
                echo json_encode($array);
                exit;  
            }
                
        } else {
            $array = array(
                'error'   => true,
                'description' => form_error('data[description]'),
                'hours_work' => form_error('data[hours_work]')
            );
            echo json_encode($array);
            exit;
        }
    }

    public function approve_vol() {
        $id = $this->uri->segment(3);
        $this->db->where('id', $id);
        $this->db->update('tbl_vol_application', array('status' => 1));
        $this->session->set_flashdata('Message', 'Volunteer approved successfully!');
        redirect(site_url('dashboard-ngo'));
    }

    public function reject_vol() {
        $id = $this->uri->segment(3);
        $this->db->where('id', $id);
        $this->db->update('tbl_vol_application', array('status' => 2));
        $this->session->set_flashdata('Message', 'Volunteer rejected successfully!');
        redirect(site_url('dashboard-ngo'));
    }

    public function shortlist_vol() {
        $id = $this->uri->segment(3);
        $this->db->where('id', $id);
        $this->db->update('tbl_vol_application', array('status' => 3));
        $this->session->set_flashdata('Message', 'Volunteer shortlisted successfully!');
        redirect(site_url('dashboard-ngo'));
    }

    public function view_vol_list() {
        $camp_id = $this->uri->segment(3);
        $this->data['vol_list'] = $this->Volunteer_request->get_vol_list($camp_id);
        $this->data['camp_data'] = $this->Campaign_Model->camp_details($camp_id);
        // print_r($this->data['camp_data']);die;
        // $res = $this->db->select('*')->where('camp_id', $camp_id)->get('tbl_vol_application')->result_array();
        $this->load->view('ngo/view_vol_list',$this->data);
    }

    public function withdraw_vol() {
        $id = $this->uri->segment(3);
        $this->db->where('id', $id);
        $this->db->update('tbl_vol_application', array('status' => 3));
        $this->session->set_flashdata('Message', 'Request withdrawn successfully!');
        redirect(site_url('dashboard-ngo'));
    }

}
