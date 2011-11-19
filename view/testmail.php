<?php
/*
 * Created on Jul 30, 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

include("../PHPMailer_5.2.0/class.phpmailer.php");
include("../constants/Constants.php");

 
 		$mailer = new PHPMailer();
		$constants = new Constants();
		$mailer->IsSMTP();
		/*$mailer->Host = 'ssl://smtp.gmail.com:465';
		$mailer->SMTPAuth = TRUE;
		$mailer->Username = 'gautamn2002@gmail.com';
		$mailer->Password = 'I2005dCS';
		$mailer->From = 'gautamn2002@gmail.com';*/
		
		$mailer->Host = 'mail.getyourvenue.com';
		$mailer->SMTPAuth = TRUE;
		$mailer->Username = 'getyourv';
		$mailer->Password = 'gyvrocks@1';
		$mailer->From = 'admin@getyourvenue.com';
		
		$mailer->FromName = "Swami";
		$mailer->Subject =" wants to Get a Venue!!!";
		$mailer->Body = "Hi Team,\n\n".
		"from"."\n".
		"GYK Admin";				
		//$mailer->AddAddress('getyourvenue@gmail.com');
		$mailer->AddAddress('gautamn2002@gmail.com');
		
		if(!$mailer->Send()) {
		    error_log("Mailer :  error ".$mailer->ErrorInfo)." : $to";
		    echo  "fail";
		}
		else {
		    echo "sent";
		} 
?>
