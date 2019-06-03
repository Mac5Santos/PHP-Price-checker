<?php
    include 'header.php';
    include 'functions.php';

$sql = "SELECT * FROM `product` WHERE `id` = ".$_GET['id'] . "";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<form action= "functions.php?function=update" method="post">';
        echo 'Barcode: <input type= "text" name= "barcode" value="'.$row['barcode'].'"><br>';
        echo 'Price: <input type= "text" name= "price" value="'.$row['price'].'"><br>';
        echo 'Name: <input type= "text" name= "name" value="'.$row['name'].'"><br>';
        echo '<input type= "hidden" name= "id" value="'.$row['id'].'"><br>';
        echo '<input type= "submit" value= "Update product">';
        echo '</form>';
        }
} 
$conn->close();

?>
<?php

include 'footer.php'

?>