<?php
class DBSourceException extends Exception{
	
	public function errorMessage(){
		
		date_default_timezone_set('Asia/Calcutta');
		$errorMsg =  date(DATE_RFC822).": ".'Error on line '.$this->getLine().' in '."\"".$this->getFile()."\". "
		.$this->getMessage()."\n";
		
		return $errorMsg;
	}
}
?>