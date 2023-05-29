<?php
$user2 = $_POST["user"];
$pass2 = $_POST["pass"];
$email = $_POST["email"];
$host = "localhost";
$user = "id20703955_marval";
$pass = "Final12345678!!";
$db = "id20703955_constructora";
$conn=mysqli_connect($host,$user,$pass,$db);
$sql="INSERT INTO usuarios(usuario,pass,correo) values ('$user2','$pass2','$email')";
if (mysqli_query($conn,$sql)){
    echo"Registro creado";
}else {
    echo "error".mysqli_error($conn);
}
?>