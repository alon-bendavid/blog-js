<?php
session_start();

require_once("classes/User.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog-js</title>
    <link rel="stylesheet" href="css\style.css">
    <!-- <script src="https://kit.fontawesome.com/e861973d30.js" crossorigin="anonymous"></script> -->

    <?php if ($_SERVER['REQUEST_URI'] == "/blog-js/connect.php") {  ?>
        <script defer src="./js/scriptCon.js"></script>
    <?php }
    if ($_SERVER['REQUEST_URI'] == "/blog-js/signup.php") { ?>
        <script defer src="./js/script.js"></script>
    <?php } ?>
</head>
<header>
    <nav>
        <ul>
            <!-- <a href="todolist.php">To Do List</a> -->

            <a href="index.php">
                <h1>Blog</h1>
            </a>
            <?php if (!isset($_SESSION["user"])) { ?>
                <a href="connect.php">connect</a>
                <a href="signup.php">Sign Up</a>

            <?php
            } ?>
            <?php if (isset($_SESSION["user"])) { ?>
                <a href="profil.php">Edit profile</a>
                <a href="clicker.php">clicker</a>
            <?php
            } ?>

            <div>
                <?php if (isset($_SESSION["user"])) { ?>
                    <?php echo "<h4  >Welcome </h4>"; ?>

                    <?php echo "<h3  class='user'>" . $_SESSION['user']['login'] . "</h3>"; ?>
                    <a id="disconnectBtn" href="php\disconnect.php">disconnect</a>

                <?php
                }  ?>

            </div>
        </ul>
    </nav>
</header>