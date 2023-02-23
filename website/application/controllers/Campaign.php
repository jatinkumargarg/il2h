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

    public function create_campaign() {
        echo '<pre>';print_r($_FILES);
        // print_r($this->input->post('data'));

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
        // if (empty($_FILES['camp_photo']['name']))
        // {
        //     $this->form_validation->set_rules('camp_photo', 'Document', 'required');
        // }
        // if (empty($_FILES['cv_url']['name']))
        // {
        //     $this->form_validation->set_rules('cv_url', 'Document', 'required');
        // }
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
            $data['campaign_type'] = 1;
            $camp_ques = $data['question_name'];
            unset($data['question_name']);
            $update = $this->CRUD->Insert('tbl_campaigns', $data); 
            // echo $update;die;
            if($update){             
                $q = array();
                $i = 0;
                foreach ($camp_ques as $key => $value) {
                    $q[$i]['question_name'] = $value;
                    $q[$i]['campaign_id'] = $update;
                }
                $this->CRUD->Insert('tbl_campaign_questions', $data); 
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

    


}
