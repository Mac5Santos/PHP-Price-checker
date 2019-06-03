<?php
	include 'header.php';
 	include 'functions.php';

?>

	<a href="read.php">Home</a>
    <br/><br/>
 
    <form action="functions.php?function=create" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Barcode</td>
                <td><input type="text" name="barcode"></td>
            </tr>
            <tr> 
                <td>Price</td>
                <td><input type="text" name="price"></td>
            </tr>
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
<?php

include 'footer.php'

?>