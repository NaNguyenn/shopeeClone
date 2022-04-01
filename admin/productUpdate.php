<?php

if(empty($_GET['id'])){
    header('location:index.php');
}
else{
    $id = $_GET['id'];

    require 'connect.php';
    $sql = "select * from suppliers";
    $suppliers = mysqli_query($connect,$sql);

    $sql = "select * from products where id = '$id'";

    $products = mysqli_query($connect,$sql);
    $product = mysqli_fetch_array($products);
    ?>
    
    <form method="post" action="productUpdateProcess.php" enctype="multipart/form-data">
        <div>
            <input type="hidden" name="productId" id="productId" value="<?php echo $product['id'] ?>">
        </div>
        <div>
            <label for="productName">Insert name</label>
            <input type="text" name="productName" id="productName" value="<?php echo $product['name'] ?>">
        </div>
        <div>
            <label for="productType">Insert type</label>
            <input type="text" name="productType" id="productType" value="<?php echo $product['type'] ?>">
        </div>
        <div>
            <label for="productPrice">Insert price</label>
            <input type="number" name="productPrice" id="productPrice" value="<?php echo $product['price'] ?>">
        </div>
        <div>
            <label for="productImageNew">Insert image</label>
            <input type="file" name="productImageNew" id="productImageNew">
        </div>
        <div>
            <label for="productImageOld">Keep old image</label>
            <img height="100" src="<?php echo $product['image'] ?>" alt="">
            <input type="hidden" name="productImageOld" id="productImageOld" value="<?php echo $product['image'] ?>">
        </div>
        <div>
            <label for="supplierId">Choose supplier</label>
            <select name="supplierId" id="supplierId">
                <?php foreach($suppliers as $supplier){ ?>
                    <option value="<?php echo $supplier['id'] ?>" 
                        <?php if($product['supplierId'] == $supplier['id']){ ?>
                            selected
                        <?php } ?>
                    >
                        <?php echo $supplier['name'] ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <button>Update</button>
    </form>

<?php } ?>