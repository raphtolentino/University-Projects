<?php
# This connects to the database
$conn = mysqli_connect("dragon.kent.ac.uk", "rm731", "0crawir", "rm731");
# This connects the CSS file
echo "<link rel='stylesheet' type='text/css' href='userHomePage.css'>";

# This gets the Menu Info from the database
$query = "SELECT * FROM menus WHERE id_type = 'desert';";

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../review/review.css">
    <title>Desert Menu</title>

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

        <h2>Desert Menu</h2>

        <!-- This shows the website nav buttons -->

        <div class='dropdown'>
            <a href="../../index.php"><button type="button " class="btn" window.location>Help Page</a>
            <a href="../create_account_login/login.php"><button type="button " class="btn" window.location>Login</a>
            <a href="../Help/help.html"><button type="button " class="btn" window.location>Home</a>
        </div>

        <!-- This shows the table -->
        <table class="table" type="table" mame="table">

            <tr>
                <td>Name</td>
                <th>Description</th>
                <th>Price</th>
                <th>Vegeterian</th>
                <th>Gluten Free</th>
                <th>Nutritional</th>
            </tr>
            <?php
            if (isset($_POST)) {

                $result  = $conn->query($query);

                while ($row = $result->fetch_assoc()) {

                    echo '<tr>';
                    echo '<td>' . $row["id_name"] . '</td>';
                    echo '<td>' . $row["id_description"] . '</td>';
                    echo '<td>' . $row["id_price"] . '</td>';
                    echo '<td>' . $row["id_vegeterian"] . '</td>';
                    echo '<td>' . $row["id_gluten"] . '</td>';
                    echo '<td>' . $row["id_nut"] . '</td>';
                    echo '</tr>';
                }
            }
            ?>

        </table>
    </div>
    </div>
    </div>


</html>