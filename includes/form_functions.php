<?php

function checkRequiredFields($requiredArray){
	$fieldErrors = array();
	foreach($requiredArray as $arrayElement){
		if(!isset($_POST[$arrayElement])||empty($_POST[$arrayElement])){
			$fieldErrors[]=$arrayElement;
		}
	}
	return $fieldErrors;
}

function checkMaxFieldLength($requiredArray){
	$fieldErrors = array();
	foreach($requiredArray as $field => $maxLength){
		if(strlen(trim($field))>$maxLength){
			$fieldErrors[]=$field;
		}
	}
	return $fieldErrors;
}

function displayErrors($errorArray){
	if(isset($errorArray)){
		echo "<ul>";
		foreach($errorArray as $error){
			echo "<p>Please review following area!</p>";
			echo "<li>".$error."</li>";
		}
		echo "</ul>";
	}
}

?>