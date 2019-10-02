
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<body>		
<?php 
	include ('conexion.php');
	$login=$_POST['login'];
	$password=$_POST['password'];
	$sql="SELECT * from usuarios where login='$login' and contrasena='$password'";
	$resultado=$con->query($sql);	
	if($fila=$resultado->fetch_assoc()){
		$nivel=$fila['Nivel'];
		$login=$fila['login'];
		session_start();
		$_SESSION['Nivel']=$nivel;
		$_SESSION['login']=$login;
		echo'<meta http-equiv="REFRESH" content="0;URL=index.php">';
	}
	else
		echo "USUARIO O CONTRASEÑA INCORRECTO";
		echo'<meta http-equiv="REFRESH" content="2;URL=login.html">';
?>
</form>
</table>
</body>
</html>
