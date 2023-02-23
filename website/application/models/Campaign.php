<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Campaign extends MY_Model {
	function __construct() {
        parent::__construct();
        $this->table   = 'tbl_campaigns';
        $this->response['success'] = 0;
        
    }
	
    
    public function get_all_campaigns($camp_type) {
        $this->db->select('tbl_users.*, tbl_campaigns.*');
        $this->db->from('tbl_users');
        $this->db->join('tbl_campaigns', 'tbl_campaigns.user_id = tbl_users.id', 'inner'); 
        $this->db->where('tbl_users.user_type', 3);
        $this->db->where('tbl_users.status', 1);
        $this->db->where('tbl_campaigns.status', 1);
        $this->db->where('campaign_type', $camp_type);
        $query = $this->db->get();
        // print_r($this->db->last_query());die;
        return $query->result_array();

    }

}