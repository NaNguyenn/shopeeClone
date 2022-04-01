<?php

if(empty($_GET['id'])){
    header('location:index.php');
}
else{
    $id = $_GET['id'];

    require 'connect.php';

    $sql = "select * from suppliers where id = '$id'";

    $suppliers = mysqli_query($connect,$sql);
    $supplier = mysqli_fetch_array($suppliers);
    ?>
    
    <form method="post" action="supplierUpdateProcess.php">
        <div>
            <input type="hidden" name="supplierId" id="supplierId" value="<?php echo $supplier['id'] ?>">
        </div>
        <div>
            <label for="supplierName">Insert name</label>
            <input type="text" name="supplierName" id="supplierName" value="<?php echo $supplier['name'] ?>">
        </div>
        <div>
            <label for="supplierName">Insert description</label>
            <textarea name="supplierDescription" id="supplierDescription" cols="30" rows="10"><?php echo $supplier['description'] ?></textarea>
        </div>
        <button>Update</button>
    </form>

<?php } ?>