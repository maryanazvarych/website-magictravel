<?php
session_start();
include 'functLibrary.php';
	$errData = False;
	$fname = "";
	$comm = "";
	$rating = 5;
    $imgDir = "images";
	if(isset($_SESSION['iId'])){
		$iId = $_SESSION['iId'];
		$imgName = $_SESSION['imgName'];
		$imgTitle = $_SESSION['imgTitle'];
	}
	else {
		$iId = 1;
		$imgName = "";
		$imgTitle = "";
	}

	if (sizeof($_POST) == 0)
	{
		include "opinionForm.php";
		exit();
	}
	$fname = correct_input($_POST["fname"]);
	$comm = correct_input($_POST["comm"]);
	$rating = correct_input($_POST["rating"]);

	if($fname == "")
	{
		$errData = True;
		$fldNm = "Name";
	}
	if ($rating < 1 || $rating > 5)
	{
		$errData = True;
		$fldNm = "Rating";	
	}
	if($comm == "")
	{
		$errData = True;
		$fldNm = "Comment";
	}

	if ($errData)
	{
		include "opinionForm.php";
		exit();
	}
	else
	{
		require_once "config.php";

		$sql = "INSERT INTO comments (comment, rating, photoid) VALUES (?, ?, ?);";
        if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("sss", $comm, $rating, $iId);
            
            if($stmt->execute()){
                header("location: miasta.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
        $stmt->close();
		$mysqli->close();		
	}
	header('Location:miasta.php');
?>
<!-- <!DOCTYPE HTML>
<html lang="pl">
	<head>
		<title>Confirmation</title>
		<meta charset="utf-8" />
    <link href="style-my-php123.css" rel="stylesheet" />
	</head>
	<body>
	</body>
</html>  -->
