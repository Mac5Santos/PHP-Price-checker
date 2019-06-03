<html>
<head>
	<title>Price Checker</title>
	<link href="style.css" rel="stylesheet">
</head>	
<body>
	<img src="images/logo.png">
	<div id="form">
		<form action="index.php" method="post">
			<h1>Scan your product</h1>
			<input type="text" name="barcode" autofocus="" us>
			<input type="submit" name="Check Price">
		</form>
	</div>
	<div id="product">
<?php 

if (isset($_POST["barcode"])){

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_pricechecker";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `product` WHERE `barcode` = '" . $_POST['barcode'] . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {	

	echo '<img src="' .$row['picture'].'">';
	echo '<h1>' .$row['name']. '</h1>';
	echo '<h1>' .$row['price']. '</h1>';
}
}else {
	echo "not found";
}
$conn->close();
}
?>

</div>	
</body>	
</html>