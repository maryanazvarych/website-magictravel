<?php
 include 'bazaDanych.php';
    $conn = new mysqli($serwer, $username, $password, $database);
    $query = "SELECT * FROM klients";
    $rs = $conn->query($query);
    $conn->close();
    $num = $rs->num_rows;
?>