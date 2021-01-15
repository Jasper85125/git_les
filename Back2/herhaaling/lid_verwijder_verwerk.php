<?php
//lees config
require_once 'config.php';
require_once 'session.inc.php';

//lees id
$id = $_GET['id'];

//is id nummer?
if (is_numeric($id)){
    //verwijder het lid uit database
    $result = mysqli_query($mysqli, "DELETE FROM back2_leden WHERE id = $id");

    //controleer resultaat
    if ($result){
        //alles OK, stuur terug
        header("Location:home.php");
        exit;
    }else{
        echo 'Er ging wat mis met het verwijderen';
    }
}else{
    // het ID was geen nummer
    echo "Onjuist ID.";
    exit;
}


?>