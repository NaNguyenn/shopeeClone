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
    ?>
    <form method="post" action="supplierProcess.php">
        <div>
            <label for="supplierName">Insert name</label>
            <input type="text" name="supplierName" id="supplierName">
        </div>
        <div>
            <label for="supplierDescription">Insert description</label>
            <textarea name="supplierDescription" id="supplierDescription" cols="30" rows="10"></textarea>
        </div>
        <button>Submit</button>
    </form>
</body>
</html>