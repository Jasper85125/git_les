<?php
//lees config
require 'config.php';
require_once 'session.inc.php';

//lees het id
$id = $_GET['id'];

//is id nummer?
if (is_numeric($id)){
    //lees het lid uit database
    $result = mysqli_query($mysqli, "SELECT * FROM back2_leden WHERE id = $id");

    //is er een lid gevonden met dit id
    if (mysqli_num_rows($result) == 1){
        //ja, lees het lid uit de database
        $rij = mysqli_fetch_array($result);
    }else{
        echo "Geen lid gevonden";
        exit;
    }
}else{
    // het ID was geen nummer
    echo "Onjuist ID.";
    exit;
}
?>
<html>
<h1>Lid verwijderen</h1>

<p>
    Weet je zeker dat je het lid
    <strong><?php echo $rij['first_name'] . "" . $rij['last_name']; ?></strong>
    wilt verwijderen?
</p>

<p>
    <a href="lid_verwijder_verwerk.php?id=<?php echo$id; ?>">Ja, verwijderen</a>
    /
    <a href="home.php">Nee, terug</a>
</p>

</html>
