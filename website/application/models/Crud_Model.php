<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Crud_Model extends CI_Model { 
	function __construct() {
        parent::__construct();
     
    }
    function Result($table , $where , $select, $res = 'array',$orderBy = 'id',$params=array()){
        
        $result = $this->db->select($select);
        if(!empty($where)){
                    $result->where($where);
                }
        $result->order_by($orderBy, 'ASC');

        if(array_key_exists("limit",$params)){ 
            $this->db->limit($params['limit']); 
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

    function stateResult($table , $where , $select, $res = 'array',$orderBy = 'id'){
        
        $result = $this->db->select($select);
        $result->where('country_id = (Select id FROM countries WHERE name = "'.$where.'")');

        $result->order_by($orderBy, 'ASC');
           
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

     /**  Get Post with Pagination*/
     function getRows($params = array(),$table){ 
        $this->db->select('ps.*,ur.name'); 
        $this->db->from('tbl_post AS ps'); 
        $this->db->join('tbl_users ur' ,'ps.created_by = ur.id'); 
        if(array_key_exists("where", $params)){ 
            foreach($params['where'] as $key => $val){ 
                $this->db->where($key, $val); 
            } 
        } 
         
        if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){ 
            $result = $this->db->count_all_results(); 
        }else{ 
            if(array_key_exists("id", $params) || (array_key_exists("returnType", $params) && $params['returnType'] == 'single')){ 
                if(!empty($params['id'])){ 
                    $this->db->where('id', $params['id']); 
                } 
                $query = $this->db->get(); 
                $result = $query->row_array(); 
            }else{ 
                $this->db->order_by('`created_time`', 'DESC'); 
                if(array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                    $this->db->limit($params['limit'],$params['start']); 
                }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                    $this->db->limit($params['limit']); 
                } 
                 
                $query = $this->db->get(); 
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE; 
            } 
        } 
         
        // Return fetched data 
        return $result; 
    }     

    public function selectColumns($condtion){
          return  $this->db->select("tm.`id`,tm.`parent_id`,tm.`menu_name`,tm.`menu_link`, IF (tm.`menu_type` = 'live_link',tm.`menu_link`, (SELECT post_slug FROM tbl_post WHERE id = tm.menu_link) ) AS menu_link")
          ->from('tbl_menu AS tm')
          ->join('tbl_menu as tms','tm.`parent_id` = tms.`id`','LEFT')
          ->where($condtion)
			  ->order_by('tm.order_number ASC')
          ->get();
    }

    public function create_menu($condtion = array('tm.status' => '1','tm.menu_list_id'=>'1') ) {
        $query = $this->selectColumns($condtion);

        $cat = array(
            'items' => array(),
            'parents' => array()
        );      
        foreach ($query->result() as $cats) {           
            $cat['items'][$cats->id] = $cats;          
            $cat['parents'][$cats->parent_id][] = $cats->id;
        }
        if ($cat) {
            if($condtion['tm.menu_list_id'] == '1'){
                $result = $this->build_menu(0, $cat);
            }else{
                $result = $this->build_footer_menu(0, $cat);
            }
           
            return $result;
        } else {
            return FALSE;
        }
    }

    // Menu builder function, parentId 0 is the root
    function build_menu($parent, $menu) {
        $current_classname =  $this->uri->segment(1) ;
        $html = "";
        if (isset($menu['parents'][$parent])) {           
            foreach ($menu['parents'][$parent] as $itemId) {
                $active = "";
                if( ($menu['items'][$itemId]->menu_link == $current_classname) ){
                    $active = "active";
                }
                if (!isset($menu['parents'][$itemId])) {
                    $pagelink = site_url($menu['items'][$itemId]->menu_link);
                    if($menu['items'][$itemId]->menu_link == '/'){
                        $pagelink = site_url();
                        $active = "active";
                    }
                    $html .= "<li class='$active'><a href='" .$pagelink. "'>" . $menu['items'][$itemId]->menu_name . "</a></li>";
                }
                if (isset($menu['parents'][$itemId])) {
                    $html .= "<li class='collapsed position-relative' data-target='#abc".$menu['items'][$itemId]->id."' data-toggle='collapse'><a class='arrow' >" . $menu['items'][$itemId]->menu_name . "</a>";
                    $html .= "<ul class='sub-menu collapse' id='abc".$menu['items'][$itemId]->id."' >";
                    $html .= $this->build_menu($itemId, $menu);
                    $html .= "</li>";
                    $html .= "</ul>";
                }
            }           
        }
        return $html;
    }

    // Menu builder function, parentId 0 is the root
    function build_footer_menu($parent, $menu) {
        $current_classname =  $this->uri->segment(1) ;
        $class = ' ';
        $counter = 1;
        $html = "";
        if (isset($menu['parents'][$parent])) {           
            foreach ($menu['parents'][$parent] as $itemId) {
                if( $counter >'1'){
                    $class = '';
                }
                $counter++;
                if (!isset($menu['parents'][$itemId])) {
                    $pagelink = site_url($menu['items'][$itemId]->menu_link);
                    if($menu['items'][$itemId]->menu_link == '/'){
                        $pagelink = site_url();                     
                    }
					
                    $html .= " <li class=''><a href='" .$pagelink. "' class='text-white'>" . $menu['items'][$itemId]->menu_name . "</a></li>";
					
                }
                
            }           
        }
        return $html;
    }

    function getGalleryImages($params = array()){
        $this->db->select('*');
        $this->db->from('tbl_gallery');
        
        //fetch data by conditions
        if(array_key_exists("where",$params)){
            foreach ($params['where'] as $key => $value){
                $this->db->where($key,$value);
            }
        }
        
        if(array_key_exists("order_by",$params)){
            $this->db->order_by($params['order_by']);
        }
        
        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $this->db->count_all_results();
            }else{
                $query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }

        //return fetched data
        return $result;
    }

    /** Newsletter Subscriber */
    public function insertSubscribeUser($cond){
        $this->db->select('user_email'); 
        $this->db->from('tbl_subscribed_users'); 
        $this->db->where($cond);
        $query = $this->db->get(); 
        if($query->num_rows() < 1){
           $insData=  $this->insert('tbl_subscribed_users', $cond);
            if($insData){
                $message = array('status' => '1', 'msg' =>'<div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Thank You!</strong> You have successfully subscribed to our Newsletter.
              </div>' );
              
            }else{
                $message = array('status' => '3', 'msg' =>'<div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Error! </strong> Something went wrong. Please try again.
              </div>' );
            }
        }else{
            $message = array('status' => '3','msg' => '<div class="alert alert-warning alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Thanks! </strong> You have already subscribed to our Newsletter.
          </div>' );
        }      
        return $message;
    }

    /*
     * Insert data in the database
     * @param data array
     */
    public function insertTransaction($data){
        $insert = $this->db->insert('payments',$data);
        return $insert?true:false;
    }


}

