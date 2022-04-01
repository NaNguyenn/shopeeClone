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
    require 'connect.php';
    $sql = "select * from suppliers";
    $suppliers = mysqli_query($connect,$sql);
    $sql = "select * from products";
    $products = mysqli_query($connect,$sql);
    ?>
    Admin interface
    <?php
        include 'menu.php';
    ?>
    <h1>Suppliers</h1>
    <div id="suppliersContainer">
        <?php
            foreach($suppliers as $supplier){ ?>
                <div class="supplierContainer">
                    <?php echo $supplier['id'] ?>
                    <b><?php echo $supplier['name'] ?></b>
                    <?php echo $supplier['description'] ?>
                    <a href="supplierUpdate.php?id=<?php echo $supplier['id'] ?>">Update</a>
                    <a href="supplierDelete.php?id=<?php echo $supplier['id'] ?>">Delete</a>
                </div>
        <?php } ?>
    </div>
    <h1>Products</h1>
    <div id="productsContainer">
        <?php
            foreach($products as $product){ ?>
                <div class="productContainer">
                    <img height="100" src="<?php echo $product['image'] ?>" alt="">
                    <?php echo $product['id'] ?>
                    <b><?php echo $product['name'] ?></b>
                    <?php echo $product['type'] ?>
                    <?php echo $product['price'] ?>
                    <a href="productUpdate.php?id=<?php echo $product['id'] ?>">Update</a>
                    <a href="productDelete.php?id=<?php echo $product['id'] ?>">Delete</a>
                </div>
        <?php } ?>
    </div>

</body>
</html>