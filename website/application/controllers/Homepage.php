<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {	

	function __construct(){
		parent::__construct();		
		$this->perPage = 10;
	}
	
	public function index($quiz_id = '',$user_id=''){		
	
		$this->data['page_title']  = 'IL2H';
		$this->load->view('homepage',$this->data);
	}

	

	public function override_404(){   
	//	echo 'hello world';die;
		$this->data['page_title']  = 'Page Not Found';
		$this->load->view('not_found/index',$this->data);
	}

	public function insertAnswers(){
		if($this->input->post()){
			$quiz_id = base64_decode( $_POST['quiz_id']);
			$user_id = $_POST['user_id'];
			foreach($_POST['answers'] as $key => $val){
				$question_id = $key;
				$answer_id = $val['answer_id'];

				$answerCheck = $this->CRUD->Result('tbl_answers',array('quiz_id'=>$quiz_id,'question_id'=>$question_id,'user_id'=>$user_id),'*');
                   
				if(count($answerCheck) > 0){
					$payload = [
						'answer_id' => $answer_id
					];
					$this->CRUD->Update('tbl_answers',array('question_id'=>$question_id,'quiz_id'=>$quiz_id,'user_id'=>$user_id), $payload); 					
					echo  'success';
				}else{
					$payload = [
						'answer_id' => $answer_id,
						'quiz_id' => $quiz_id,
						'question_id' => $question_id,
						'user_id' => $user_id
					];
					$question_id = $this->CRUD->Insert('tbl_answers',$payload);
				}

			}
			
			exit;
		}
	}

	public function searchCampaignView($quiz_id = '',$user_id=''){		
	
		$this->data['page_title']  = 'IL2H';
		$this->load->view('searchCampaign',$this->data);
	}

}
