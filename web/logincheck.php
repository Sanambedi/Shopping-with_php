<?php
    session_start();
    include "./connection.php";
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    $password = $_POST['password'];
    if(isset($_POST['button'])){
        $sqlcheck = "SELECT * FROM usertable where email='".$_POST['email']."' and password='".$_POST['password']."'";
        $result = mysqli_query($link,$sqlcheck);
        $count = mysqli_num_rows($result);
        if($count == 0){
            echo "Wrong Password";
            unset($_SESSION['uid']);
            session_destroy();
        }
        else{
            if($row=mysqli_fetch_array($result))
		    {
                $_SESSION['aid']= $row['id'];
                $_SESSION['uid']= $row['name'];
                $_SESSION['email']=$row['email'];
                $_SESSION['phoneNumber']=$row['phoneNumber'];
                $pip=$row['name'];
                header('location:index.php');
		    }
        }
    }
?>