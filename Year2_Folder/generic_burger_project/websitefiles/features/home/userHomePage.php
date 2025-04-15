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
  <link rel="stylesheet" href="homec.css">
  <title>Generic Burger Shack</title>
</head>

<center>
  <!-- This is the company name -->

  <h1>Generic Burger Shack 🍔</h1>

  <!-- This is the searchbar code -->

  <form action = "searchBar.php" method = "post">
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
  <a style="text-decoration:none;color:black"  href="http://raptor.kent.ac.uk/proj/co553m/project/c1-3/websitefiles/features/Help/help.html">Help Page</a>
  </button>
  </div>
  <div style="float:right"  class="dropdown">
  <button class="aButton">
  <a style="text-decoration:none;color:black" href="http://raptor.kent.ac.uk/proj/co553m/project/c1-3/websitefiles/features/basketpage/basketpage.html">Basket</a>
  </button>
  </div>     
  <br><br>
  <!--This links to the website page-->

    <!-- This hyperlink send the user to mains -->

    <a href="mainSearch/main.php"><button type="button" class="block">Mains</button></a>
      <!-- This hyperlink send the user to sides -->

      <a href="side/side.php"><button type="button" class="block">Sides</button></a>
        <!-- This hyperlink send the user to drinks -->

        <a href="drinks/drinks.php"><button type="button" class="block">Drinks</button></a>
          <!-- This hyperlink send the user to desserts -->

          <a href="desert/desert.php"><button type="button" class="block">Dessert</button></a>

            <div class="body">

            </div>
</body>

<footer>

</footer>
</html>