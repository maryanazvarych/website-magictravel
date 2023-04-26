<?php
include "bazaDanych.php";
if(isset($_POST['submit']))
{    
   $imie = $_POST['imie'];
   $email = $_POST['email'];
   $mobile = $_POST['mobile'];
   $sql = "INSERT INTO klients(imie,email,mobile)
   VALUES ('".$imie."','".$email."','".$mobile."')";
   if (mysqli_query($conn, $sql)) {
      echo "<script>alert('Dziękujęmy, twoje dane zostały zapisane!');</script>";
      echo "<script type='text/javascript' language='Javascript'>window.open('index.php');</script>";
   } else {
      echo "Error: " . $sql . ":-" . mysqli_error($conn);
   }
   mysqli_close($conn);
}
?>