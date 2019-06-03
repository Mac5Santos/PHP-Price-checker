<?php 
 include 'header.php';
 include 'functions.php';

$sql = "SELECT * FROM `product`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>Barcode</th>";
	echo "<th>Name</th>";
	echo "<th>Price</th>";
	echo "<th>Actions</th>";
	echo "</tr>";
	// output data of each row
	while($row = $result->fetch_assoc()) {	

		echo "<tr>";
		echo "<td>" . $row['barcode'] . "</td>";
		echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['price'] . "</td>";
		echo '<td>
			<a href="update.php?id='.$row['id'].'"><img src="images/update.png"></a> |<a href="functions.php?function=delete&id='.$row['id'].'"><img src="images/delete.png"></a>
		</td>';
		echo "</tr>";
	}
	echo "</table>";
} else {
	echo "not found";
}
$conn->close();

?>
<a href='create.php'id="myButton">Add new item</a>

<?php

include 'footer.php'

?>
