<?php

if(empty($_POST['productName']) || 
    empty($_POST['productType']) ||
    empty($_POST['productPrice']) ||
    empty($_POST['supplierId'])){
    header('location:productCreate.php');
    exit;
}
else{
    $id = $_POST['productId'];
    $name = $_POST['productName'];
    $type = $_POST['productType'];
    $price = $_POST['productPrice'];
    $imageNew = $_FILES['productImageNew'];
    if($imageNew['size'] > 0){
        $targetDir = "img/";
        $fileExtension = explode('.', $imageNew['name'])[1];
        $targetFile = $targetDir . $name . '_' . time() . '.' . $fileExtension;


        move_uploaded_file($imageNew["tmp_name"], $targetFile);
    } else {
        $imageOld = $_POST['productImageOld'];
        
        $targetFile = $imageOld;
    }
    
    $supplierId = $_POST['supplierId'];

    

    require 'connect.php';

    $sql = "update products 
    set
    name = '$name',
    type = '$type',
    price = '$price',
    image = '$targetFile',
    supplierId = '$supplierId'
    where 
    id = '$id'
    ";

    mysqli_query($connect,$sql);

    header('location:index.php');
}