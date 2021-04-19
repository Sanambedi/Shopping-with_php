<?php
include "connection.php";
header("location:google.com");
$sqlchecker = "SELECT * FROM 'tabcart' WHERE customer_id='".$_POST['customer_id']."' AND product_id='".$_POST['productid']."'";
$result1 =  mysqli_query($link,$sqlchecker);
$count = mysqli_num_rows($result1);
if($count!=0){
	$sql2 = "SELECT quantity FROM `tabcart` WHERE customer_id='".$_POST['customer_id']."' AND product_id='".$_POST['productid']."'";
	$result2 = mysqli_query($link,$sql2);
	$result2 = $result2+1;
	$sql3 = "UPDATE tabcart SET quantity='40'  WHERE customer_id=1 AND product_id=2";
	$result3 = mysqli_query($link,$sql3);
}
// $sql = "INSERT INTO tabcart(productName,customer_id,product_id,quantity,date,price,image)
// 		VALUES('$_POST[productName]',
// 		'$_POST[customer_id]',
// 		'$_POST[productid]',
// 		'$_POST[quantity]',
// 		NOW(),
// 		'$_POST[price]',
// 		'$_POST[image]')";
// 		if(!mysqli_query($link, $sql)){
// 			die('error:'.mysqli_error($link));
// 		}

// ?>