<?php
$email = $_POST["email"];
$host = "localhost";
$user = "id20703955_marval";
$pass = "Final12345678!!";
$db = "id20703955_constructora";
$conn=mysqli_connect($host,$user,$pass,$db);
mysqli_query($conn,"DELETE FROM usuarios WHERE correo='".$email."'");
?>