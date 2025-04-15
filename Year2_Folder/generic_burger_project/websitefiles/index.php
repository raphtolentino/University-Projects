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

<!doctype html>
<html>

<head>
  <link rel="stylesheet" href="">
  <title>Generic's Burger Shack</title>

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="features/Home/css/homec.css">
    <title>Generic Burger Shack</title>
  </head>


<body>
  <div class='container'>
    <!-- This is the company name -->

    <h1>Generic Burger Shack 🍔</h1>

    <!-- This is the webpage name -->

    <h2>Homepage</h2>


    <!-- This is the searchbar code -->

    <form action="features/home/search_bar.php" method="post">
      <input class="search-box" placeholder="Search Here" type="text" name="search">
      <button class="button" type="submit" action='search.php'>Search</button>
    </form>

    <!-- This is the buttons code -->

    <div class='dropdown'>
      <a href="features/review/review.php"><button type="button " class="btn" window.location>Login</a>
      <a href="features/review/comment.php"><button type="button " class="btn" window.location>Reviews</a>
      <a href="features/Help/help.html"><button type="button" class="btn" window.location>Help Page</a>

    </div>
    <!--This links to the website page-->

    <!-- This hyperlink send the user to mains -->

    <a href="features/home/search_main.php"><button type="button" class="block">Mains</a>
    <!-- This hyperlink send the user to sides -->

    <a href="features/home/search_side.php"><button type="button" class="block">Sides</a>
    <!-- This hyperlink send the user to drinks -->

    <a href="features/home/search_drinks.php"><button type="button" class="block">Drinks</a>
    <!-- This hyperlink send the user to desserts -->

    <a href="features/home/search_desert.php"><button type="button" class="block">Dessert</a>
  </div>
</body>















</html>