<?php
$serverName = "sarahboerger.dk.mysql:3306";
$dbUsername = "sarahboerger_dkprofiles";
$dbPassword = "root12";
$dbname = "sarahboerger_dkprofiles";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbname);

if (!$conn){
    die("Connection failed: " . mysqli_connect_errors());
}

?>
