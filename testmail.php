
<?php 

class MailFunc{
    /**
	 *  Name of the email sender
	 * 
	 * @var string
	 */ 
	public const SENDER_NAME = 'Integrated Oasis ICT Centre';

	public static function passwordResetLink()
    {
        $url = "scienceviewjournal.org/customers/password/new/xvdfasfsfsafas";
        
        $temp = '
          <p>Hi Keneth,</p>
          <p>
           If you requested for your '.self::SENDER_NAME.' customer account password reset,
            kindly complete the process by clicking the link below:
            <p>
                <a type="button" href="https://www.'.$url.'" 
                style="background-color:#955a4e;
                    color:#fff;
                    padding:5px 15px;
                    border-radius: 8px;
                    text-decoration:none;"
                >
                    Reset Password
                </a>
            </p>
            If you can\'t click on the link, copy and paste the following URL into a new tab in your browser:
            <p>'.$url.'</p>
        ';
        return $temp;
    }

	public static function emailFormat(){
	   $customMsg = self::passwordResetLink();
	   
		return $customMsg.'
				<br />
				Kind Regards<br /><br />
				Management<br />
				'.self::SENDER_NAME.'
				<br /><br />
				<a href="https://scienceviewjournal.org/" target="_blank">
					<img src="https://www.scienceviewjournal.org/assets/img/logo.png" width="200" height="60" border="0" alt="Company Logo" />
				</a><br />
				<p><strong style="color:#000;">Website:</strong>&nbsp;<span style="color:#333;"><a href="https:// scienceviewjournal.org/" target="_blank">www.scienceviewjournal.org</a></span></p>
				<p><strong style="color:#000;">Email:</strong>&nbsp;<span style="color:#333;">info@ scienceviewjournal.org </span></p>
				<p><strong style="color:#000;">Mobile:</strong>&nbsp;<span style="color:#333;">+234 (904) 742 7262</span></p>';
		
	}
    
    
	public static function sendPlainMail($to,$from,$subject,$message){
		// Set content-type header for sending HTML email 
		$headers = "MIME-Version: 1.0" . "\r\n"; 
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
		 
		// Additional headers 
		$headers .= 'From: '.self::SENDER_NAME.'<'.$from.'>' . "\r\n"; 
		$headers .= 'Cc: info@scienceviewjournal.org' . "\r\n"; 
		$headers .= 'Bcc: info@scienceviewjournal.org' . "\r\n"; 

		//send email
		return $mail = @mail($to, $subject, $message, $headers)?true:false;
	}
}

$message = MailFunc::emailFormat();

MailFunc::sendPlainMail(
    'alfredonuora@gmail.com',
    'info@scienceviewjournal.org',
    'TEST EMAIL',
    $message
);

echo '<h1>Email has been sent!</h1>';




// class AdminMail {
// 	//define variables here

// 	//Email function with attachment ($senderName e.g. FredyTech Admin)
// 	public function sendMail($to,$from,$senderName,$subject,$htmlContent,$attachment){
// 		//header for sender info
// 		$headers = "From: $senderName"." <".$from.">";

// 		//boundary 
// 		$semi_rand = md5(time()); 
// 		$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

// 		//headers for attachment 
// 		$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
// 		// Cc email
// 		$headers .= "\nCc: info@scienceviewjournal.org";

// 		// Bcc email
// 		$headers .= "\nBcc: info@scienceviewjournal.org";

// 		//multipart boundary 
// 		$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
// 		"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 

// 		//preparing attachment
// 		if(!empty($attachment) > 0){
// 			if(is_file($attachment)){
// 				$message .= "--{$mime_boundary}\n";
// 				$fp =    @fopen($attachment,"rb");
// 				$data =  @fread($fp,filesize($attachment));

// 				@fclose($fp);
// 				$data = chunk_split(base64_encode($data));
// 				$message .= "Content-Type: application/octet-stream; name=\"".basename($attachment)."\"\n" . 
// 				"Content-Description: ".basename($attachment)."\n" .
// 				"Content-Disposition: attachment;\n" . " filename=\"".basename($attachment)."\"; size=".filesize($attachment).";\n" . 
// 				"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
// 			}
// 		}
		
// 		$message .= "--{$mime_boundary}--";
// 		$returnpath = "-f" . $from;

// 		//send email
// 		$mail = @mail($to, $subject, $message, $headers, $returnpath);
// 	}
    
