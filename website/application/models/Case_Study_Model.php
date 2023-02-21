<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Case_Study_Model extends CI_Model {
	function __construct() {
        parent::__construct();
        
    }
	

    public function viewSingleCaseStudy($condition){
      
        return  $this->db->select('cm.username,cm.email_id,cm.post_comment,ps.post_title,cm.created_time')
                        ->from('tbl_post AS ps')
                        ->join('tbl_post_comment AS cm','cm.`post_id` = ps.`id`','inner')
                        ->where($condition)
                        ->get()
                        ->result_array();
        
    }
}