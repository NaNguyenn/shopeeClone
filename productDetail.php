<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include 'header.php'; 
    $productId = $_GET['id'];
    require 'admin/connect.php';
    $sql = "select products.*, suppliers.name as supplierName
            from products join suppliers on
            suppliers.id = products.supplierId
            where products.id = '$productId'";
    $products = mysqli_query($connect,$sql);
    $product = mysqli_fetch_array($products);
    ?>
    <main>
        <div class="productDetailContainer">
            <img height="500" src="admin/<?php echo $product['image'] ?>" alt="<?php echo $product['name'] ?>">
            <div class="productDetailInfo">
                <div>
                    <?php echo $product['name'] ?>
                </div>
                <div>
                    <?php echo $product['type'] ?>
                </div>
                <div>
                    <?php echo $product['supplierName'] ?>
                </div>
                <div>
                    $<?php echo $product['price'] ?>
                </div>
            </div>
        </div>
    </main>

</body>
</html>