// 	/*Select the custom Email to send from 
// 	($domain e.g. fredytech.com; $sendfrom e.g. Admin, Sales)*/
// 	public function email_select($sendfrom,$domain){
// 	   //Select email
// 	   if($sendfrom=="Admin"){
// 		  $email="admin@".$domain; 
// 	   }elseif($sendfrom=="Editor"){
// 		  $email="editor@".$domain; 
// 	   }elseif($sendfrom=="Customer Care"){
// 		  $email="customercare@".$domain; 
// 	   }elseif($sendfrom=="Support"){
// 		  $email="support@".$domain; 
// 	   }elseif($sendfrom=="Careers"){
// 		  $email="careers@".$domain; 
// 	   }elseif($sendfrom=="Sales"){
// 		  $email="sales@".$domain; 
// 	   }elseif($sendfrom=="Non-reply"){
// 		  $email="non-reply@".$domain; 
// 	   }elseif($sendfrom=="News"){
// 		  $email="news@".$domain; 
// 	   }else{
// 		   $email="info@".$domain;
// 	   }
	   
// 	   return $email;
// 	}
	
// 	/*Select the custom Email to send from 
// 	($domain e.g. fredytech.com; $sendfrom e.g. Admin, Sales)*/
// 	public function return_url($sendfrom,$source_id){
// 	   //Select email
// 	   if($sendfrom=="Web Service"){
// 		  $url="admin_web_service_request?action=E23TdfbgrgS5AjfrGCFSD45327gd58&detail=".$source_id; 
// 	   }elseif($sendfrom=="Free Quote"){
// 		  $url="admin_service_quote?action=E23TdfbgrgS5AjfrGCFSD45327gd58&detail=".$source_id; 
// 	   }elseif($sendfrom=="Servive Request"){
// 		  $url="admin_service_request?action=E23TdfbgrgS5AjfrGCFSD45327gd58&detail=".$source_id; 
// 	   }elseif($sendfrom=="Client"){
// 		  $url="admin_customer_page?action=E23TdfbgrgS5AjfrGCFSD45327gd58&detail=".$source_id; 
// 	   }elseif($sendfrom=="Product Order"){
// 		  $url="admin_product_orders?action=E23TdfbgrgS5AjfrGCFSD45327gd58&detail=".$source_id; 
// 	   }else{
// 		   $url="admin_messaging?action=H3C2liS85TdfbgrgS5Aj885ThF27gd58&id=1";
// 	   }
	   
// 	   return $url;
// 	}
	
// 	/*Select the custom Email to send from 
// 	($domain e.g. fredytech.com; $sendfrom e.g. Admin, Sales)*/
// 	public function mail_unit_select($email){
// 	   //Select email
// 	   if($email=="admin@scienceviewjournal.org"){
// 		  $sendfrom="Admin"; 
// 	   }elseif($email="customercare@scienceviewjournal.org"){
// 		  $sendfrom="Customer Care";
// 	   }elseif($email="editor@scienceviewjournal.org"){
// 		  $sendfrom="Editor";
// 	   }elseif($email="support@scienceviewjournal.org"){
// 		  $sendfrom="Support";		  
// 	   }elseif($email="careers@scienceviewjournal.org"){
// 		  $sendfrom="Careers";
// 	   }elseif($email="sales@scienceviewjournal.org"){
// 		  $sendfrom="Sales";		  
// 	   }elseif($email="non-reply@scienceviewjournal.org"){
// 		  $sendfrom="Non-reply";		  
// 	   }elseif($email="news@scienceviewjournal.org"){
// 		  $sendfrom="News";		  
// 	   }else{
// 		   $sendfrom="Admin";
// 	   }
	   
// 	   return $sendfrom;
// 	}

// 	public function email_format($message,$subject,$mail_type,$from){
// 		//Select format
// 		if($mail_type=="Plain"){
// 		   $mail_body='
					 
// 					 '.$message.'
// 					 <br />
// 					 Best Regards<br />
// 					 Editor
// 					 <br /><br />
// 					 <a href="https://scienceviewjournal.org/" target="_blank">
// 					   <img src="https://scienceviewjournal.org/private_email/email_img/logo.png" width="219" height="67" border="0" alt="" />
// 					 </a><br />
// 					 <p><strong style="color:#000;">Website:</strong>&nbsp;<span style="color:#333;"><a href="https://scienceviewjournal.org/" target="_blank">www.scienceviewjournal.org</a></span></p>
// 					 <p><strong style="color:#000;">Email:</strong>&nbsp;<span style="color:#333;">info@scienceviewjournal.org, editor@scienceviewjournal.org</span></p>
// 					 <p><strong style="color:#000;">Mobile:</strong>&nbsp;<span style="color:#333;">+234 (803) 338 0350</span></p>
// 					 <p style="width:60%;">
// 						<strong>"Accurate, Secure and Timely Provision of Relevant Data"</strong><br /><br />
// 						 <b>Confidential</b> - This email and any files transmitted with it are the property 
// 						 of Science View Journal, are confidential, and are intended solely for the
// 						 use of the individual or entity to whom this email is addressed. If you are 
// 						 not one of the named recipients or if you otherwise have reason to believe 
// 						 that you have received this message in error, please notify the sender and 
// 						 immediately delete this message from your computer. Any other use, retention, 
// 						 dissemination, forwarding, printing, or copying of this email is strictly prohibited.
// 					 </p>';
					 
