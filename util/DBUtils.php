<?php
require_once ("../constants/DBConstants.php");
require_once ("../messages/ErrorMessage.php");
require_once ("../messages/SuccessMessage.php");

class DBUtils {

	function getDBConnection() {

		$dbConstants = new DBConstants();
		$errorMessages = new ErrorMessage();
		$connection = mysql_connect($dbConstants->HOSTNAME, $dbConstants->MYSQLLOGIN, $dbConstants->MYSQLPASSWORD);
		if ($connection) {
			return $connection;
		} else
			return $errorMessages->DBConnectionExceptionMessage;
	} //function

	function getDB($connection) {
		$errorMessages = new ErrorMessage();
		$successMessages = new SuccessMessage();
		$dbConstants = new DBConstants();
		if ($connection != $errorMessages->DBConnectionExceptionMessage) {

			if (!mysql_select_db($dbConstants->DATABASE, $connection))
				return $errorMessages->DBAccessExceptionMessage;
			else
				return $successMessages->DBAccessSuccessMessage;
		}
	} //function

} //class
?>