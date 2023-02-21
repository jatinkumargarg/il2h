<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

public $redirect_url = array(
                    '1' => 'DisputeIncident',
                    '3' =>  'dashboard',
                    '4' =>  'dashboard',
                    '5' =>  'dashboard',
                    '6' =>  'dashboard',
                    '7' =>  'dashboard',
                    '8' =>  'dashboard',
                    '9' =>  'ShortageIncident',
                    '10' =>  'dashboard',
                    '11' =>  'dashboard',
                );
                
    function __construct(){
        parent::__construct();

        $this->_isLoggedIn();
            
        $this->load->library('PHPExcel');
        $this->load->library('PHPExcel_IOFactory'); 
    }
 
    /**
    * Function to check Whether Current Session Id is Equal to User Login Session Id  If 
    * Not Redirect to LogoutPage
    */
    function _isLoggedIn(){
        
        if(isset($this->session->userdata['user_info'])){
            if($this->session->userdata['user_info']['user_session'] != session_id()){
                $this->session->unset_userdata('user_info'); 
                redirect(site_url('logout'));
            }else{
                $checkUrlAccess  = $this->CRUD->checkAccess();

               if($checkUrlAccess == 2){
                    redirect(site_url('User')); 
               }
           
               if(!$checkUrlAccess){
                 redirect(site_url($this->redirect_url[$this->session->userdata['user_info']['user_role_id']]));
               }   
            }  
        } else {
            redirect(site_url());
        }
    }


    function set_upload_options($path,$name){ 
      // upload an image options
        $config = array();
        //give the path to upload the image in folder
        $config['upload_path']  = 'assets/uploads/'.$path;
        $config['remove_spaces']= TRUE;
        //$config['encrypt_name'] = TRUE; // for encrypting the name
        $config['file_name']    = $name;
        $config['allowed_types']= '*';
        $config['max_size']= 10240;
        
        $config['overwrite']    = FALSE;
        if (!is_dir($config['upload_path'])) {
           mkdir($config['upload_path'], 0777, TRUE);
        }
        return $config;

    }

    function image_upload($data, $path, $insert_id){
        $this->load->library('upload');   
        $count = count($data['image']['name']);  
        for($i=0; $i<$count; $i++)
        {   
            $name = substr(str_replace('-','_',str_replace(' ','_',$data['image']['name'][$i] ) ),0,10).date('ymd').$i;
            
            $_FILES['image']['name']= $data['image']['name'][$i];
            $_FILES['image']['type']= $data['image']['type'][$i];
            $_FILES['image']['tmp_name']= $data['image']['tmp_name'][$i];
            $_FILES['image']['error']= $data['image']['error'][$i];
            $_FILES['image']['size']= $data['image']['size'][$i];
           // echo  $_FILES['image']['type'];
            $this->upload->initialize($this->set_upload_options($path, $name));
            //function defination below
            if($this->upload->do_upload('image')){
                $upload_data = $this->upload->data();
                $fileName[$i]['upload_path']= 'assets/uploads/'.$path;
                $fileName[$i]['file_name']  = $upload_data['file_name'];
                $fileName[$i]['file_path']  = $upload_data['file_path'];
            } else {
                echo $fileName['error'] =  $this->upload->display_errors();
                die();
            }    
        } 
 
        foreach($fileName as $file){
            $uploadPath = $file['upload_path'].'/'.$file['file_name'] . '';
            $file_insert  = array(
                'file_name' => $uploadPath,
                'incident_id' => $insert_id
            );
            $tble = 'tbl_dispute_files';
            if($path == 'shortage'){
                $tble = 'tbl_shortage_files';
            }
            $this->CRUD->Insert($tble,$file_insert);
        }
        return  $count;    
    }


    function image_resize($data,$width,$thumb)    
    {   
        $height = $width-($width*25/100); 
        $upload_path                = $data['upload_path'];
        $config['source_image']     = $data['file_path'].$data['file_name'];
        $config['new_image']        = $upload_path.$data['file_name'];   
        $config['image_library']    = 'gd2';    
        //$config['create_thumb']     = $thumb;    
        $config['maintain_ratio']   = TRUE;    
        $config['width']            = $width;     
        $config['height']           = $height;     
        if (!is_dir($upload_path)) {
           mkdir($upload_path, 0777, TRUE);
        } 
        $this->load->library('image_lib');   
        $this->image_lib->initialize($config);
        $this->image_lib->resize();

        $upload_path                = $data['upload_path'].'thumbs/';
        $config['source_image']     = $data['file_path'].$data['file_name'];
        $config['new_image']        = $upload_path.$data['file_name'];   
        $config['image_library']    = 'gd2';    
        $config['create_thumb']     = $thumb;    
        $config['maintain_ratio']   = TRUE;    
        $config['width']            = $width/8;     
        $config['height']           = $height/8;     
        if (!is_dir($upload_path)) {
           mkdir($upload_path, 0777, TRUE);
        } 
        $this->load->library('image_lib');   
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
    }

   /**
   * Genrate Unique Id for incidents forms
   */

   function getUniqueId($arr){

        extract($arr); // Extract the $arr data

        $date = date('Y-m-d');
        $last_entry = $this->CRUD->Result($type, array('date(create_date_time)' => $date),'id','array');  // Get total  number of records in one day

        $bank = $this->CRUD->Result('tbl_dropdown_choices', array('id' => $bankId),'option_value','array');  // Get Bank name from table
       
        $bank = str_replace(' ', '', $bank[0]['option_value']);

        $lastSixNumber = sprintf("%04d", count($last_entry));

        $bnk = substr($bank,0,3);
        $result = $initial.$bnk.date('md'). $this->random_num(3).$lastSixNumber;
        $result = str_replace(' ', '', $result);
        return $result; 
          
    }

    /**
    * Genrate Random Aplhanumeric string
    */
    public function random_num($size) {
        $alpha_key = '';
        $keys = range('A', 'Z');
        for ($i = 0; $i < 2; $i++){
            $alpha_key .= $keys[array_rand($keys)];
        }
        $length = $size - 2;
        $key = '';
        $keys = range(0, 9);
        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }
        return $alpha_key . $key;
    }


/** Find number of days between two days **/
public function dateDiffInDays($date1, $date2)  
{ 
    // Calulating the difference in timestamps 
    $diff = strtotime($date2) - strtotime($date1); 
      
    // 1 day = 24 hours 
    // 24 * 60 * 60 = 86400 seconds 
    return abs(round($diff / 86400)); 
} 

}