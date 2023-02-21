<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Signup_Model extends MY_Model {
	function __construct() {
        parent::__construct();
        $this->table   = 'tbl_users';
        $this->prefix  = 'user_';
        $this->response['success'] = 0;
        
    }
	
    
    /* 	@Function to Destroy Current Session..	@Param holds Admin Id to Update Session Values..*/	
	function _DestrorySession($id){
		$this->db->where(array('id'=>$id))->update($this->table,array($this->prefix.'session'=> ''));
		if($this->db->affected_rows()){
			$this->response['success'] = 1;
			$this->response['message'] = '<div class="alert alert-success">Congratulations!! You have successfully logged out from Reform Through Education Admin Panel.</div> ';
			return $this->response;
		} else {
			$this->response['message'] = "<div class='alert alert-danger'>Some Error Occured While Destroying Current Login Session!! Please Try Again!!</div>";
		}	
	}

}