<link rel="stylesheet" href="index.css">

<?php
require "header.php";
?>


<main>
    <div id="signup">
        <h1>sign-up</h1>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="username">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="password">
            <input type="password" name="pwd-repeat" placeholder="Repeat password">
            <button type="submit" name="signup-submit">Sign-up</button>
    </div>
    </form>
</main>

<?php
require "footer.php"
?>
