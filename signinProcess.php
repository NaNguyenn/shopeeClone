<?php

$email = $_POST['userEmail'];
$name = $_POST['userPassword'];

require 'admin/connect.php';

$sql = "select * from users
    where email = '$email' and password = '$password'";
    $users = mysqli_query($connect,$sql);
    $userRows = mysqli_num_rows($users);

    if($userRows == 1){
        session_start();
        $user = mysqli_fetch_array($users);
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];

        header('location:index.php');
        exit;
    }
    else{
        header('location:signin.php');
    }