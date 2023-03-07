<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Volunteer_request extends MY_Model {
	function __construct() {
        parent::__construct();
        $this->table   = 'tbl_vol_application';
        
    }

    public function is_app_exist($user_id, $camp_id) {
        $query = $this->db->query('SELECT * FROM tbl_vol_application WHERE user_id =' . $user_id . ' AND camp_id=' . $camp_id);
        return $query->num_rows();
    }

    public function get_vol_request($user_id, $camp_type) {
        $this->db->select('tbc.title, tva.*, tbu.name, tbu.address_line_one, tbu.city, tbu.country');
        $this->db->from('tbl_vol_application as tva');
        $this->db->join('tbl_campaigns as tbc', 'tva.camp_id = tbc.id', 'inner'); 
        $this->db->join('tbl_users as tbu', 'tva.user_id = tbu.id', 'inner');
        $this->db->where('tbc.user_id', $user_id);
        $this->db->where('tbc.campaign_type', $camp_type);
        $this->db->where('tva.status !=', 3);
        $query = $this->db->get();
        // print_r($this->db->last_query());die;
        return $query->result_array();
    }

    public function get_vol_list($camp_id) {
        $this->db->select('tbc.title, tva.*, tbu.name, tbu.address_line_one, tbu.city, tbu.country');
        $this->db->from('tbl_vol_application as tva');
        $this->db->join('tbl_campaigns as tbc', 'tva.camp_id = tbc.id', 'inner'); 
        $this->db->join('tbl_users as tbu', 'tva.user_id = tbu.id', 'inner');
        $this->db->where('tva.camp_id', $camp_id);
        $query = $this->db->get();
        // print_r($this->db->last_query());die;
        return $query->result_array();
    }
	
}