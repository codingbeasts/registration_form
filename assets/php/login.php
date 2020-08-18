<?php

    session_start();

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con,'registration');

    $name=$_POST['username'];
    $pass=$_POST['password'];
    $s = "select username,password from signup where username ='$name' && password='$pass' ";

    $result = mysqli_query($con,$s);

    $num = mysqli_num_rows($result);
    if($num==1){
       header('location:homepage.php');
    }
    else{
       header('location:../../login&signup.php');
    }
?>