// 		}elseif($mail_type=="Plain2"){
// 		   $mail_body='
// 					 Dear '.$client_name.',<br /><br />
// 					 '.$message.'
// 					 <br /><br />
// 					 Best Regards<br />
// 					 '.$from.' Unit.
// 					 <br /><br />
// 					 <a href="https://scienceviewjournal.org/" target="_blank">
// 					   <img src="https://scienceviewjournal.org/private_email/email_img/logo.png" width="219" height="67" border="0" alt="" />
// 					 </a><br />
// 					 <p><strong style="color:#000;">Website:</strong>&nbsp;<span style="color:#333;"><a href="https://scienceviewjournal.org/" target="_blank">www.scienceviewjournal.org</a></span></p>
// 					 <p><strong style="color:#000;">Email:</strong>&nbsp;<span style="color:#333;">info@scienceviewjournal.org, editor@scienceviewjournal.org</span></p>
// 					 <p><strong style="color:#000;">Mobile:</strong>&nbsp;<span style="color:#333;">+234 (803) 338 0350</span></p>
// 					 <p style="width:60%;">
// 						<strong>"Accurate, Secure and Timely Provision of Relevant Data"</strong><br /><br />
// 						 <b>Confidential</b> - This email and any files transmitted with it are the property 
// 						 of Science View Journal, are confidential, and are intended solely for the
// 						 use of the individual or entity to whom this email is addressed. If you are 
// 						 not one of the named recipients or if you otherwise have reason to believe 
// 						 that you have received this message in error, please notify the sender and 
// 						 immediately delete this message from your computer. Any other use, retention, 
// 						 dissemination, forwarding, printing, or copying of this email is strictly prohibited.
// 					 </p>';
					 
// 		}elseif($mail_type=="Custom"){
// 		   $mail_head=file_get_contents('admin_email/mail_includes/email_head.htm');
// 		   $mail_foot=file_get_contents('admin_email/mail_includes/email_foot.htm');
		   
// 		   $mail_body='
// 			   '.$mail_head.'
// 			   <!-- Start Section 1 -->
// 				 <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ebebeb" style="border-bottom:8px solid #002828">
// 					 <tr>
// 						 <td class="p30-15-0" style="padding: 20px 20px 20px 20px;" bgcolor="#ffffff">
// 							 <table width="100%" border="0" cellspacing="0" cellpadding="0">
// 								 <tr>
// 									 <td class="h2-center" style="color:#000000; font-family:sans-serif; font-size:24px; line-height:36px; text-align:center; padding-bottom:20px;">'.$from.' Services</td>
// 								 </tr>
// 								 <tr>
// 									 <td class="text-center" style="color:#5d5c5c; font-family:sans-serif; font-size:14px; line-height:22px; text-align:justify; padding-bottom:22px;">
// 										 Dear Sir/Madam,<br /><br />
// 										 '.$message.'
// 										 <br /><br />
// 										 Best Regards<br />
// 										 '.$from.' Unit.
// 										 <br /><br />
// 									 </td>
// 								 </tr>
// 								 <tr>
// 									 <td align="center"></td>
// 								 </tr>
// 							 </table>
// 						 </td>
// 					 </tr>
// 				 </table>
// 				 <!-- End Section 1 -->'.$mail_foot; 
// 		}
// 		return $mail_body;
// 	 }
    
// 	/*Select Email to send from
// 	$mail_type e.g. Plain, Custom*/

