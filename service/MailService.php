<?php
/*
 * Created on Jul 28, 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
include("../PHPMailer_5.2.0/class.phpmailer.php");
include("../constants/Constants.php");

class MailService{
	
	function sendBookingNotificationMail($username,$phone,$emailid,$location,$function,$budget,$preferredDate){
		
		$mailer = new PHPMailer();
		$constants = new Constants();
		$mailer->IsSMTP();
		$mailer->Host = $constants->host;
		$mailer->SMTPAuth = $constants->mailerSMTPAuth;
		$mailer->Username = $constants->username;
		$mailer->Password = $constants->password;
		$mailer->From = $constants->mailFrom;
		$mailer->FromName = $constants->mailFromName;
		$mailer->Subject = $username." wants to Get a Venue!!!";
		$mailer->Body = "Hi Team,\n\n".
						"\tUser ".$username." wants to get a venue. The full user information is:\n\n".
						"\t\tPhone: ".$phone."\n".						
						"\t\tEmail: ".$emailid."\n".
						"\t\tLocation: ".$location."\n".						
						"\t\tFunction: ".$function."\n".
						"\t\tBudget: ".$budget."\n".						
						"\t\tPreferred Date: ".$preferredDate."\n\n".
		"from"."\n".
		"GYK Admin";				
		
		$str=explode(",", $constants->mailTo);
		$mailer->AddAddress($str[0]);
		$mailer->AddAddress($str[1]);
		$mailer->AddAddress($str[2]);
		//$mailer->AddAddress(ronweasely@yahoo.com);
		
		if(!$mailer->Send()) {
		    error_log("Mailer :  error ".$mailer->ErrorInfo)." : $to";
		    return  "fail";
		}
		else {
		    return "sent";
		} 
	}
}

?>
