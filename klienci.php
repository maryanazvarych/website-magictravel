<?php
session_start();
if(isset($_SERVER['PHP_SELF'])){
	$_SESSION["filename"] = $_SERVER['PHP_SELF'];
}
include 'htmlheader.php';
include 'htmlmenu.php';
include 'klientSet.php';
?>

<body>
<div id="box">
    <div style="padding-left:16px">
        <h2 class="commentTitle">Klienci:</h2>
        <table class="viewAll">
            <tr>
                <th class="viewAll">id</th>
                <th class="viewAll">Imię</th>
                <th class="viewAll">E-mail</th>
                <th class="viewAll">Numer telefonu</th>
            </tr>
            <h3>Tyle masz klientów: <?php echo $num?></h3>
            <?php include 'tableKlients.php'; ?>
        </table>
    </div>
</div>
</body>
</html>

