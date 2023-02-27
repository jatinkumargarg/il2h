<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Campaign_questions extends MY_Model {
	function __construct() {
        parent::__construct();
        $this->table   = 'tbl_campaign_questions';
        $this->response['success'] = 0;
        
    }

    public function camp_ques($camp_id) {
        $this->db->select('tcq.*');
        $this->db->from('tbl_campaigns as tbc');
        $this->db->join('tbl_campaign_questions as tcq', 'tcq.campaign_id = tbc.id', 'inner');
        $this->db->where('tbc.id', $camp_id);
        $query = $this->db->get();
        return $query->result_array();

    }
	
}