<?php
function photos_fill_test($mysqli) {
	$sql = "SELECT * FROM photos";	
	if($stmt = $mysqli->prepare($sql)){
	if($stmt->execute()){
		$stmt->store_result();
		
		if($stmt->num_rows == 0){
			$imgDir = "./images";
			$dir = scandir($imgDir);
			array_shift($dir);
			array_shift($dir);
			$count = count($dir);

			$sql = "INSERT INTO photos(filename, title) VALUES (?, ?)";

			if($stmt = $mysqli->prepare($sql)){
				$stmt->bind_param("ss", $imgName, $imgTitle);
		 
			for($i = 0; $i < $count; $i++){	
				$imgName = $dir[$i];
				$imgTitle = "Title for $imgName";
				$stmt->execute();
			}

		} else {
		echo "ERROR: Could not prepare query: $sql. " . $mysqli->error;
	}	
		} 
	} else{
		echo "Oops! Something went wrong. Please try again later.";
	}
	}
	$stmt->close();	
}



?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>MagicTravel</title>
</head>
<body>

	<?php
	require_once "credentials.php";

	$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD);

	if ($conn->connect_error) {
		die("MySQL Connection failed: " . $conn->connect_error);
	}
	?> 

	<?php
	
	$sql = "CREATE DATABASE IF NOT EXISTS " . DB_NAME;
	if ($conn->query($sql) === TRUE) {
	} else {
		echo "Error creating database: " . $conn->error;
	}

	$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	?> 
 
  	<?php
  
	$sql = "CREATE TABLE IF NOT EXISTS photos (
	photoid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	filename VARCHAR(250) NOT NULL,
	title VARCHAR(250) NOT NULL,
	reg_date TIMESTAMP
	)";
	if ($conn->query($sql) === TRUE) {
	} else {
		echo "Error creating table photos: " . $conn->error;
	} 
	// photos_fill_test($conn);

	$sql = "CREATE TABLE IF NOT EXISTS users (
	id int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	username varchar(50) NOT NULL,
	password varchar(255) NOT NULL,
	created_at datetime DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id),
	UNIQUE KEY username(username)
	)";
	if ($conn->query($sql) === TRUE) {
	} else {
		echo "Error creating table users: " . $conn->error;
	} 

	$sql = "CREATE TABLE IF NOT EXISTS comments (
	commentid INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	comment VARCHAR(500) NOT NULL,
	rating int NOT NULL, 
	photoid int UNSIGNED,
	FOREIGN KEY (photoid) REFERENCES photos(photoid)
	)";
	if ($conn->query($sql) === TRUE) {
	} else {
		echo "Error creating table comments: " . $conn->error;
	} 
  
	$sql = "CREATE TABLE IF NOT EXISTS klients (
		id int(50) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
		imie varchar(50) NOT NULL,
		email VARCHAR(50) NOT NULL , 
		mobile VARCHAR(13) NOT NULL 
	)";
	if ($conn->query($sql) === TRUE) {
	} else {
		echo "Error creating table users: " . $conn->error;
	} 

 ?> 
<?php

/* 
$sql = "DROP DATABASE " . $dbName;
if ($conn->query($sql) === TRUE) {
    echo "Database deleted successfully";
} else {
    echo "Error deleting database: " . $conn->error;
}	*/
$conn->close();
?> 
</body>
</html>