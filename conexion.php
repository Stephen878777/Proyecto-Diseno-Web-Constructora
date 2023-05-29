<?php
$host = "localhost";
$user = "id20703955_marval";
$pass = "Final12345678!!";
$db = "id20703955_constructora";
$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn){
    die("error al conectar".mysqli_connect_error());
}else {
    echo"Muy bien";
}
?>