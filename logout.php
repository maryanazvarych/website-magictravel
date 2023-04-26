<?php
session_start();
 
//$_SESSION = array();
 
//session_destroy();
 
	if(isset($_SESSION["loggedin"])){
		unset($_SESSION["loggedin"]); 
	}
 	if(isset($_SESSION["id"])){
		unset($_SESSION["id"]);	
	}
	if(isset($_SESSION["username"])) {
		unset($_SESSION["username"]);           
	}

	if(isset($_SESSION["filename"])){
		$filename = $_SESSION["filename"]; 
	}	else {
		$filename = "index.php";
	}								
	header("location: ".$filename);
	exit;
?>