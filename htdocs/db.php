<?php
/* Database connection settings */
$host = 'localhost';
$user = 'accounts';
$pass = 'accounts';
$db = 'accounts';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);


$connection = new mysqli($host, $user, $pass, $db);
if ($connection->connect_error) { die($connection->connect_error); }
/* echo "MySQL server connection made...<br>"; */

if (!$connection->query("USE $db")) { die ($connection->error); }
/* echo "Using database: $db ...<br>"; */
?>
