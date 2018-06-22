<?php

include 'connectDB.php';
$sql1 = "UPDATE `ticketsday` SET `open_ticket_day` = `open_ticket_day` + 1 WHERE `td_id` = 1";
$db_con->query($sql1);
header('Location: ../index.php');
?>
