<?php
    //lees het config-bestand
    require_once 'config.php';
    require_once 'session.inc.php';


//lees alle formvelden
    $id             = $_POST['id'];
    $gender         = $_POST['gender'];
    $first_name     = $_POST['first_name'];
    $last_name      = $_POST['last_name'];
    $birth_date     = $_POST['birth_date'];
    $member_since   = $_POST['member_since'];

    //controleer of alle formvelden zijn ingevult
    if (is_numeric($id) &&
        strlen($id)             >0 &&
        strlen($first_name)     > 0 &&
        strlen($last_name)      > 0 &&
        strlen($birth_date)     > 0 &&
        strlen($member_since)   > 0 &&
        strlen($gender)         > 0) {

        //controleer of de data wel correct is
        $check1 = strtotime($birth_date);
        $check2 = strtotime($member_since);
        if (date('Y-m-d',$check1) == $birth_date &&
            date('Y-m-d',$check2) == $member_since) {

            //alle data zijn oke, maak de query
            $query = "UPDATE back2_leden
                      SET
                      gender = '$gender',
                      first_name = '$first_name',
                      last_name = '$last_name',
                      birth_date = '$birth_date',
                      member_since = '$member_since',
                      WHERE id = '$id'";

            //voer de query uit
            $result = mysqli_query($mysqli, $query);

            //controleer het resultaat
            if ($result){
                //het is goed
                header("Location:home.php");
                exit;
            } else {
                echo 'Er ging wat mis met het toevoegen!';
            }
        } else {
            echo 'Niet alle velden waren ingevuld!';
        }
    }

?>

