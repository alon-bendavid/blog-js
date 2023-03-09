<?php
session_start();
require_once("../classes/User.php");
if (isset($_POST["profilSub"])) {
    $currectUsr = $_SESSION["user"]["login"];
    $newLogin = $_POST["newLogin"];
    $newPass = $_POST["newPass"];
    $repass = $_POST["repass"];
    if ($newPass === $repass) {


        // $hashed_repass = password_hash($repass, PASSWORD_DEFAULT);

        $hashed_newPass = password_hash($newPass, PASSWORD_DEFAULT);

        $user = new User($currectUsr);
        $user->update($newLogin, $hashed_newPass);
        header("location: ../php/disconnect");
    }
}
