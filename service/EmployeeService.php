<?php
require_once("../database/GetYourVenueMySQLManager.php");
require_once("../model/Employee.php");

class EmployeeService{

	function addEmployee(){
		
		 $getYourVenueMySQLManager = new GetYourVenueMySQLManager();
		 $employeeInfo = new Employee();
		 $employeeInfo->setEmail($_POST['employeeEmail']);
		 $employeeInfo->setName($_POST['employeeName']);
		 $result=$getYourVenueMySQLManager->addNewUser($employeeInfo);
		 
		 if($result==1) echo "Records has been successfully added"; 
		 else echo "unable to save records";
	}//function
}//class

?>