<?php
try {
    $db_con = new PDO('mysql:host=localhost;dbname=scoreboarddb;', 'root', '');
} catch (Exception $e) {
    die("An error occured.");
}

?>
