<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends MY_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Dashboard_Model','DASHBOARD');  
    }

    /** Dashboard Panel **/
    public function Index(){  
        $this->data['heading'] = ' Dashboard';
        $this->data['users_count'] = 0 ; 
        $this->data['question_count'] = 0; 
        $this->data['quiz_count'] = 0;     
        $this->data['user_list'] = [];

        $this->parser->parse('Dashboard/index',$this->data);
    }
    
    /** Funtion to logout from the panel **/
    function Logout(){    
        $result = $this->DASHBOARD->_DestrorySession($this->session->userdata['user_info']['id']);
        $this->session->set_flashdata('Message',$result['message']);
        $this->session->unset_userdata('user_info');		
        redirect(site_url());
    }

    function uploadCkEditorImage(){
        $this->fileUploadCkEditor();
    }

    public function drawTopFiveAnswers(){
        $data =  [];
        echo json_encode($data);
        exit;
    }

    public function drawUserPerQuiz(){
     
        $data =  [];
        echo json_encode($data);
        exit;
    }

    public function pageVisitList(){        
        $output = [];
        echo json_encode($output);
        exit;
    }
}
