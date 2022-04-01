<?php

if(empty($_POST['productName']) || 
    empty($_POST['productType']) ||
    empty($_POST['productPrice']) ||
    empty($_FILES['productImage']) ||
    empty($_POST['supplierId'])){
    header('location:productCreate.php');
}
else{
    $name = $_POST['productName'];
    $type = $_POST['productType'];
    $price = $_POST['productPrice'];
    $image = $_FILES['productImage'];
    $supplierId = $_POST['supplierId'];

    $targetDir = "img/";
    $fileExtension = explode('.', $image['name'])[1];
    $targetFile = $targetDir . $name . '_' . time() . '.' . $fileExtension;


    move_uploaded_file($image["tmp_name"], $targetFile);

    require 'connect.php';

    $sql = "insert into products(name,type,price,image,supplierId)
    values('$name','$type','$price','$targetFile','$supplierId')";

    mysqli_query($connect,$sql);

    header('location:index.php');
}