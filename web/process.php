<?php
include "connection.php";
$sql = "INSERT INTO tabcart(customer_id,product_id,quantity,date,price)
		VALUES('$_POST[customer_id]',
		'$_POST[productid]',
		'$_POST[quantity]',
		NOW(),
		'$_POST[price]')";
		if(!mysqli_query($link, $sql)){
			die('error:'.mysqli_error($link));
		}

?>