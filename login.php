<?php
$userr = $_POST["user"];
$psss = $_POST["pass"];
$host = "localhost";
$user = "id20703955_marval";
$pass = "Final12345678!!";
$db = "id20703955_constructora";
$conn=mysqli_connect($host,$user,$pass,$db);
$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE usuario='".$userr."' and pass='".$psss."'");
$nr=mysqli_num_rows($query);
if($nr == 1){
    echo "2";
}else {
    echo "Usuario incorrecto";
}
?>