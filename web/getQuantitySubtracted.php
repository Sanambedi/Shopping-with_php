<?php
    include 'connection.php';
    $main=$_GET["request"];
    $sql = "SELECT * FROM `tabcart` WHERE id='".$main."'";
    $result =  mysqli_query($link,$sql);
    while($row = mysqli_fetch_array($result)){
		$k=$row["quantity"];
        $price = $row["price"];
	}
    if($k>1){
        $k = $k-1;
    }
    $r= $k * $price;
	$sqlchanger = "UPDATE `tabcart` SET quantity='".$k."', amount='".$r."' WHERE id='".$main."'";
    $resultchanger = mysqli_query($link,$sqlchanger);
    $sql1 = "SELECT * FROM `tabcart` WHERE id='".$main."'";
	$result1 = mysqli_query($link,$sql1);
    while($row1 = mysqli_fetch_array($result1)){
        echo $row1["quantity"];
    }
    mysqli_close($link);
?>