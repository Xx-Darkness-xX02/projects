<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form>
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">
    <select name="operator">
        <option>None</option>
        <option>add</option>
        <option>subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>
    <br>
    <button name="submit" value="submit" type="submit">Calculate</button>
</form>
<p>The answer is:</p>
<?php
if (isset($_GET['submit'])) {
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['operator'];
    switch ($operator) {
        case "None":
            echo "you need to select a method";
            break;
        case "Add":
            echo $result1 + $result2;
            break;
        case "subtract":
            echo $result1 - $result2;
            break;
        case "Multiply":
            echo $result1 * $result2;
            break;
        case "Divide":
            echo $result1 / $result2;
            break;
    }
}
?>
<br>
<a href="../PHPTemplateSite/index.php">Klik hier om terug te gaan naar de home pagina</a>

</body>
</html>