<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Login_Model extends MY_Model {
	function __construct() {
        parent::__construct();
        $this->table   = 'tbl_users';
        $this->prefix  = 'user_';
        $this->response['success'] = 0;
    }

/* 	@Function to Make Login into Dispute Management Panel..@Param holds data to check values...*/	
	function _Login(){ 
		$data = $this->security->xss_clean($this->input->post('data'));

		$res = $this->db->query("SELECT * FROM tbl_users WHERE email = '".$data['email']."' AND password = '".md5($data['password'])."' AND status = '1'")->row_array();

		if(is_array($res)){
			$result = $res;
			$this->response['result'] =  $result;	
			$this->response['success'] = 1;
			$this->response['message'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                              <strong>Success!</strong> Congratulations You are successfully logged into Panel.
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>';	
			}else{
				$this->response['message'] = '<div class="alert alert-danger">email Or Password is Invalid.</div> ';	
			}
		return $this->response;		
	}
	
	function checkUserExist($mobile) {
		$data = $this->security->xss_clean($this->input->post('mobile_number'));

		$res = $this->db->query("SELECT * FROM tbl_users WHERE official_contact_number = '".$data."'")->row_array();
		if ($res) {
			$temp_pass = rand(10000,99999);
			$this->CRUD->Update('tbl_users',array('id'=>$res['id']), ['otp'=>$temp_pass]); 
			return true;
		} else {
			return false;
		}
		return false;
	}


}