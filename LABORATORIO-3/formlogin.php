<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

	<form action="autenticar.php" method="POST">
		<label for="login">Usuario:</label>
		<input type="text" name="login" value="
		<?php 
		if(isset($_COOKIE['usuario']))
		{
			echo $_COOKIE['usuario'];
		}
		?>"><br>
		
		<label for="password">Contraseña:</label>
		<input type="password" name="password"><br>

	
		<input type="checkbox"name="chkusuario" value="recordar"
		<?php 
		if(isset($_COOKIE['usuario']))
		{
			echo'checked="cheked';
		}
		?>>Recordar usuario<br>

		<input type="checkbox" name="chkpassword" value="recordar">
		Recordar contraseña<br>
		<input type="submit" value="Ingresar">
	</form>
	
</body>
</html>