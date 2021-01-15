<?php
    require 'config.php';
    require_once 'session.inc.php';

?>
<html>
<h1>Nieuw lid inschrijven</h1>

<form action="lid_nieuw_verwerk.php" method="post">

    <!-- man / vrouw radio button -->
    <p>
        <label>
            <input type="radio" name="gender" id="gender_m" value="M" checked="checked">
        Man</label>
        <br>
        <label>
        <input type="radio" name="gender" id="gender_f" value="F">
        Vrouw</label>
    </p>

    <!-- naam text velt -->
    <p>
        <lable for="first_name">Voornaam:</lable>
        <input type="text" name="first_name" id="first_name" required="required">
    </p>

    <!-- achternaam text velt -->
    <p>
        <lable for="last_name">Achternaamr:</lable>
        <input type="text" name="last_name" id="last_name" required="required">
    </p>

    <!-- geboortedatum date velt -->
    <p>
        <lable for="birth_date">Geboortedatum:</lable>
        <input type="date" name="birth_date" id="birth_date" required="required">
    </p>

    <!-- lid sins type date -->
    <p>
        <lable for="member_since">Lid sinds:</lable>
        <input type="date" name="member_since" id="member_since" required="required">
    </p>

    <!-- submit knop -->
    <p>
        <input type="submit" name="submit" id="submit" value="Opslaan">
        <button onclick="history.back();return false;">Annuleren</button>
    </p>

</form>




</html>
