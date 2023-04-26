<?php
require_once "credentials.php";

$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
 
if($mysqli === false){
    die("Could not connect to MySQL. " . $mysqli->connect_error);
}
?>