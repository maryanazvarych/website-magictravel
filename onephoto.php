<?php
session_start();
include 'functLibrary.php';
include 'htmlheader.php';
include 'htmlmenu.php';
?>
	<h2 id="mainTitle">  </h2>
	<div id='bigImage' style='text-align:center'>
    
  <?php
    $imgDir = "./images";
    $thumbDir = "./thumbnails";
	
	try{
		if(!is_dir($imgDir) || !is_dir($thumbDir)) {
			throw new Exception('Image or thumbnails directory does not exist.');	}
	
    if(isset($_GET['iid'])){
      $iId = (int) $_GET['iid'];
    }
    else{
      $iId = 1;
    }

	$myImages = loadPhotos();
	if (empty($myImages)) {
			throw new Exception('Database table with photos is empty.');  	}
	
	$count = count($myImages);
	
    if($iId < 1 || $iId > $count){
      $iId = 1;
    }

	  $image = $myImages[$iId];
	  $imgName = $image->fileName;
	  $imgTitle = $image->title;;
      $divHead = "<div  id=\"imgTitle\">";
	  $divFoot = "</div>";
	  $aHead = "<a href=\"./miasta.php\">";
	  $aFoot = "</a>";
      echo "$aHead<img src=\"$imgDir/$imgName\" alt=\"$imgName\">$aFoot $divFoot";  
	  echo "$divHead$imgTitle$divFoot";
	  
	  $_SESSION['iId'] = $iId;
	  $_SESSION['imgName'] = $imgName;
	  $_SESSION['imgTitle'] = $imgTitle;

	} catch(Exception $e){
    echo "<p>An error was encountered: " . $e->getMessage() . "</p>";
}	  
    ?>
 
 <?php
    if(isset($image)){
		echo "<table style='margin-top:30px;'>";
		$result = $image->readComments();
		if ($result->num_rows > 0) {
		$trhead = "<tr>";
		$tdhead = "<td>";
		$tdfoot = "</td>";
		$trfoot = "</tr>";
		while($row = $result->fetch_assoc()) {
			echo "$trhead$tdhead $row[rating] $tdfoot$tdhead $row[comment] $tdfoot$trfoot";
		}
		} else {
			echo "<p style='text-align: center;'>Jeszcze nie ma opinii</p>";
		}
		echo "</table >";
		echo "<div id='op-link'>";
		echo "<a href=\"opinion.php\">Napisz opinie</a></div>";
	}
 ?>
	</div>
</body>
</html>
