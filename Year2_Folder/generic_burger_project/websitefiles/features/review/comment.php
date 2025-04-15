<?php
# This connects to the database
$conn = mysqli_connect("dragon.kent.ac.uk", "rm731", "0crawir", "rm731");
# This connects the CSS file
echo "<link rel='stylesheet' type='text/css' href='userHomePage.css'>";
# This gets the Menu Info from the database
$query = "SELECT * FROM Review";
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="review.css">
  <title>Write a review</title>

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title> Menu Options</title>
  </head>

<body>
  <div class='container'>

    <!-- This is the company name -->

    <h1>Generic Burger Shack 🍔</h1>

    <!-- This is the webpage name -->

    <h2>Your Reviews</h2>

    <!-- This shows the website nav buttons -->

    <div class='dropdown'>
      <a href="../../index.php"><button type="button " class="btn" window.location>Help Page</a>
      <a href="../create_account_login/login.php"><button type="button " class="btn" window.location>Login</a>
      <a href="../../index.php"><button type="button " class="btn" window.location>Home</a>
    </div>

    <form method="POST"></form>

    <div class="body">

      <table class="table" type="table" mame="table">

        <tr>
          <td>User Login</td>
          <th>Your Review</th>
          <th>Date of the Review</th>
        </tr>
        <?php
        if (isset($_POST)) {

          $result  = $conn->query($query);

          while ($row = $result->fetch_assoc()) {

            echo '<tr>';
            echo '<td>' . $row["Username"] . '</td>';
            echo '<td>' . $row["Post"] . '</td>';
            echo '<td>' . $row["PostedOn"] . '</td>';

            echo '</tr>';
          }
        }
        ?>

      </table>
    
    </div>
  </div>
      </div>
</body>
</html>
