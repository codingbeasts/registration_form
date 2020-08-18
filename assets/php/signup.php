<?php

    session_start();

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con,'registration');

    $name=$_POST['username'];
    $pass=$_POST['password'];
    $email=$_POST['email'];
    $s = "select username from signup where username ='$name' ";

    $result = mysqli_query($con,$s);

    $num = mysqli_num_rows($result);
    if($num==1){
        echo " Username is already taken ";
    }
    else{
        $reg = "insert into signup(username,email, password) values ('$name','$email','$pass')";
        mysqli_query($con,$reg);

        echo "Signup done. Please proceed to login page";

    }
?>