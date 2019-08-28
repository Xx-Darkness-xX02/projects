<?php

//POST-ARRAY UITLEZEN
$voornaam = $_POST['voornaam'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$achternaam = $_POST['achternaam'];
$mailadres = $_POST['mailadres'];

// DATA IN DE DATABASE STOPPEN

//1. verbinding maken met de database
     $dbc = mysqli_connect('localhost', 'root', '', 'webapp') or die('error connencting');
//2. opdracht schrijven voor de database
     $query = "INSERT INTO nieuwsbrief_opdracht2 VALUES (0 , '$voornaam', '$tussenvoegsel' , '$achternaam', '$mailadres')";
//3. opdracht uitvoeren
     $result = mysqli_query($dbc , $query) or die ('error query');
//4. verbinding verbreken
     mysqli_close($dbc);


// BEVESTIGEN DAT DATA IN DATABASE STAAT
if ($result) {
    echo 'de volgende gegevens zijn toegevoegd aan de database: <br>';
    echo $voornaam . '<br>';
    echo $tussenvoegsel . '<br>';
    echo $achternaam . '<br>';
    echo $mailadres . '<br>';
    echo '<button><a href="index.php">home</a></button>';
} else{
    echo 'sorry er is iets misgegaan probeer het opnieuw';
}

?>

<style>
    a{
        text-decoration: none;
        color red;
    }

    a:hover{
        color: white;
    }

    button:hover{
        background-color: black;
    }
</style>
