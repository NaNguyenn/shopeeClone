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
        include 'menu.php';
        require 'connect.php';
        $sql = "select * from suppliers";
        $suppliers = mysqli_query($connect,$sql);
    ?>
    <form method="post" action="productProcess.php" enctype="multipart/form-data">
        <div>
            <label for="productName">Insert name</label>
            <input type="text" name="productName" id="productName">
        </div>
        <div>
            <label for="productType">Insert type</label>
            <input type="text" name="productType" id="productType">
        </div>
        <div>
            <label for="productPrice">Insert price</label>
            <input type="number" name="productPrice" id="productPrice">
        </div>
        <div>
            <label for="productImage">Insert image</label>
            <input type="file" name="productImage" id="productImage">
        </div>
        <div>
            <label for="supplierId">Choose supplier</label>
            <select name="supplierId" id="supplierId">
                <?php foreach($suppliers as $supplier){ ?>
                    <option value="<?php echo $supplier['id'] ?>">
                        <?php echo $supplier['name'] ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <button>Submit</button>
    </form>
</body>
</html>