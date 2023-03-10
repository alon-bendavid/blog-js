<?php
session_start();
require_once("../classes/User.php");
//fetch connecxion data
$loginUsr = $_POST["loginUsr"];
$loginPwd = $_POST["loginPwd"];

//create a new usr object and start a database connection
$userTest = new User("$loginUsr");
$userTest->login($loginUsr, $loginPwd);

// if ($userTest->login($loginUsr, $loginPwd)) {
//     header("location: ../index.php");
// }
