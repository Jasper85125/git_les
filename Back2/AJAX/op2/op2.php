<?php
require '../../herhaaling/config.php';

//Lees de zoekterm uit de URL
$plaats = $_GET['wp'];

//zoek in d database
$result = mysqli_query($mysqli, "SELECT * FROM ajax_personen WHERE `Woonplaats` LIKE '%$plaats%' ");

// Zijn er records gevonden?
if (mysqli_num_rows($result) > 0)
{
    //start de table
    echo '<table>';

    // Lees alle gevonden records
    while ($row = mysqli_fetch_array($result))
    {
        //start de rij
        echo '<tr>';

        echo "<td>" . $row['Woonplaats'] . '</td>';

        echo '</tr>';
    }
    echo '</table>';
}
else {
    echo "geen personen gevonden";
}
?>
