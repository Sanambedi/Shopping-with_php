<?php
    include 'connection.php';
    $main=$_GET["request"];
    $sql = "SELECT * FROM `tabcart` WHERE id='".$main."'";
    $result =  mysqli_query($link,$sql);
    while($row = mysqli_fetch_array($result)){
		$k=$row["quantity"];
	}
    $k = $k+1;
	$sqlchanger = "UPDATE `tabcart` SET quantity='".$k."'  WHERE id='".$main."'";
	$resultchanger = mysqli_query($link,$sqlchanger);
    $sql1 = "SELECT * FROM `tabcart` WHERE id='".$main."'";
	$result1 = mysqli_query($link,$sql1);
    while($row1 = mysqli_fetch_array($result1)){
        echo '  <div class="entry value">
                <span id="demo">'.$row1["quantity"].'</span>
            </div>';
    }
    mysqli_close($link);
?>