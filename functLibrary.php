<?php
class myPhoto {
  public $photoId, $fileName, $title;
	public function __construct($photoId, $fileName, $title) {
	$this->photoId = $photoId;
	$this->fileName = $fileName;
	$this->title = $title;
  }
  public function readComments()
  {
	require_once "config.php";
	if(!isset($mysqli)){
		$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
		 
		if($mysqli === false){
			die("ERROR: Could not connect. " . $mysqli->connect_error);
		}	
	}		
	
	$sql = "SELECT comment, rating FROM comments WHERE photoid=?";
	if($stmt = $mysqli->prepare($sql)){
		$stmt->bind_param("s", $this->photoId);
		
		if($stmt->execute()){
			$result = $stmt->get_result();
		} else{
			echo "Something went wrong. Please try again later.";
		}
	}
	$stmt->close();
	$mysqli->close();		

	return $result;
}
}

function loadPhotos() {
	require_once "config.php";

	$sql = "SELECT photoid, filename, title FROM photos;";
	$result = $mysqli->query($sql);
	if ($result->num_rows > 0) {
	$images = array();
	while($row = $result->fetch_assoc()) {
		$imgInfo = new myPhoto($row["photoid"], $row["filename"], $row["title"]);
		$mykey = $row["photoid"];
		$images[$mykey] = $imgInfo;
		}
	} else {
		echo "No photos in database";
	}
	$mysqli->close();
	
	return $images;
}

function correct_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>