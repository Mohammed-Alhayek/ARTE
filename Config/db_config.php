<?php

$serverName="localhost";
$userName="root";
$password="";
$db_name="arte-db";

$connection= mysqli_connect($serverName, $userName, $password, $db_name) or die("Error in database connection");
?>