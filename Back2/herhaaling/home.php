<?php
require 'config.php';
require_once 'session.inc.php';


$query = "SELECT * FROM back2_leden";

$resultaat = mysqli_query($mysqli, $query);

if (mysqli_num_rows($resultaat) == 0)
{
    echo "<p>Er zijn geen resultaat gevonden.</p>";
}

else
{
    echo "<table border ='1'>";
    echo "<td>ID:</td>";
    echo "<td>birth_date:</td>";
    echo "<td>Naam:</td>";
    echo "<td>Achternaam:</td>";
    echo "<td>Gender:</td>";
    echo "<td>member_since:</td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";

    while ($rij = mysqli_fetch_array($resultaat))
    {
        echo "<tr>";
        echo "<td>" . $rij['id'] . "</td>";
        echo "<td>" . $rij['birth_date'] . "</td>";
        echo "<td>" . $rij['first_name'] . "</td>";
        echo "<td>" . $rij['last_name'] . "</td>";
        echo "<td>" . $rij['gender'] . "</td>";
        echo "<td>" . $rij['member_since'] . "</td>";
        echo "<td><a href='lid_bewerk.php?id=" . $rij['id'] . "'>bewerk</a></td>";
        echo "<td><a href='lid_verwijder.php?id=" . $rij['id'] . "'>verwijder</a></td>";
        echo "<td><a href='foto.php?id=" . $rij['id'] . "'>foto</a></td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "<p><a href='lid_nieuw.php'>TOEVOEG LID</a></p>";

}

?>

<p>Je bent inglogt als <?php echo $_SESSION['username']; ?><br>
    <a href="logout.php">Klik hier</a> on uit te loggen</p>
