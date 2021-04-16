<?php
include "connection.php";
$sql = "INSERT INTO tabcart(productName,customer_id,product_id,quantity,date,price,image)
		VALUES('$_POST[productName]',
		'$_POST[customer_id]',
		'$_POST[productid]',
		'$_POST[quantity]',
		NOW(),
		'$_POST[price]',
		'$_POST[image]')";
		if(!mysqli_query($link, $sql)){
			die('error:'.mysqli_error($link));
		}

?>