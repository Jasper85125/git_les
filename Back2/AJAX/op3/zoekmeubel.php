<?php
require '../config.php';
//lees het artikelnummer uit de url
$artnr = $_GET['anr'];
$query = "SELECT * FROM ajax_meubels WHERE artikelnr = " . $artnr;

$resultaat = mysqli_query($mysqli, $query);

if (mysqli_num_rows($resultaat) == 0)
{
    echo "<p>Er is geen meubel $artnr.</p>";
}
else{
    $rij = mysqli_fetch_array($resultaat);
    echo "<h1>Artikelnummer: {$artnr}</h1>";
    echo "<p>Naam: {$rij['naam']}</p>";
    echo "<p>type: {$rij['type']}</p>";
    echo "<p>omschrijving: {$rij['omschrijving']}</p>";
    echo "<p>prijs: {$rij['prijs']}</p>";

}