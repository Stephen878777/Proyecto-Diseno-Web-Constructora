<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <title>Login - Marval</title>
    <link rel="stylesheet" href="./css/custom.css">
	<script src="./js/custom.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="loginn"></div>
    <div class="loginnnn">
		<form action="" id="login" style="" >
			<!-- <img class="logo-login" src="./assets/logo-footer.png" alt=""> -->
			<input class="input" type="text" name="userr" id="userr" placeholder="User" required="">
			<input class="input" type="password" name="psss" id="psss" placeholder="Password" required="">
			<input class="btn-login" type="submit" value="LogIn">
			<input class="eliminar" type="submit" value="Eliminar">
		</form>
        <form action="" id="registro" style="">
			<input class="input" type="text" name="user" id="user" placeholder="User" required="">
			<input class="input" type="password" name="pss" id="pss" placeholder="Password" required="">
			<input class="input" type="email" name="eml" id="eml" placeholder="Email" required="">
			<input class="btn-registro" type="submit" value="SignUp">
			<input class="actualizar" type="submit" value="Actualizar">
		</form>
        <a class="crearcuenta">Aún no tienes una cuenta? Registrate.</a>
    </div>
</body>
</html>