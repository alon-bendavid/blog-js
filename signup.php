<?php
require_once("header.php");

?>

<body>


    <!-- //////////////////inscrption\\\\\\\\\\\\\\\\\\\\\ -->
    <div class="forms">
        <div class="section inscrption">

            <form id="signUp" method="post">
                <h2>sign up</h2>
                <h3 id="signMsg"></h3>
                <input type="text" placeholder="username" name="username" requierd><br>
                <input type="password" placeholder="password" name="password" required><br>
                <input type="password" placeholder="retype password" name="repass"><br>
                <button name="inscrptionSub" id="inscrptionSub">submit </button>


            </form>
        </div>



</body>

</html>