<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Setting extends MY_Controller {

    private $table = 'tbl_users';   
    private $className = 'Setting' ;

    function __construct(){
        parent::__construct();
        $this->load->model('Static_Page_Model','CPAGE');  
    }

    /** Show list of all Custom Pages **/
    public function Index(){  
        if($this->input->post()){
            $config = array(
                array(
                        'field' => 'data[name]',
                        'label' => 'Name',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'data[email_link]',
                        'label' => 'Email  Link',
                        'rules' => 'trim|required',						
                ),
                array(
                        'field' => 'data[linkdin_link]',
                        'label' => 'Linkdin Link',
                        'rules' => 'trim|required',						
                ),
                array(
                        'field' => 'data[facebook_link]',
                        'label' => 'Facebook Link',
                        'rules' => 'trim|required',						
                ),
                array(
                        'field' => 'data[youtube_link]',
                        'label' => 'Youtube Link',
                        'rules' => 'trim|required',						
                )
                ,
                array(
                        'field' => 'data[google_link]',
                        'label' => 'Google Link',
                        'rules' => 'trim|required',						
                )
                ,
                array(
                        'field' => 'data[twitter_link]',
                        'label' => 'Twitter Link',
                        'rules' => 'trim|required',						
                )
            );
            $this->form_validation->set_rules($config);	
            if($this->form_validation->run()===TRUE){ 
                $data = $this->security->xss_clean( $this->input->post('data') );        
                if(!empty($_POST['id'])){         
                    $uid  = base64_decode($_POST['id']) ;      
                    $data['modified_time'] =  date("Y-m-d h:i:sa");
                    $update = $this->CRUD->Update('tbl_users',array('id'=>$uid), $data);                   
                    $this->session->set_flashdata('Message','<div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> Profile info has been updated.
                  </div>');
                  redirect(current_url(),'refresh');
                }
            }
        }
       
        $userId = $this->session->userdata['user_info']['id'];
        $this->data['update'] = $this->CRUD->Result('tbl_users',array('id'=>$userId),'*','row');
        $this->data['heading'] = 'Setting';       
        $this->data['classMainName'] = $this->className;            
        $this->parser->parse('Setting/index',$this->data);
    }
    
}
