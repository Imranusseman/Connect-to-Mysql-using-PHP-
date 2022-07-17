<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";

// Create connection to Mysql database
$mysql = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($mysql->connect_error){
  echo "Connection failed: " . $mysql->connect_error;
} else{

echo "CONNECTED TO MYSQL ";



}


?>