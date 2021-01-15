<?php
//start de sessie
session_start();

//controleer of een username is opgeslagen
if (!isset($_SESSION['username']) || strlen($_SESSION['username']) == 0){
    //geen login
    header("Location:index.php");
    exit;
}
?>
