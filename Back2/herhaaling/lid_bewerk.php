<?php
//lees config
require_once 'config.php';
require_once 'session.inc.php';


//lees id uit url
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
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ledenbeheer</title>
</head>
<h1>Lid bewerken</h1>

<form action="lid_bewerk_verwerk.php" method="post">

    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <!-- gender radio button -->
    <p>
        <label>
            <input type="radio" name="gender" id="gender_m" value="M"
            <?php if ($rij['gender'] == 'M') echo 'checked="checked"'; ?>>
        Man </label>
        <br>
        <input type="radio" name="gender" id="gender_f" value="F"
            <?php if ($rij['gender'] == 'F') echo 'checked="checked"'; ?>>
        Vrouw </label>
    </p>

    <!-- voornaam -->
    <p>
        <label for="first_name">Voornaam:</label>
        <input type="text" name="first_name" id="first_name" required="required"
        value="<?php echo $rij['first_name']; ?>">
    </p>

    <!-- achternaam -->
    <p>
        <label for="last_name">Achternaam:</label>
        <input type="text" name="last_name" id="last_name" required="required"
        value="<?php echo $rij['last_name']; ?>">
    </p>

    <!-- Geboortendatum -->
    <p>
        <label for="birth_date">Geboortedatum</label>
        <input type="date" name="birth_date" id="birth_date" required="required"
        value="<?php echo $rij['birth_date']; ?>">
    </p>

    <!-- Lid sinds -->
    <p>
        <label for="member_since">Lid sinds</label>
        <input type="date" name="member_since" id="member_since" required="required"
               value="<?php echo $rij['member_since']; ?>">
    </p>


    <!-- submit knop -->
    <p>
        <input type="submit" name="submit" id="submit" value="Opslaan">
        <button onclick="history.back();return false;">Annuleren</button>
    </p>

</form>
</html>
