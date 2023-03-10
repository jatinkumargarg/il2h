<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Campaign_Model extends MY_Model {
	function __construct() {
        parent::__construct();
        $this->table   = 'tbl_campaigns';
        $this->response['success'] = 0;
        
    }
	
    
    public function get_all_campaigns($camp_type, $camp_status) {
        $this->db->select('tbl_users.*, tbc.id as camp_id, tbc.campaign_type, tbc.title, tbc.description, tbc.mentor_id, tbc.mentor_contact_number,estimated_hour, accomodation,meals,start_date,end_date,facilities, fees, cv_url, banner_image, tbc.status');
        $this->db->from('tbl_users');
        $this->db->join('tbl_campaigns as tbc', 'tbc.user_id = tbl_users.id', 'inner'); 
        $this->db->where('tbl_users.user_type', 3);
        $this->db->where('tbl_users.status', 1);
        $this->db->where('tbc.status', $camp_status);
        $this->db->where('campaign_type', $camp_type);
        $query = $this->db->get();
        // print_r($this->db->last_query());die;
        // echo '<pre>';print_r($query->result_array());die;
        return $query->result_array();

    }

    public function camp_details($camp_id) {
        $this->db->select('tbl_users.*, tbc.id as camp_id, tbc.campaign_type, tbc.title, tbc.description, tbc.mentor_id, tbc.mentor_contact_number,estimated_hour, accomodation,meals,start_date,end_date,facilities, fees, cv_url, banner_image, tbc.status');
        $this->db->from('tbl_users');
        $this->db->join('tbl_campaigns as tbc', 'tbc.user_id = tbl_users.id', 'inner'); 
        $this->db->where('tbc.id', $camp_id);
        $query = $this->db->get();
        return $query->row_array();

    }

    public function get_all_camps_for_val($camp_type, $vol_apply_status = false) {
        $this->db->select('tbl_users.*, tbc.id as camp_id, tbc.campaign_type, tbc.title, tbc.description, tbc.mentor_id, tbc.mentor_contact_number,estimated_hour, accomodation,meals,start_date,end_date,facilities, fees, cv_url, banner_image, CASE WHEN tva.status is NULL THEN 5 ELSE tva.status END as status, tva.id as app_id', FALSE);
        $this->db->from('tbl_users');
        $this->db->join('tbl_campaigns as tbc', 'tbc.user_id = tbl_users.id', 'inner'); 
        $this->db->join('tbl_vol_application as tva', 'tva.camp_id = tbc.id', 'left'); 
        $this->db->where('tbl_users.status', 1);
        $this->db->where('tbc.status', 1);
        $this->db->where('campaign_type', $camp_type);
        if ($vol_apply_status !== false) {
            $this->db->where('tva.status', $vol_apply_status);
        }
        $query = $this->db->get();
        // print_r($this->db->last_query());die;
        // echo '<pre>';print_r($query->result_array());die;
        return $query->result_array();

    }

}