// 	public function plainMailFormat($message,$subject,$mail_type,$from){
// 	   //Select format
// 		$mail_body= $message.'
// 				<br />
// 				Best Regards<br />
// 				Editor
// 				<br /><br />
// 				<a href="https://scienceviewjournal.org/" target="_blank">
// 					<img src="https://scienceviewjournal.org/private_email/email_img/logo.png" width="219" height="67" border="0" alt="" />
// 				</a><br />
// 				<p><strong style="color:#000;">Website:</strong>&nbsp;<span style="color:#333;"><a href="https://scienceviewjournal.org/" target="_blank">www.scienceviewjournal.org</a></span></p>
// 				<p><strong style="color:#000;">Email:</strong>&nbsp;<span style="color:#333;">info@scienceviewjournal.org, editor@scienceviewjournal.org</span></p>
// 				<p><strong style="color:#000;">Mobile:</strong>&nbsp;<span style="color:#333;">+234 (803) 338 0350</span></p>
// 				<p style="width:60%;">
// 					<strong>"Accurate, Secure and Timely Provision of Relevant Data"</strong><br /><br />
// 					<b>Confidential</b> - This email and any files transmitted with it are the property 
// 					of Science View Journal, are confidential, and are intended solely for the
// 					use of the individual or entity to whom this email is addressed. If you are 
// 					not one of the named recipients or if you otherwise have reason to believe 
// 					that you have received this message in error, please notify the sender and 
// 					immediately delete this message from your computer. Any other use, retention, 
// 					dissemination, forwarding, printing, or copying of this email is strictly prohibited.
// 				</p>';

// 	   return $mail_body;
// 	}
  
     
// 	/*Get mail attachment-($file_dir is the location of uploaded file)*/
// 	public function get_attachment($file_source,$file_dir,$email_id,$create_time,$uniq_name){
	     
// 		$attach_name="Attachment_".$email_id."_".$create_time."_".$uniq_name;
// 		$tmp_file = $_FILES[$file_source]['tmp_name'];
		
// 		//Upload attachment
// 		move_uploaded_file($tmp_file,$file_dir."".$attach_name);
// 		$attachment =$file_dir."".$attach_name;
	   
// 	    return $attachment;
// 	}
    
	
// }

class AdminMail {
	//define variables here
	public $senderName = 'Science View Journal';
    
	/*Select the custom Email to send from */
	public function email_select($sendfrom,$domain){
	   //Select email
	   if($sendfrom=="Admin"){
		  $email="admin@".$domain; 
	   }elseif($sendfrom=="Editor"){
		  $email="editor@".$domain; 
	   }elseif($sendfrom=="Customer Care"){
		  $email="customercare@".$domain; 
	   }elseif($sendfrom=="Support"){
		  $email="support@".$domain; 
	   }elseif($sendfrom=="Careers"){
		  $email="careers@".$domain; 
	   }elseif($sendfrom=="Sales"){
		  $email="sales@".$domain; 
	   }elseif($sendfrom=="Non-reply"){
		  $email="non-reply@".$domain; 
	   }elseif($sendfrom=="News"){
		  $email="news@".$domain; 
	   }else{
		   $email="info@".$domain;
	   }
	   
	   return $email;
	}
	
	/*Select the custom Email to send from */
	public function return_url($sendfrom,$source_id){
	   //Select email
	   if($sendfrom=="Web Service"){
		  $url="admin_web_service_request?action=E23TdfbgrgS5AjfrGCFSD45327gd58&detail=".$source_id; 
	   }elseif($sendfrom=="Free Quote"){
		  $url="admin_service_quote?action=E23TdfbgrgS5AjfrGCFSD45327gd58&detail=".$source_id; 
	   }elseif($sendfrom=="Servive Request"){
		  $url="admin_service_request?action=E23TdfbgrgS5AjfrGCFSD45327gd58&detail=".$source_id; 
	   }elseif($sendfrom=="Client"){
		  $url="admin_customer_page?action=E23TdfbgrgS5AjfrGCFSD45327gd58&detail=".$source_id; 
	   }elseif($sendfrom=="Product Order"){
		  $url="admin_product_orders?action=E23TdfbgrgS5AjfrGCFSD45327gd58&detail=".$source_id; 
	   }else{
		   $url="admin_messaging?action=H3C2liS85TdfbgrgS5Aj885ThF27gd58&id=1";
	   }
	   
	   return $url;
	}
	
	/*Select the custom Email to send from */
	public function mail_unit_select($email){
	   //Select email
	   if($email=="admin@scienceviewjournal.org"){
		  $sendfrom="Admin"; 
	   }elseif($email="customercare@scienceviewjournal.org"){
		  $sendfrom="Customer Care";
	   }elseif($email="editor@scienceviewjournal.org"){
		  $sendfrom="Editor";
	   }elseif($email="support@scienceviewjournal.org"){
		  $sendfrom="Support";		  
	   }elseif($email="careers@scienceviewjournal.org"){
		  $sendfrom="Careers";
	   }elseif($email="sales@scienceviewjournal.org"){
		  $sendfrom="Sales";		  
	   }elseif($email="non-reply@scienceviewjournal.org"){
		  $sendfrom="Non-reply";		  
	   }elseif($email="news@scienceviewjournal.org"){
		  $sendfrom="News";		  
	   }else{
		   $sendfrom="Admin";
	   }
	   
	   return $sendfrom;
	}
	
