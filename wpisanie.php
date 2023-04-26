<?php
session_start();
if(isset($_SERVER['PHP_SELF'])){
	$_SESSION["filename"] = $_SERVER['PHP_SELF'];
}
include 'htmlheader.php';
include 'htmlmenu.php';
?>

<body>
<div id="box">
    <div style="padding-left:16px">
        <h2 class="commentTitle">Zostaw swoje dane, a wpiszemy Cię na następny wyjazd!</h2>
			<div class="testdiv">
				<form action="insert.php" class="form" method="post">
					<input type="text" placeholder="Wprowadź imie" name="imie" class="input" required>
					<input type="email" placeholder="Wprowadź E-mail" name="email" class="input" required>
					<input type="mobile" placeholder="Wprowadź numer telefonu" name="mobile" class="input" required>
					<button type="submit" name="submit" value="Submit" class="btn-formm"><H1>Gotowe</H1></button>
				</form>
			</div>
    </div>
</div>
</body>
</html>

