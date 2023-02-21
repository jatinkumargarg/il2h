<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard_Model extends MY_Model {
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

	public function countRecords($table,$groupBy ='id'){
		return $this->db->select("`id`")
						->from($table)	
						->group_by($groupBy) 					  
						->get()  
						->num_rows();
	}

	/** Number of visit today */
	function get_chart_data_top_five_answers() {
		$query = $this->db->query('SELECT count(user_id) as users, quiz_id , name
				FROM tbl_answers 
				INNER JOIN tbl_options 
				ON tbl_answers.answer_id = tbl_options.id
				GROUP BY answer_id limit 5');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
	}

	/** Number of visit today */
	function get_chart_data_for_quiz_per_user() {
        $query = $this->db->query('SELECT count( DISTINCT user_id) as users, quiz_id , title
                FROM tbl_answers 
				INNER JOIN tbl_quiz 
				ON tbl_answers.quiz_id = tbl_quiz.id
                GROUP BY quiz_id');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
	}
	
	function get_datatables($cond)
	{       
		$this->_get_datatables_query($cond);
			
		if(isset($_POST['length']) && $_POST['length'] != -1)
		{
			$this->db->limit($_POST['length'], $_POST['start']);
		}	
		
		$query = $this->db->get();	
		
		return $query->result();
	
	}
	function recordTable($cond)
	{
		  $this->_get_datatables_query($cond);
		  $query = $this->db->get();		
		  return $query->num_rows();
	}

	private function _get_datatables_query($cond)
	  {
		
	    $search_column = array('`requested_url`','`page_name`','`page_name`'); 
     	
		$this->db->select("SUM(no_of_visits) as visits,requested_url,page_name")
					->from('site_log'); 
		 $i =0; 	
			foreach ($search_column as $item) 
			{
				if($_POST['search']['value'])
					($i===0) ? $this->db->like($item, $_POST['search']['value']) : $this->db->or_like($item, $_POST['search']['value']);
				$column[$i] = $item;
				$i++;
			}
		$this->db->group_by('requested_url');
		
		if(isset($_POST['order']))
		{
		$this->db->order_by($column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}		
		
	}

	public function fetchUserList(){
		$query = $this->db->query('SELECT  user_id, min(tbl_answers.created_at) as created_at , quiz_id , title
                FROM tbl_answers 
				INNER JOIN tbl_quiz 
				ON tbl_answers.quiz_id = tbl_quiz.id
                GROUP BY user_id');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return NULL;
	}

}