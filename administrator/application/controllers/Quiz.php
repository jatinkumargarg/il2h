<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Quiz extends MY_Controller {

    private $table = 'tbl_quiz';
    private $type = 'quiz';
    private $className = 'Quiz' ;

    function __construct(){
        parent::__construct();
        $this->load->model('Quiz_Model','QUIZ');  
    }

    /** Show list of all blogs **/
    public function Index(){        
        $this->data['heading'] = 'Quiz';
        $this->data['classMainName'] = $this->className;
        $this->data['button_text'] = 'Add New Quiz'; 
        $condition = array();
        $this->data['pageList'] = $this->CRUD->fetchPosList($condition);      
        $this->parser->parse('Quiz/index',$this->data);
    }
    
    /** Add New Blog */
    public function Add_New(){
        if($this->input->post()){
            $this->insertUpdate($_POST,$this->table,$this->className,$this->type);
        }
        $this->data['heading'] = 'Add New Quiz';       
        $this->data['previousLink'] = $this->className;
        $this->data['previousName'] = 'Quiz List';
        $this->data['pageType'] = $this->type;             
        $this->parser->parse('Quiz/add',$this->data);
    }

    /** Edit Blog */
    public function edit_post($id){
        if($this->input->post()){
            $this->insertUpdate($_POST,$this->table,$this->className,$this->type);
        }
        $postId = base64_decode($id);
        $this->data['update'] = $this->CRUD->Result($this->table,array('id'=>$postId),'*','row');
        
        
        $this->data['heading'] = 'Edit Quiz';
        $this->data['previousLink'] = $this->className;
        $this->data['previousName'] = 'Quiz List';      
        $this->parser->parse('Quiz/add',$this->data);
    }
   
    
       /** Funtion to logout from the panel **/
       function Logout(){    
        $result = $this->CRUD->_DestrorySession($this->session->userdata['user_info']['id']);
        $this->session->set_flashdata('Message',$result['message']);
        $this->session->unset_userdata('user_info');		
        redirect(site_url());
    }
}
