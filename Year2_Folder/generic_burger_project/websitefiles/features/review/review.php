<?php
session_start();
if(!(isset($_SESSION['username']))) {
	header('Location: http://raptor.kent.ac.uk/proj/co553m/project/c1-3/websitefiles/features/create_account_login/Login.php');
}
?>
<?php
# This connects to the database
$conn = mysqli_connect("dragon.kent.ac.uk", "rm731", "0crawir", "rm731");
# This connects the CSS file
echo "<link rel='stylesheet' type='text/css' href='userHomePage.css'>";
# This gets the Menu Info from the database
$query = "SELECT * FROM menus";
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="http://raptor.kent.ac.uk/proj/co553m/project/c1-3/websitefiles/features/home/css/homec.css">
  <title>Write a review</title>
</head>
<center>
  <!-- This is the company name -->
  <h1>Generic Burger Shack 🍔</h1>
  <!-- This is the searchbar code -->
  <form action = "http://raptor.kent.ac.uk/proj/co553m/project/c1-3/websitefiles/features/home/search_bar.php" method = "post">
    <input class = "search-box" placeholder = "Search Here" type = "text" name = "search">
    <button class="button" type="submit" action='search.php'>Search</button>
  </form>
</center>
<body>
  <!-- This is the website links -->
  <!--This links to the account dropdown menu-->
  <div style="float:right" class='dropdown'>
  <button class="aButton"><?php $user = $_SESSION['username']; echo $user; ?></button>
    <div class="dropdown-content">
      <a href="http://raptor.kent.ac.uk/proj/co553m/project/c1-3/websitefiles/features/editProfile/editProfile.php">Profile</a>
	  <a href="http://raptor.kent.ac.uk/proj/co553m/project/c1-3/websitefiles/features/create_account_login/Logout.php">Logout</a>
    </div>
  </div>
  <div style="float:right"  class="dropdown">
  <button class="aButton">
  <a style="text-decoration:none;color:black" href="http://raptor.kent.ac.uk/proj/co553m/project/c1-3/websitefiles/features/review/review.php">Write a review</a>
  </button>
  </div>
  <div style="float:right"  class="dropdown">
  <button class="aButton">
  <a style="text-decoration:none;color:black"  href="http://raptor.kent.ac.uk/proj/co553m/project/c1-3/websitefiles/features/create_account_login/help.html">Help Page</a>
  </button>
  </div>
  <div style="float:right"  class="dropdown">
  <button class="aButton">
  <a style="text-decoration:none;color:black" href="http://raptor.kent.ac.uk/proj/co553m/project/c1-3/websitefiles/features/basketpage/basketpage.html">Basket</a>
  </button>
  </div>     
  <br><br>
  <form action="database.php" method="Post">
  <textarea style="margin-top:5%;margin-left:25%;resize:none" id="review" placeholder="Post review here" name="theReview" rows="10" cols="80"></textarea><br>
  <input style="margin-left:64%;margin-top:2%;height:5%;width:5%" type="submit" value="Post">
  </form>
  
    
</body>
<footer>
</footer>
</html>