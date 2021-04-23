<?php
    $main=$_GET["request"];
    include'connnection.php';
    $sql = "SELECT * FROM `tabcart` WHERE id='".$main."'";
    $result =  mysqli_query($link,$sql);
    while($row = mysqli_fetch_array($result)){
		$k=$row["quantity"];
	}
    $k = $k+1;
	$sqlchanger = "UPDATE tabcart SET quantity='".$k."'  WHERE id='".$main."'";
	$resultchanger = mysqli_query($link,$sqlchanger);
    echo '  <div class="entry value">
                <span id="demo">'.$row["quantity"].'</span>
            </div>';
    mysqli_close($link);
?>