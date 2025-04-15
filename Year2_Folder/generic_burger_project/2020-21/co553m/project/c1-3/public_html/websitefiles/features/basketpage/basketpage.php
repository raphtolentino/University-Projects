<?php
$conn = mysqli_connect("dragon.kent.ac.uk", "rm731", "0crawir", "rm731");
?>

<!doctype html>
<html lang="en-US">
<head>
<title>Basket</title>
</head>
<body>
<script>
    function SomeDeleteRowFunction(o) {
     //This is the function that will run the button to remove an item for your basket
     var p=o.parentNode.parentNode;
         p.parentNode.removeChild(p);
    }
	function ClearAll(){
	//This will clear the table to empty your basket
	var Table = document.getElementById("mytable");
	Table.innerHTML = "";
	}
</script>
<form name="Basket">
    <div id="items_table">
        <h2>Basket</h2>
		<!-- Will generate a tr element for each itm in the basket but current don't know how it will be passed -->
        <table id="list">
		<tr><th>Item Name</th><th>Price</th><th>Delete Item</th></tr>
		<?php
		if (isset($_POST)) {


                $query = "SELECT * FROM menus";

                $result  = $conn->query($query);

                echo "Menu";
                echo "<table width = '100%' border= '1px'";
                echo '<tr>';
                echo '<th>Name</th>';
                echo '<th>Description</th>';
                echo '<th>Price</th>';
                echo '<th>Vegeterian</th>';
                echo '<th>Gluten</th>';
                echo '<th>Nutritional</th>';
                echo '</tr>';

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
                echo "</table>";
            }

            ?>

		
		<tr><td>burger</td><td>5.99</td></tr>
		
		
		</table>
		
        <label><input type="button" value="Clear" onclick="ClearAll()">
        Clear Basket</label>
    </div>
	<!-- Opens the checkout page -->
	</br>
	<a href="http://raptor.kent.ac.uk/proj/co553m/project/c1-3/websitefiles/features/Checkout/Html_forms_checkout.html" class="button">Proceed to checkout</a> </br>
	<a href="http://raptor.kent.ac.uk/proj/co553m/project/c1-3/websitefiles/features/create_account_login/Login.php" class="button">Login to account</a> </br>
	<a href="http://raptor.kent.ac.uk/proj/co553m/project/c1-3/websitefiles/features/Menu/menus.php" class="button">Return to menu</a> </br>
</form>
</body>
