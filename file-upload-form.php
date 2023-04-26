<?php
session_start();

include 'htmlheader.php';
include 'htmlmenu.php';

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("location: index.php");
}
?>

<div style="padding-top:50px">
    <form action="upload-manager.php" method="post" enctype="multipart/form-data">
        <h2 class="commentTitle">Dodaj nowy kierunek:</h2>
        <fieldset>
        <div class="formul"><label for="fileSelect">Zdjęcie:</label>
        <input type="file" name="photo" id="fileSelect"></div>
        <div class="formul"><label for="thSelect">Miniatura:</label>
        <input type="file" name="thphoto" id="thSelect"></div>
        <div class="formul"><label for="phtitle">Opis:</label>
        <input type="text" name="title" id="phtitle" size="150"></div>
        <div class="formul"><input type="submit" name="submit" value="Dodaj"> <div>
        </fieldset>
        <p class="note"><strong>Uwaga:</strong> Tylko &nbsp;.jpg, .jpeg, .gif, .png  &nbsp;formaty (do 5 MB)</p>
    </form>
</div>