<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ( ! function_exists('SendEmail')){
    function SendEmail($subject,$body,$user_email=''){
    	$response = array();
    	require_once(APPPATH.'third_party/PHPMailer/PHPMailerAutoload.php');
     	// Please Turn Off 2 Step Verification and Turn ON Less Security App
    	$mail = new PHPMailer();
		$mail->IsSMTP(); // we are going to use SMTP
		//$mail->SMTPDebug = 2;
		$mail->SMTPAuth   = true; // enabled SMTP authentication
		//$mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
		$mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
		$mail->Port       = 587;                   // SMTP port to connect to GMail
		$mail->Username   = "";  // user email address
		$mail->Password   = "";            // password in GMail
		$mail->SetFrom('', '');  //Who is sending
		$mail->isHTML(true);
		$mail->Subject    = $subject;
		$mail->Body      =  $body;        
        
        $adminEMail = '';
		if($user_email != ''){
			$adminEMail = $user_email;
		}
        //$mail->AddAddress($receiver);
        $mail->AddAddress($adminEMail);
		if(!$mail->Send()) {
			
			$response['message'] = 'Mail error: '.$mail->ErrorInfo; 
			$response['success'] = 0;
		} else {
			$response['message'] = 'Mail Sent.'; 
			$response['success'] = 1;
			return 1;
		}
		return $response;
    }

    function contactUsEmail($data){
        $subject = "Contact Us Query -";     
        $body = '
                <p style="word-spacing: 3px;">Hello Admin, </p>
                <p style="word-spacing: 3px;">We have recieved a new query.</p>
                <p style="word-spacing: 3px;">Name  : '.$data['first_name']. $data['last_name'].'</p>
                <p style="word-spacing: 3px;">Email : '.$data['email'].'</p>
                <p style="word-spacing: 3px;">Company Name : '.$data['company_name'].'</p>
                <p style="word-spacing: 3px;">Contact Type : '.$data['contact_type'].'</p>
                <p style="word-spacing: 3px;">Message : '.$data['message'].'</p>';    
     
        SendEMail($subject,$body);        
    }

	function requestDemoEmail($data){
        $subject = "Request A Demo Query - ";     
        $body = '
                <p style="word-spacing: 3px;">Hello Admin, </p>
                <p style="word-spacing: 3px;">We have recieved a new query.</p>
                <p style="word-spacing: 3px;">Name  : '.$data['first_name'].' '. $data['last_name'].'</p>
                <p style="word-spacing: 3px;">Email : '.$data['email'].'</p>
				<p style="word-spacing: 3px;">Contact Number : '.$data['contact_number'].'</p>
                <p style="word-spacing: 3px;">Company Name : '.$data['company_name'].'</p>
                <p style="word-spacing: 3px;">Job Title : '.$data['job_title'].'</p>
                <p style="word-spacing: 3px;">Job Function : '.$data['job_function'].'</p>'; 
        SendEMail($subject,$body);        
    }

	

  
    function emailHeader(){   
        return  true;
    }

    function emailFooter(){
        return  true;
    }
    
}    
