<?php
session_start();
if(isset($_SERVER['PHP_SELF'])){
	$_SESSION["filename"] = $_SERVER['PHP_SELF'];
}
include 'htmlheader.php';
include 'functLibrary.php';
include 'htmlmenu.php';
?>
	<h2 id="mainTitle"> Organizujemy wyjazdy do:</h2>

    <div id='miniatury' style='text-align:center'>
	
    <?php
	$imgDir = "./images";
    $thumbDir = "./thumbnails";

	try{
		if(!is_dir($imgDir) || !is_dir($thumbDir)) {
			throw new Exception('Image or thumbnails directory does not exist.');	}
 
	$myImages = loadPhotos();
    $divHead = "<div  class=\"gallery\">";
	$divFoot = "</div>";
	foreach($myImages as $myK => $myPh) {
	   $imgName = $myPh->fileName;
       $imgTag = "<img src=\"$thumbDir/$imgName\" alt=\"$imgName\" class=\"img_th\">";
       $aHead = "<a href=\"./onephoto.php?iid=$myK\">";
       $aFoot = "</a>";
       echo "$divHead$aHead$imgTag$aFoot$divFoot ";
    }			
	} catch(Exception $e){
    echo "<p>An error was encountered: " . $e->getMessage() . "</p>";
}
    ?>
    </div>
    </div>
  </div>
</body>
</html>
