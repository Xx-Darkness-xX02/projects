<?php
// het formulier uitlezen (data binnenhalen)
$mailadres = $_POST['mailadres'];

// connectie maken met de database
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'webapp';

$dbc = mysqli_connect($host, $username, $password, $dbname) or die ('error connecting');

// query schrijven voor zoeken naar data
$query = "SELECT * FROM nieuwsbrief_opdracht2 WHERE mailadres = '$mailadres'";
// query uitvoeren
$result = mysqli_query($dbc, $query) or die ('error query (SELECT)');

// tellen hoeveel regels we nu hebben
$number_of_rows = mysqli_num_rows($result);

// testen of er regels zijn en daar conclusies aan verbinden
if ($number_of_rows == 0) {
    echo 'Helaas, het mailadres:' . $mailadres . 'staat niet in de database.<br>';
    echo '<a href="uitschrijven.php">Klik hier om het opnieuw te proberen.</a><br><br>';
    exit();
}

// query schrijven voor verwijderen data
$query = "DELETE FROM nieuwsbrief_opdracht2 WHERE mailadres = '$mailadres'";
$result = mysqli_query($dbc, $query) or die ('error query (DELETE)');
// connectie verbreken
mysqli_close($dbc);
// verslag doen van het resultaat
echo 'Het mailadres:' . $mailadres . ' is verwijderd uit de database<br><br>';
echo '<a href="index.php">Klik hier om terug te keren naar de homepage.</a>';