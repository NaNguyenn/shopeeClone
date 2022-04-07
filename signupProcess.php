<?php

if(empty($_POST['userName']) || 
    empty($_POST['userEmail']) || 
    empty($_POST['userPassword'])){
    header('location:signup.php');
    exit;
}
else{
    $name = $_POST['userName'];
    $email = $_POST['userEmail'];
    $name = $_POST['userPassword'];

    require 'admin/connect.php';
    $sql = "select count(*) from users
    where email = '$email'";
    $duplication = mysqli_query($connect,$sql);
    $duplicatedRows = mysqli_fetch_array($duplication)['count(*)'];

    if($duplicatedRows == 1){
        header('location:signup.php');
        exit;
    }
    else{
        $sql = "insert into users(name,email,password)
        values('$name','$email','$password')";
        mysqli_query($connect,$sql);

        $sql = "select id from users
        where email = '$email'";
        $result = mysqli_query($connect,$sql);
        $id = mysqli_fetch_array($result)['id'];

        session_start();
        $_SESSION['id'] = $id; 
        $_SESSION['name'] = $name;

        header('location:index.php');
    }
}