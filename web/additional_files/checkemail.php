<?php
    $varEmail = $_GET["email"];
    include"../connection.php";
    echo $sql="SELECT * FROM usertable where email = '$varEmail'";
    $result = mysqli_query($link,$sql);
    $count=mysqli_num_rows($result);
    if($count!=0){
        if($row=mysqli_fetch_array($result)){
            echo "<b> $varEmail is already taken";
        }
    }
    mysqli_close($link)
?>