<?php 
session_start();
?>

<header>
     <ul>
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="signin.php">Sign in</a>
        </li>
        <li>
            <a href="signup.php">Sign up</a>
        </li>
    </ul>
    <?php if(!empty($_SESSION['id'])){ ?>
        <div>
            Hello, <?php echo $_SESSION['name']; ?>
            <a href="signout.php">Sign out</a>
        </div>
    <?php } ?>
</header>