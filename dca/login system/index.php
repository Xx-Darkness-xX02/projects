<link rel="stylesheet" href="index.css">

<?php
require "header.php";
?>


    <main>
        <?php
        if (isset($_SESSION['userID'])){
            echo " <p>You are logged in!</p>";
        }
        else{
            echo '<p>You are logged out!</p>';
        }
        ?>
        <a href="../PHPTemplateSite/index.php">Klik hier om terug te gaan naar de home pagina</a>

    </main>

<?php
require "footer.php"
?>