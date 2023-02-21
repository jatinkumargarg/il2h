<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
                
    function __construct(){
        parent::__construct();
        header('X-Frame-Options: SAMEORIGIN');
		header("X-XSS-Protection: 1; mode=block");
        $this->_isLoggedIn();
         
     
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
            } 
        } else {
            redirect(site_url());
        }
    }

    /**
     * Common Funtion to Insert or Update Different Post Type
     */
    public function insertUpdate($datas,$table,$className,$ttype){
       
       
       
        if(isset($datas['data']['created_at']) && $datas['data']['created_at'] != ''){         
            
            $myDateTime = DateTime::createFromFormat('d/m/Y', $datas['data']['created_at']);
            $newDateString = $myDateTime->format('Y-m-d');
            $datas['data']['created_at'] = $newDateString;
           
        }
        $config = array(
            array(
                    'field' => 'data[title]',
                    'label' => 'Title',
                    'rules' => 'trim|required'
            ),
            array(
                    'field' => 'data[description]',
                    'label' => 'Description',
                    'rules' => 'trim|required',						
            ),
            array(
                    'field' => 'data[status]',
                    'label' => 'Status',
                    'rules' => 'trim|required',						
            )
        );
      
      
        $this->form_validation->set_rules($config);	
        if($this->form_validation->run()===TRUE){            
            $data = $datas['data'];
            
            if(!empty($datas['id'])){ 
                $update = $this->CRUD->Update($table,array('id'=>$datas['id']), $data); 

                $this->session->set_flashdata('Message','<div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> '.$className.' has been updated.
              </div>');
              redirect(current_url(),'refresh');
            }else{
                $insert_id = $this->CRUD->Insert($table,$data);
             
                $this->session->set_flashdata('Message','<div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> A New  '.$className.'  has been created.
              </div>');
              redirect(site_url($className),'refresh');
            }
        }
    }

    function file_check($str,$name){
        $allowed_image_extension = array(
            "png",
            "jpg",
            "jpeg",
            "PNG",
            "JPG",
            "JPEG"
        );
          // Get image file extension
       
        $file_extension = pathinfo($_FILES[$name]["name"], PATHINFO_EXTENSION);
          // Validate file input to check if is not empty
        if (! file_exists($_FILES[$name]["tmp_name"])) {
            $this->form_validation->set_message('file_check', 'Choose image file to upload.');
           return false;
        }    // Validate file input to check if is with valid extension
        else if (! in_array($file_extension, $allowed_image_extension)) {
            $this->form_validation->set_message('file_check', 'Upload valid images. Only PNG and JPEG are allowed.');
           return false;
        }  
        return true;
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
        for($i=0; $i<$count; $i++){   
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
    public function uploadImage($data, $path,$image_name='post_image') {     
        $this->load->library('upload');
        $name =str_replace('-','_',str_replace(' ','_',$data[$image_name]['name'] ) );           
        $this->upload->initialize($this->set_upload_options($path, $name));
        
        if ( ! $this->upload->do_upload($image_name)) {
            echo $fileName['error'] =  $this->upload->display_errors();
            die();
        }else { 
            $upload_data = $this->upload->data();
            return $upload_data['file_name'];
           exit;
        } 
     }

     public function createSlug($slug_name){
         return  rtrim(strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $slug_name ))),'-' );
     }

     public function fileUploadCkEditor(){         
        if(isset($_FILES['upload']['name'])){
            $file = $_FILES['upload']['tmp_name'];
            $file_name = $_FILES['upload']['name'];
            $file_name_array = explode(".", $file_name);
            $extension = end($file_name_array);
            $new_image_name = rand() . '.' . $extension;
            chmod('assets/uploads/posts/', 0777);
            $allowed_extension = array("jpg", "gif", "png");
            if(in_array($extension, $allowed_extension)){
                $uploadFolder = 'assets/uploads/posts/' . $new_image_name;
            move_uploaded_file($file,$uploadFolder );
                $function_number = $_GET['CKEditorFuncNum'];
                $url =  base_url('assets/uploads/posts/') . $new_image_name;;
                $message = '';
                echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number, '$url', '$message');</script>";
                exit;
            }
        }
     }

    

}