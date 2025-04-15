<!DOCTYPE html>
<html>
<head>
<title>Create an account</title>
<style>
.starLabel {
	color: red
}
body {
	background-color: rgb(131, 203, 232);
}
label, span {
	font-size: 20px
}
</style>
</head>
<body>
<?php
include 'functions.php';
$name = "";
$address1 = "";
$address2 = "";
$address3 = "";
$address4 = "";
$email = "";
$number = "";
$username = "";
$password = "";
$isValid = true;

$nameErrorMessage = "";
$passwordErrorMessage = "";
$emailErrorMessage = "";
$numberErrorMessage = "";
$usernameErrorMessage = "";
$addressErrorMessage1 = "";
$addressErrorMessage2 = "";
$addressErrorMessage3 = "";
$addressErrorMessage4 = "";

$errorMessage = "";

$isMatch = true;
$Message = "";

if((!(empty($_POST['name']))) && (!(empty($_POST['address1']))) && (!(empty($_POST['address2']))) && (!(empty($_POST['address3']))) && (!(empty($_POST['address4']))) && (!(empty($_POST['email']))) && (!(empty($_POST['phoneNumber']))) &&  (!(empty($_POST['username']))) && (!(empty($_POST['password'])))) {
	/* $customer = $_POST['customer'];
    $theName = $customer['name'];
    $theAddress1 = $customer['address1']; 
    $theAddress2 = $customer['address2']; 
    $theAddress3 = $customer['address3']; 
    $theAddress4 = $customer['address4']; 
    $theAddress = $theAddress1.",".$theAddress2.",".$theAddress3.",".$theAddress4;
    $thePostCode = $customer['address4'];
    $theEmail = $customer['email'];
    $theNumber = $customer['phoneNumber'];
    $theUsername = $customer['username'];
    $thePassword = $customer['password']; */
	$name = $_POST['name'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $address3 = $_POST['address3'];
    $address4 = $_POST['address4'];
	$postCode = $_POST['address4'];
    $email = $_POST['email'];
    $number = $_POST['phoneNumber'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
     if((isNameValid($name) == true) && (isAddress1Valid($address1) == true) && (isAddress2Valid($address2) == true) && (isAddress3Valid($address3) == true) && (isAddress4Valid($address4) == true) && (isEmailValid($email) == true) && (isNumberValid($number) == true) && (isPasswordValid($password) == true)) {
	  // Connect to database, and print error message if it fails
       try {
      $dbhandle = new PDO('mysql:host=dragon.kent.ac.uk; dbname=rm731',
                          'rm731', '0crawir');
   } 
   catch (PDOException $e) {
      // The PDO constructor throws an exception if it fails
      die('Error Connecting to Database: ' . $e->getMessage());
   }
   
   $selectSql = "SELECT * FROM Customer";
   $selectQuery = $dbhandle->prepare($selectSql);
   if ( $selectQuery->execute() === FALSE ) {
      die('Error Running Query: ' . implode($selectQuery->errorInfo(),' ')); 
   }
   $results = $selectQuery->fetchAll();
    if(count($results) > 0) {
	   foreach($results as $rows) {
		   if($email == $rows['Email'] || $number == $rows['Phonenumber'] || $username == $rows['Username']) {
			   $isMatch = true;
			   break;
		   }
		   else {
			    $isMatch = false;
		   
           }
      }
	 if($isMatch == true) {
		 $errorMessage = "A user has already created an account with this username, email and/or phone number. Please try again.";
		 $name = "";
         $address1 = "";
         $address2 = "";
         $address3 = "";
         $address4 = "";
         $email = "";
         $number = "";
         $username = "";
         $password = "";
		 $Message = "* - This field is required";
	 }
	 else if($isMatch == false) {
		 //Run the SQL query, and print error message if it fails.
                $sql = "INSERT INTO Customer (Fullname, AddressLine1, AddressLine2, AddressLine3, Postcode, Email, Phonenumber, Username, Password) 
                         VALUES('$name', '$address1', '$address2', '$address3', '$postCode', '$email', '$number', '$username', '$hashedPassword')";
	
                $query = $dbhandle->prepare($sql);
   
                if ( $query->execute() === FALSE ) {
                      die('Error Running Query: ' . implode($query->errorInfo(),' ')); 
                }
		
                 // Put the results into a nice big associative array
  
                 ?>
	             <script type="text/javascript">
	              document.body.style.visibility = "hidden";
	             </script>
	             <?php
	              echo "<p style='font-size:30px;margin-left:400px;margin-top:300px;visibility:visible'>You have created an account. To login please click here:</p><a href='http://raptor.kent.ac.uk/proj/co553m/project/c1-3/websitefiles/features/create_account_login/Login.php' style='font-size:30px;margin-left:700px;margin-top:200px;visibility:visible'>Login</a>";

	 }
   }
   if(count($results) == 0){
  
//Run the SQL query, and print error message if it fails.
   $sql = "INSERT INTO Customer (Fullname, AddressLine1, AddressLine2, AddressLine3, Postcode, Email, Phonenumber, Username, Password) 
           VALUES('$name', '$address1', '$address2', '$address3', '$postCode', '$email', '$number', '$username', '$hashedPassword')";
	
   $query = $dbhandle->prepare($sql);
   
   if ( $query->execute() === FALSE ) {
      die('Error Running Query: ' . implode($query->errorInfo(),' ')); 
   }
		
   // Put the results into a nice big associative array
  
   // Printing out the course details in the array results
   ?>
	  <script type="text/javascript">
	  document.body.style.visibility = "hidden";
	  </script>
	  <?php
	  echo "<p style='font-size:30px;margin-left:400px;margin-top:300px;visibility:visible'>You have created an account. To login please click here:</p><a href='http://raptor.kent.ac.uk/~pm476/Login.php' style='font-size:30px;margin-left:700px;margin-top:200px;visibility:visible'>Login</a>";

   }
 
 }
 else {
	 if(isNameValid($name) == true) {
	  $nameErrorMessage = "";
	  $name = $_POST['name'];
  }
  else if(isNameValid($name) == false) {
	  $nameErrorMessage = "Letters and whitespaces required";
	  $name = "";
  }
  if(isAddress1Valid($address1) == true) {
	  $addressErrorMessage1 = "";
      $address1 = $_POST['address1'];
  }
  else if(isAddress1Valid($address1) == false) {
	  $addressErrorMessage1 = "Letters, numbers and whitespaces required";
	  $address1 = "";
  }
  if(isAddress2Valid($address2) == true) {
	  $addressErrorMessage2 = "";
	  $address2 = $_POST['address2'];;
  }
  else if(isAddress2Valid($address2) == false) {
	  $addressErrorMessage2 = "Letters and/or whitespaces required";
	  $address2 = "";
  }
  if(isAddress3Valid($address3) == true) {
	  $addressErrorMessage3 = "";
	  $address3 = $_POST['address3'];
  }
  else if(isAddress3Valid($address3) == false) {
	  $addressErrorMessage3 = "Letters and/or whitespaces required";
	  $address3 = "";
  }
  if(isAddress4Valid($address4) == true) {
	  $addressErrorMessage4 = "";
	  $address4 = $_POST['address4'];;
  }
  else if(isAddress4Valid($address4) == false) {
	  $addressErrorMessage4 = "Letters, numbers and whitespaces required";
	  $address4 = "";
  }
  if(isEmailValid($email) == true) {
	  $emailErrorMessage = "";
	  $email = $_POST['email'];
  }
  else if(isEmailValid($email) == false) {
	  $emailErrorMessage = "Letters and '@' required";
	  $email = "";
  }
  if(isNumberValid($number) == true) {
	  $numberErrorMessage = "";
	  $number = $_POST['phoneNumber'];
  }
  else if(isNumberValid($number) == false) {
	  $numberErrorMessage = "Numbers of length 11 required";
	  $number = "";
  }
  if(isPasswordValid($password) == true) {
	  $passwordErrorMessage = "";
	  $password = $_POST['password'];
  }
  else if(isPasswordValid($password) == false) {
	  $passwordErrorMessage = "Minimum of 8 characters required";
	  $password = "";
  }
  $username = $_POST['username'];
  $Message = "* - This field is required";
 }
}
else if((empty($_POST['name'])) && (empty($_POST['address1'])) && (empty($_POST['address2'])) && (empty($_POST['address3'])) && (empty($_POST['address4'])) && (empty($_POST['email'])) && (empty($_POST['phoneNumber'])) &&  (empty($_POST['username'])) && (empty($_POST['password']))) { 
	$Message = "* - This field is required";
}

?>
<script type="text/javascript">
function message(num) {	
			document.getElementsByClassName("starLabel")[num].innerHTML = "*Letters and/or whitespaces required";
}
function anotherMessage(num) {	
			document.getElementsByClassName("starLabel")[num].innerHTML = "*Letters, numbers and whitespaces required";
}
function emailMessage(num) {	
			document.getElementsByClassName("starLabel")[num].innerHTML = "*Letters and '@' required";
}
function numberMessage(num) {	
			document.getElementsByClassName("starLabel")[num].innerHTML = "*Numbers of length 11 required";
}
function passMessage(num) {	
			document.getElementsByClassName("starLabel")[num].innerHTML = "*Minimum of 8 characters required";
}

function deleteMessage(num) {
	
	document.getElementsByClassName("starLabel")[num].innerHTML = "*";
	document.getElementById("Button").disabled = false;
}

function disEnButton() {
  var name = document.getElementsByTagName("INPUT")[0].value;
  var address1 = document.getElementsByTagName("INPUT")[1].value;
  var address2 = document.getElementsByTagName("INPUT")[2].value;
  var address3 = document.getElementsByTagName("INPUT")[3].value;
  var address4 = document.getElementsByTagName("INPUT")[4].value;
  var email = document.getElementsByTagName("INPUT")[5].value;
  var phoneNumber = document.getElementsByTagName("INPUT")[6].value;
  var username = document.getElementsByTagName("INPUT")[7].value;
  var password = document.getElementsByTagName("INPUT")[8].value;
  
  if(name.length == 0 || address1.length == 0 || address2.length == 0 || address3.length == 0 || address4.length == 0 || email.length == 0 || phoneNumber.length == 0 || username.length == 0 || password.length == 0) {
	  document.getElementsByTagName("INPUT")[9].disabled = true;
  }
  else if(name.length > 0 && address1.length > 0 && address2.length > 0 && address3.length > 0 && address4.length > 0 && email.length > 0 && phoneNumber.length > 0 && username.length > 0 && password.length > 0) {
	  document.getElementsByTagName("INPUT")[9].disabled = false;
  }
}

	
</script>
<div style="background-color:white;padding-left:20px;margin-left:50px;margin-right:50px;margin-top:20px;margin-down:50px">
<h1>Create Account</h1>

<span id="span1" class="starLabel">
<?php
echo $Message;
?>
</span>
<form action="createAccount.php" method="post">
<br>
<div>
<label>Full Name:</label>
<input style="margin-left:50px;height:30px;width:400px" type="text" name="name" onclick="message(1)" onkeypress="deleteMessage(1)" onkeyup="disEnButton()" value="<?php echo $name;?>"><label class="starLabel">*<?php echo $nameErrorMessage;?></label>
</div>
<br><br>
<div>
<label>Address:</label>
<input style="margin-left:70px;height:30px;width:400px" type="text" name="address1" onclick="anotherMessage(2)" onkeypress="deleteMessage(2)" onkeyup="disEnButton()" value="<?php echo $address1;?>"><label class="starLabel">*<?php echo $addressErrorMessage1;?></label><br><br>
<input style="margin-left:146px;height:30px;width:400px" type="text" name="address2" onclick="message(3)" onkeypress="deleteMessage(3)" onkeyup="disEnButton()" value="<?php echo $address2;?>"><label class="starLabel">*<?php echo $addressErrorMessage2;?></label><br><br>
<input style="margin-left:146px;height:30px;width:400px" type="text" name="address3" onclick="message(4)" onkeypress="deleteMessage(4)" onkeyup="disEnButton()" value="<?php echo $address3;?>"><label class="starLabel">*<?php echo $addressErrorMessage3;?></label><br><br>
<label>Post code:</label>
<input style="margin-left:60px;height:30px;width:400px" type="text" name="address4" onclick="anotherMessage(5)" onkeypress="deleteMessage(5)" onkeyup="disEnButton()" value="<?php echo $address4;?>"><label class="starLabel">*<?php echo $addressErrorMessage4;?></label><br><br>
</div>
<br><br>
<div>
<label>Email:</label>
<input style="margin-left:90px;height:30px;width:400px" type="text" name="email" onclick="emailMessage(6)" onkeypress="deleteMessage(6)" onkeyup="disEnButton()" value="<?php echo $email;?>"><label class="starLabel">*<?php echo $emailErrorMessage;?></label>
</div>
<br><br>
<div>
<label>Phone number:</label>
<input style="margin-left:22px;height:30px;width:400px" type="text" name="phoneNumber" onclick="numberMessage(7)" onkeypress="deleteMessage(7)" onkeyup="disEnButton()" value="<?php echo $number;?>"><label class="starLabel">*<?php echo $numberErrorMessage;?></label>
</div>
<br><br>
<div>
<label>Create Username:</label>
<input style="height:30px;width:400px" type="text" name="username" onkeypress="deleteMessage(8)" onkeyup="disEnButton()" value="<?php echo $username;?>"><label class="starLabel">*<?php echo $usernameErrorMessage;?></label>
</div>
<br><br>
<div>
<label>Create Password:</label>
<input style="margin-left:3px;height:30px;width:400px" type="password" name="password" onclick="passMessage(9)" onkeypress="deleteMessage(9)" onkeyup="disEnButton()" value="<?php echo $password;?>"><label class="starLabel">*<?php echo $passwordErrorMessage;?></label>
</div>
<br><br>
<input id="Button" style="margin-left:520px;height:30px;width:120px" type="submit" value="Create account" disabled >
</form>
<br><br>
<span id="span2" class="starLabel">
<b>
<?php
echo $errorMessage;
?>
</b>
</span>
</div>

</body>
</html>