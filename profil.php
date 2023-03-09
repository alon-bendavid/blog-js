<?php
require_once("header.php");

?>


<body>
    <form action="php/editProfil.php" id="signUp" method="post">
        <h2>Edit Profile</h2>
        <h3 id="signMsg"></h3>
        <input type="text" placeholder="New Username" name="newLogin" requierd><br>
        <input type="password" placeholder="New Password" name="newPass" required><br>
        <input type="password" placeholder="Retype Password" name="repass"><br>
        <button name="profilSub" id="inscrptionSub">submit </button>


    </form>

</body>

</html>