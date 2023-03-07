<?php
// require_once("classes/User.php");

require_once("header.php");
if (isset($_SESSION["user"])) {
    // header("location: clicker.php");
}
?>

<body>
    <!-- //////////////////connexion\\\\\\\\\\\\\\\\\\\\\ -->
    <div class="section connection_form">
        <form id="connexion">
            <h2>Sign in!</h2>
            <h3 id="conMsg"></h3>
            <input type="text" placeholder="username" name="loginUsr" required><br>

            <input type="password" placeholder="password" name="loginPwd" required><br>

            <button type="submit" name="loginSub">sign in</button>

        </form>
        <h3 class="small_link"><a href="inscription.php">
                <!-- Not a member yet? <strong>Sign Up!</strong> -->
            </a></h3>
        <!-- <a class="logoGit" href="https://github.com/alon-bendavid/livre-or"><img src="..\media\GitHub-Logo.png" alt=""></a> -->
    </div>
    </div>
</body>

</html>