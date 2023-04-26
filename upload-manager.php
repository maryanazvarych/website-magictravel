<?php
include 'functLibrary.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
		echo "file extension ->  $ext /// file size -> $filesize  /// file type-> ";
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        if(in_array($filetype, $allowed)){
            if(file_exists("images/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "images/" . $filename);
                echo "Your image file was uploaded successfully.";
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }

    if(isset($_FILES["thphoto"]) && $_FILES["thphoto"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $thfilename = $_FILES["thphoto"]["name"];
        $thfiletype = $_FILES["thphoto"]["type"];
        $thfilesize = $_FILES["thphoto"]["size"];
    
        $ext = pathinfo($thfilename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        $maxsize = 5 * 1024 * 1024;
        if($thfilesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        if(in_array($filetype, $allowed)){
            if(file_exists("thumbnails/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($_FILES["thphoto"]["tmp_name"], "thumbnails/" . $filename);
                echo "Your thumb image file was uploaded successfully.";
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["thphoto"]["error"];
    }
	
	$phTitle = correct_input($_POST["title"]);
	if($phTitle == "")
	{
		$phTitle = "Title of photo $filename";
	}
	require_once "config.php";
	$sql = "INSERT INTO photos(filename, title) VALUES ('$filename', '$phTitle');";
	if ($mysqli->query($sql) === TRUE) {
		//echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $mysqli->error;
	}	
	$mysqli->close();	
	header('Location:miasta.php');
}
?>