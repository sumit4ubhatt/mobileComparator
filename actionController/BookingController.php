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

if (array_key_exists('action', $_POST) && $_POST['action'] != null)
	$action = $_POST['action'];
else
	if (array_key_exists('action', $_GET) && $_GET['action'] != null)
		$action = $_GET['action'];

$venueService = new VenueService();

if($action == "bookVenue") {
	$response = $venueService->bookVenue();
}

if($action == "bookNow") {
	$response = $venueService->bookNow();
}

$constants = new Constants();

$name = $_POST['name'];
$email = $_POST['email'];
$contactNumber = $_POST['contactNumber'];
$location = $_POST['venueId'];
$date = $_POST['date'];
$budget = $_POST['budget'];
$function = $_POST['function'];

$mailStatus = "";
if ($response == 1) {
	$mailService = new MailService();
	$mailStatus = $mailService->sendBookingNotificationMail($name, $contactNumber, $email, $location, $function, $budget, $date);
}

//echo $mailStatus;
require_once ("../view/confirmation.php");
?>
