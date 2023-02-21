<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Crud_Model extends MY_Model { 
	function __construct() {
        parent::__construct();
        $this->response['success'] = 0;
        $this->prefix  = 'user_';
    }
    function Result($table , $where , $select, $res = 'array',$orderBy = 'id'){        
        $result = $this->db->select($select);
        if(!empty($where)){
                    $result->where($where);
                }
        if($orderBy != 'id'){
            $result->order_by($orderBy, 'DESC');
        }else{
            $result->order_by($orderBy, 'DESC');
        }       
                   
    	if($res =='array'){    	
            $result=$result->get($table)
                    ->result_array();
    	}else{
            $result= $result->get($table)
                            ->row_array();
    	} 	
        return $result;
    }

    function Insert($table, $data){
    	$this->db->insert($table, $data);
		return $this->db->insert_id();
    }

    function Update($table, $where = array(), $data ){
    	$this->db->where($where)->update($table,$data); 
    	return $this->db->affected_rows();
    }

    function Delete($table, $where = array() ){
        $this->db->where($where)->delete($table); 
        return $this->db->affected_rows();
    }

    /**
     * 
     */
    public function fetchPosList($cond){
       return $this->db->select("tp.`id`,tp.`title`,tp.`description`,tp.`status`,DATE_FORMAT(date(tp.`created_at`), '%d-%m-%Y') AS created,tu.`name`")
                ->from('tbl_quiz AS tp')
                ->join('tbl_users as tu','tp.`created_by` = tu.`id`','inner')
                ->where($cond)
                ->order_by('tp.`created_at`', 'DESC')
                ->get()
                ->result_array();

    }

  
    function _DestrorySession($id){
		$this->db->where(array('id'=>$id))->update('tbl_users',array($this->prefix.'session'=> ''));
		if($this->db->affected_rows()){
			$this->response['success'] = 1;
			$this->response['message'] = '<div class="alert alert-success">Congratulations!! You have successfully logged out from Reform Through Education Admin Panel.</div> ';
			return $this->response;
		} else {
			$this->response['message'] = "<div class='alert alert-danger'>Some Error Occured While Destroying Current Login Session!! Please Try Again!!</div>";
		}	
	}

    public function fetchUserAnswers($condtion=[]){
        $query = $this->db->query('SELECT  user_id,heading
        FROM tbl_questions 
        LEFT JOIN tbl_answers 
        ON tbl_answers.quiz_id = tbl_quiz.id
        GROUP BY quiz_id');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
    }
}

