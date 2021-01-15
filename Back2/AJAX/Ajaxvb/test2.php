<?php
session_start();

if (!isset($_SESSION['add'])) {
    $_SESSION['add'] = 1;
} else {
    $_SESSION['add']++;
}
echo $_SESSION['add'];

?>
