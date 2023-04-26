<?php
	$current_page = basename($_SERVER['PHP_SELF']);
?>

<div class="sticky">
	<div class="topnav" id="myTopnav">
	<a href="index.php" <?php if ($current_page == 'index.php') { echo ' class="active"'; } ?>>Strona główna</a>
	<a href="miasta.php" <?php if ($current_page == 'miasta.php') { echo ' class="active"'; } ?>>Miasta</a>

	<?php 
		$aFoot = "</a>";
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
		$aHead = '<a href="wpisanie.php" class="' . ($current_page == 'wpisanie.php' ? 'active' : '') . '">Wpisać się</a>';
		echo $aHead . $aFoot;
		$aHead = '<a href="login.php" class="' . ($current_page == 'login.php' ? 'active' : '') . '">Wejście</a>';
		echo $aHead . $aFoot;
	}else {
		$aHead = '<a href="klienci.php" class="' . ($current_page == 'klienci.php' ? 'active' : '') . '">Klienci</a>';
		echo $aHead . $aFoot;
		$aHead = '<a href="file-upload-form.php" class="' . ($current_page == 'file-upload-form.php' ? 'active' : '') . '">Dodaj miasto</a>';
		echo $aHead . $aFoot;
		$aHead = '<a href="logout.php" class="' . ($current_page == 'logout.php' ? 'active' : '') . '">Wyjście</a>';
		echo $aHead . $aFoot;
		$aHead = '<a href="reset-password.php?logout" class="' . ($current_page == 'reset-password.php' ? 'active' : '') . '">Zmień hasło</a>';
		echo $aHead . $aFoot;
		}
	?>
	<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
	</div>
</div>