	public function plainMailFormat($message){
	   //Select format
		$mail_body= $message.'
				<br />
				Best Regards<br />
				Editor-In-Chief
				'.$this->senderName.'
				<br /><br />
				<a href="https://scienceviewjournal.org/" target="_blank">
					<img src="https://scienceviewjournal.org/private_email/email_img/logo.png" width="219" height="67" border="0" alt="" />
				</a><br />
				<p><strong style="color:#000;">Website:</strong>&nbsp;<span style="color:#333;"><a href="https://scienceviewjournal.org/" target="_blank">www.scienceviewjournal.org</a></span></p>
				<p><strong style="color:#000;">Email:</strong>&nbsp;<span style="color:#333;">info@scienceviewjournal.org, editor@scienceviewjournal.org</span></p>
				<p><strong style="color:#000;">Mobile:</strong>&nbsp;<span style="color:#333;">+234 (803) 338 0350</span></p>
				<p style="width:60%;">
					<strong>"Accurate, Secure and Timely Provision of Relevant Data"</strong><br /><br />
					<b>Confidential</b> - This email and any files transmitted with it are the property 
					of Science View Journal, are confidential, and are intended solely for the
					use of the individual or entity to whom this email is addressed. If you are 
					not one of the named recipients or if you otherwise have reason to believe 
					that you have received this message in error, please notify the sender and 
					immediately delete this message from your computer. Any other use, retention, 
					dissemination, forwarding, printing, or copying of this email is strictly prohibited.
				</p>';

	   return $mail_body;
	}

	public function customMailFormat($message){
		$mail_head=file_get_contents('admin_email/mail_includes/email_head.htm');
		$mail_foot=file_get_contents('admin_email/mail_includes/email_foot.htm');
		
		$mail_body='
			'.$mail_head.'
			<!-- Start Section 1 -->
				<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ebebeb" style="border-bottom:8px solid #002828">
					<tr>
						<td class="p30-15-0" style="padding: 20px 20px 20px 20px;" bgcolor="#ffffff">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="h2-center" style="color:#000000; font-family:sans-serif; font-size:24px; line-height:36px; text-align:center; padding-bottom:20px;">'.$this->senderName.'</td>
								</tr>
								<tr>
									<td class="text-center" style="color:#5d5c5c; font-family:sans-serif; font-size:14px; line-height:22px; text-align:justify; padding-bottom:22px;">
										Dear Sir/Madam,<br /><br />
										'.$message.'
										<br /><br />
										Best Regards<br />
										'.$this->senderName.' Team.
										<br /><br />
									</td>
								</tr>
								<tr>
									<td align="center"></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<!-- End Section 1 -->'.$mail_foot; 
	}
    
    //Email function
	public function sendMail($to, $from, $subject, $htmlContent){
		// Set content-type header for sending HTML email 
		$headers = "MIME-Version: 1.0" . "\r\n"; 
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
		 
		// Additional headers 
		$headers .= 'From: '.$this->senderName.'<'.$from.'>' . "\r\n"; 
		$headers .= 'Cc: info@scienceviewjournal.org' . "\r\n"; 
		$headers .= 'Bcc: info@scienceviewjournal.org' . "\r\n"; 


		//send email
		$mail = @mail($to, $subject, $htmlContent, $headers);
	}
	
}

// $to= 'alfredonuora@gmail.com';
// 	$from = $testmail->email_select('Editor','scienceviewjournal.org');
// 	$subject = 'Test Mail'; 
// 	$message= 'We are test running this email.'; 

// //email body content
// $htmlContent = $testmail->plainMailFormat($message);

// //email sending status
// if($testmail->sendMail($to, $from, $subject, $htmlContent)){
// 	echo "<h1>Mail sent.</h1>";
// }else{
// 	echo "<h1>Mail sending failed.</h1>";
// }

//Get the email class
// $test=new AdminMail();
	 
// $to= 'alfredonuora@gmail.com';
// $from = $test->email_select('Editor','scienceviewjournal.org');
// $subject = 'Test Mail'; 
// $message= 'We are test running this email.'; 

// //attachment file path
// //$attachment =$test->get_attachment('mail_attach','mail_includes/');

// //email body content
// $htmlContent = $test->customMailFormat($message);


// //email sending status
// if($test->sendMail($to, $from, $subject, $htmlContent)){
//    echo "<h1>Mail sent.</h1>";
//    //unlink($attachment);
// }else{
//    echo "<h1>Mail sending failed.</h1>";
// }

