<?php
require_once 'db.php';
	if (isset($_GET['function'])) {
		if ($_GET['function']=='delete') deleteItem($_GET['id']);
		if ($_GET['function']=='update') updateItem();
		if ($_GET['function']=='create') createItem($_GET['id']);

}

function deleteItem($id){
	global $conn;
	$sql = "DELETE FROM `product` WHERE `product`.`id` = ".$id;

   	if ($conn->query($sql) === true) {
       header('Location: read.php');
   	}
}

function updateItem(){
	global $conn;
	if(isset($_POST['barcode']) && isset($_POST['price']) && isset($_POST['name'])){
		$sql = "UPDATE `product` SET `barcode` = '".$_POST['barcode']."', `price` = '".$_POST['price']."', `name` = '".$_POST['name']."' WHERE `product`.`id` = ".$_POST['id'].";";

	if ($conn->query($sql) === TRUE) {
    header("Location: read.php");
} 
}
}

function createItem(){
	global $conn;
	if(isset($_POST['name']) && isset($_POST['barcode']) && isset($_POST['price'])){


	$sql = "INSERT INTO `product` (`id`, `barcode`, `price`, `name`) VALUES (NULL, '".$_POST['barcode']."'  , '".$_POST['price']."' , '".$_POST['name']."')";

	if ($conn->query($sql) === TRUE) {

	header("Location: read.php");

}
}
}
?> 