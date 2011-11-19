<?php

/*
 * Created on Jul 30, 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
require_once ("../service/VenueService.php");
require_once ("../service/MailService.php");
require_once ("../constants/Constants.php");

$venueService = new VenueService();
$response = $venueService->contactUs();
$constants = new Constants();
$name = $_POST['name'];
$email = $_POST['email'];
$contactNumber = $_POST['contact_num'];
$query = $_POST['txt_area'];

echo "response---->".$response;

$mailStatus = "";
if ($response == 1) {
	$mailService = new MailService();
	$mailStatus = $mailService->sendBookingNotificationMail($name, $contactNumber, 
	$email, "", "", "", date("Y-m-d"));
}

echo 'mail---->'.$mailStatus;
require_once ("../view/confirmation.php");

?>
