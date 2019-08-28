<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
</head>
<body>

<header>
    <nav>
        <a href="#">
            <img src="img/zeus.jpg" alt="logo">
        </a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">About me</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <div class="formulier">
            <form class="style1" action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="username/E-mail...">
                <input type="password" name="pwd" placeholder="password...">
                <button class="button1" type="submit" name="login-submit ">login</button>
            </form>
            <a class="sign-up" href="signup.php">Sign-up</a>
            <form class="style2" action="includes/logout.inc.php" method="post">
                <button class="button2" type="submit" name="logout-submit ">logout</button>
            </form>
        </div>
    </nav>
</header>