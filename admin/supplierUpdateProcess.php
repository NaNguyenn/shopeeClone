<?php

    $id = $_POST['supplierId'];     
    $name = $_POST['supplierName'];
    $description = $_POST['supplierDescription'];

    require 'connect.php';

    $sql = "update suppliers set
    name = '$name',
    description = '$description'
    where id='$id'";

    mysqli_query($connect,$sql);

    header('location:index.php');