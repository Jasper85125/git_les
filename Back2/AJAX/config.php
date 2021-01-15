<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

//database logingegevens
$db_hostname = 'localhost';
$db_username = '85125Back';
$db_password = 'Jasper11';
$db_database = '85125_Back2';

//maak de database-verbinding
$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

//als de verbinding niet gemaakt kan worden: geef een foutmelding
if (!$mysqli){
    echo "FOUT: geen connectie naar database. <br>";
    echo "Errno: " . mysqli_connect_errno() . "<br/>";
    echo "Error: " . mysqli_connect_error() . "<br/>";
    exit;
}

?>