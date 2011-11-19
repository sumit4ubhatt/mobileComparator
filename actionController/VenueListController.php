<?php
require_once ("../service/VenueService.php");
require_once ("../constants/Constants.php");

if (array_key_exists('action', $_POST) && $_POST['action'] != null)
	$action = $_POST['action'];
else
	if (array_key_exists('action', $_GET) && $_GET['action'] != null)
		$action = $_GET['action'];

if ($action == "searchVenue") {
	
	$region=$_GET["region"];
	$category=$_GET["category"];
	$capacity=$_GET["capacity"];
	
	echo $region.$category.$capacity;
	
	/*$venueService = new VenueService();
	$venueList = $venueService->searchVenue();
	$regionName = $venueService->getRegion();
	$categoryName = $venueService->getCategory();
	$capacityValue = $venueService->getCapacity();*/
	//$totalCount = $venueService->geTotalDataCount();TODO
	//require_once ("venue-results/(.*)/(.*)/(.*)");
}
?>