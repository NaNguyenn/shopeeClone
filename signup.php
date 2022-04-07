<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'header.php' ?>
    <form method="post" action="signupProcess.php">
        <div>
            <label for="userName">Insert your name</label>
            <input type="text" name="userName" id="userName">
        </div>
        <div>
            <label for="userEmail">Insert your email</label>
            <input type="email" name="userEmail" id="userEmail">
        </div>
        <div>
            <label for="userPassword">Insert your password</label>
            <input type="password" name="userPassword" id="userPassword">
        </div>
        <button>Submit</button>
    </form>
</body>
</html>