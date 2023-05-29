<?php
$user2 = $_POST["user"];
$pass2 = $_POST["pass"];
$email = $_POST["email"];
$host = "localhost";
$user = "id20703955_marval";
$pass = "Final12345678!!";
$db = "id20703955_constructora";
$conn=mysqli_connect($host,$user,$pass,$db);
$sql = "UPDATE usuarios SET usuario='".$user2."', correo='".$email."', pass='".$pass2."' WHERE correo='".$email."'";
if (mysqli_query($conn,$sql)){
    echo "Actualización exitosa";
} else {
    echo "Error".mysql_error($sql);
}
?>