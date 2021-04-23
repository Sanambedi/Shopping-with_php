<?php
include "connection.php";
$sqlchecker = "SELECT * FROM `tabcart` WHERE customer_id='".$_POST['customer_id']."' AND product_id='".$_POST['productid']."'";
$result1 =  mysqli_query($link,$sqlchecker);
$count = mysqli_num_rows($result1);
if($count!=0){
	$sql2 = "SELECT quantity FROM `tabcart` WHERE customer_id='".$_POST['customer_id']."' AND product_id='".$_POST['productid']."'";
	$result2 = mysqli_query($link,$sql2);
	while($row2 = mysqli_fetch_array($result2)){
		$k=$row2["quantity"];
	}
	$k = $k+1;
	$sql3 = "UPDATE tabcart SET quantity='".$k."'  WHERE customer_id='".$_POST['customer_id']."' AND product_id='".$_POST['productid']."'";
	$result3 = mysqli_query($link,$sql3);
	
}
else{
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
	}
?>