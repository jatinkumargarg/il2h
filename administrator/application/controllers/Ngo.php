<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ngo extends MY_Controller {
    private $table = 'tbl_campaigns';
    private $className = 'Ngo' ;

    function __construct(){
        parent::__construct();
       
    }

    /** Show list of all Questions **/
    public function index(){        
       
        $this->data['heading'] = 'NGO List';
        $this->data['user_type'] = 3;
        $res = $this->db->select('*')->where('user_type', 3)->get('tbl_users')->result_array();
        $this->data['ngo'] = $res;
         
        $this->parser->parse('Ngo/index',$this->data);
    }

    public function volunteer(){        
       
        $this->data['heading'] = 'Volunteer List';
        $this->data['user_type'] = 2;
        $res = $this->db->select('*')->where('user_type', 2)->get('tbl_users')->result_array();
        $this->data['ngo'] = $res;
         
        $this->parser->parse('Ngo/index',$this->data);
    }

    public function disable_ngo() {
        $id = $this->uri->segment(3);
        $this->db->where('id', $id);
        $this->db->update('tbl_users', array('status' => 0));
        $this->session->set_flashdata('Message', 'User disabled successfully!');
        if ($this->uri->segment(4) == 3) 
		    redirect(site_url('Ngo'),'refresh');                          
        else 
            redirect(site_url('Ngo/volunteer'),'refresh');                          
    }

    public function enable_ngo() {
        $id = $this->uri->segment(3);
        $this->db->where('id', $id);
        $this->db->update('tbl_users', array('status' => 1));
        $this->session->set_flashdata('Message', 'User enabled successfully!');
		if ($this->uri->segment(4) == 3) 
		    redirect(site_url('Ngo'),'refresh');                          
        else 
            redirect(site_url('Ngo/volunteer'),'refresh');                          
    }

    public function ngo_list() {
		
        // $this->data['camp_type'] = 'Onsite';
        $this->load->view('Ngo/onsite_camp',$this->data);
        // echo '<pre>';print_r($res);die;
        
    }
    
    public function online_camp_list() {
		$res = $this->db->select('*')->where('campaign_type', 1)->get('tbl_campaigns')->result_array();
        $this->data['camps'] = $res;
        $this->data['camp_type'] = 'Online';
        $this->load->view('Ngo/onsite_camp',$this->data);
        // echo '<pre>';print_r($res);die;
        
    }

    public function onsite_camp_list() {
		$res = $this->db->select('*')->where('campaign_type', 2)->get('tbl_campaigns')->result_array();
        $this->data['camps'] = $res;
        $this->data['camp_type'] = 'Onsite';
        $this->load->view('Ngo/onsite_camp',$this->data);
        // echo '<pre>';print_r($res);die;
        
    }

    public function approve_camp() {
        $id = $this->uri->segment(3);
        $type = $this->uri->segment(4);
        $this->db->where('id', $id);
        $this->db->update('tbl_campaigns', array('status' => 1));
        $this->session->set_flashdata('Message', 'Campaign approved successfully!');
        if ($type == 1) {
            redirect(site_url('online_camp_list'),'refresh');                          
        } else {
            redirect(site_url('onsite_camp_list'),'refresh');                          
        }
        
    }

    public function reject_camp() {
		$id = $this->uri->segment(3);
        $this->db->where('id', $id);
        $this->db->update('tbl_campaigns', array('status' => 2));
        $this->session->set_flashdata('Message', 'Campaign rejected successfully!');
		redirect(site_url('onsite_camp_list'),'refresh');                          
    }
   
}
