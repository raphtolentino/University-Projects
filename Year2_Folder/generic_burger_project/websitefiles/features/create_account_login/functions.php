<?php
function isNameValid($name) {
	   if((!(empty($name))) && (!(preg_match("/\s[a-z]/i", "".$name)))) {
		$isValid = false;
		return $isValid;
	   }
	   else {
		   $isValid = true;
		   return $isValid;
	   }
	}
	function isAddress1Valid($address1) {
	if((!(empty($address1))) && (!(preg_match("/\s[a-z0-9]/i", "".$address1)))) {
		$isValid = false;
		return $isValid;
	}
	else {
		$isValid = true;
		return $isValid;
     }
	}
	function isAddress2Valid($address2) {
	if((!(empty($address1))) && (!(preg_match("/[a-z]/i", "".$address2)))) {
		$isValid = false;
		return $isValid;
	 }
	 else  {
		$isValid = true;
		return $isValid;
     }
	}
	function isAddress3Valid($address3) {
	if((!(empty($address3))) && (!(preg_match("/[a-z]/i", "".$address3)))) {
		$isValid = false;
		return $isValid;
	}
	else {
		$isValid = true;
		return $isValid;
    }
	}
	function isAddress4Valid($address4) {
	 if((!(empty($address4))) && (!(preg_match("/\s[A-Z0-9]/", "".$address4)))) {
		$addressErrorMessage4 = "Letters, numbers and whitespaces required";
		$isValid = false;
		return $isValid;
	 }
	 else {
		$isValid = true;
		return $isValid;
     }
	}
	function isEmailValid($email) {
	 if((!(empty($email))) && (!(filter_var($email, FILTER_VALIDATE_EMAIL)))) {
		$isValid = false;
		return $isValid;
	 }
	 else {
		$isValid = true;
		return $isValid;
     }
	}
	function isNumberValid($number) {
	 if((!(empty($number))) && (!(preg_match("/[0-9]/", "".$number))) && strlen("".$number) != 11) {
		$numberErrorMessage = "Numbers of length 11 required";
		$isValid = false;
		return $isValid;
	 }
	 else {
		$isValid = true;
		return $isValid;
	 }
	}
	function isPasswordValid($password) {
	 if((!(empty($password)) && strlen("".$password) < 8)) {
		 $isValid = false;
		 return $isValid;
     }
	 else if((!(empty($password))) && strlen("".$password) >= 8) {
		 $isValid = true;
		 return $isValid;
     }
	}
?>