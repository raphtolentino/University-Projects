<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome to the login page</title>
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
$anErrorMessage = "";
$username = "";
$password = "";
$aMessage = "";
$usernameErrorMessage = "";
$passwordErrorMessage = "";
if((!(empty($_POST['username']))) && (!(empty($_POST['password'])))) {
try {
      $dbhandle = new PDO('mysql:host=dragon.kent.ac.uk; dbname=rm731',
                          'rm731', '0crawir');
   } 
   catch (PDOException $e) {
      // The PDO constructor throws an exception if it fails
      die('Error Connecting to Database: ' . $e->getMessage());
   }
   
   $sql = "SELECT * FROM Customer";
   $query = $dbhandle->prepare($sql);
   if ( $query->execute() === FALSE ) {
      die('Error Running Query: ' . implode($query->errorInfo(),' ')); 
   }
   $results = $query->fetchAll();
   if(count($results) == 0) {
        $aMessage = "Invalid username and/or password. Please try again or to create an account please click here: <a href='http://raptor.kent.ac.uk/proj/co553m/project/c1-3/websitefiles/features/create_account_login/createAccount.php'>Create an account</a>";

	   
   }
   else if(count($results) > 0) {
	   foreach($results as $rows) {
		   if($_POST['username'] == $rows['Username'] && password_verify($_POST['password'], $rows['Password'])) {
			   $_SESSION['username'] = $_POST['username'];
			   $_SESSION['password'] = $_POST['password'];
			   header('Location: http://raptor.kent.ac.uk/proj/co553m/project/c1-3/websitefiles/features/home/userHomePage.php');
			   break;
			   
		   }
		   else {
		      $aMessage = "Invalid username and/or password. Please try again or to create an account please click here: <a href='http://raptor.kent.ac.uk/proj/co553m/project/c1-3/websitefiles/features/create_account_login/createAccount.php'>Create an account</a>";
		   }  $anErrorMessage = "* - This field is required";
	   }
   }
}
else if(empty($_POST['username']) && empty($_POST['password'])) {
	$anErrorMessage = "* - This field is required";
}
else {
	$anErrorMessage = "";
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
  
  var username = document.getElementsByTagName("INPUT")[0].value;
  var password = document.getElementsByTagName("INPUT")[1].value;
  
  if(username.length == 0 || password.length == 0) {
	  document.getElementsByTagName("INPUT")[2].disabled = true;
  }
  else if(username.length > 0 && password.length > 0) {
	  document.getElementsByTagName("INPUT")[2].disabled = false;
  }
}

	
</script>
<div style="margin-left:25%;margin-top:10%;background-color:white;height:350px;width:700px;padding-left:30px;padding-top:50px">
<h3>Login here:</h3>
<span class="starLabel">
<?php
echo $anErrorMessage;
?>
</span>
<form action="Login.php" method="Post">
<br>
<label>Username:</label>
<input style="height:30px;width:300px" type="text" name="username" onclick="message(1)" onkeypress="deleteMessage(1)" onkeyup="disEnButton()" value="<?php echo $username;?>"><label class="starLabel">*</label>
<br><br>
<label>Password:</label>
<input style="margin-left:3px;height:30px;width:300px" type="password" name="password" onclick="passMessage(2)" onkeypress="deleteMessage(2)" onkeyup="disEnButton()" value="<?php echo $password;?>"><label class="starLabel">*</label>
<br><br>
<input id="Button" style="margin-top:20px;margin-left:250px;height:30px;width:120px" type="submit" value="Login" disabled>
</form>
<br>
<?php
echo "<p style='font-size:20px;margin-left:30px' class='starLabel'><b>".$aMessage."</b></p>";
?>
</div>





</body>
</html>