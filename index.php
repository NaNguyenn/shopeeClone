<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #productsContainer{
            display: flex;
        }
    </style>
</head>
<body>
    <?php include 'header.php' ?>
    <main>
        <?php
            require 'admin/connect.php';
            $sql = "select products.*, suppliers.name as supplierName
            from products join suppliers on
            suppliers.id = products.supplierId";
            $products = mysqli_query($connect,$sql);
        ?>
        <div id="productsContainer">
            <?php foreach($products as $product){ ?>
                <a href="productDetail.php?id=<?php echo $product['id'] ?>">
                    <div class="productContainer">
                        <img height="100" src="admin/<?php echo $product['image'] ?>" alt="<?php echo $product['name'] ?> image">
                        <div class="productName">
                            <?php echo $product['name'] ?>
                        </div>
                        <div class="productPrice">
                            $<?php echo $product['price'] ?>
                        </div>    
                    </div>
                </a>
            <?php } ?>
        </div>
    </main>
</body>
</html>