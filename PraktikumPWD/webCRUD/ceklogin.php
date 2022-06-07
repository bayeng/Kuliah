<?php

    session_start();
    include "connect.php";
    $username = $_POST['uname'];
    $password = $_POST['pwd'];

    $login = mysqli_query($db,"SELECT * FROM user WHERE  username='$username' and password='$password' ");
    $cek = mysqli_num_rows($login);
    if($cek > 0){
        $_SESSION['username'] = $username;
        header("location:index.php");
    }else{
        header("location:login.php?pesan=gagal");
    }


?>