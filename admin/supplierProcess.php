<?php

if(empty($_POST['supplierName']) || empty($_POST['supplierDescription'])){
    header('location:supplierCreate.php');
    exit;
}
else{
    $name = $_POST['supplierName'];
    $description = $_POST['supplierDescription'];

    require 'connect.php';

    $sql = "insert into suppliers(name,description)
    values('$name','$description')";

    mysqli_query($connect,$sql);

    header('location:index.php');
}