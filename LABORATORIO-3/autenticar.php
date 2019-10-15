

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php 
session_start();
	include ('conexion.php');
	$login=$_POST['login'];
	$password=$_POST['password'];
	$rusuario=$_POST['chkusuario'];
	$rpassword=$_POST['chkpassword'];
	if($rusuario=='recordar')
		setcookie('login',$login,time()+3600);

	if($rpassword=='recordar')
		setcookie('password',$password,time()+3600);
	$sql="SELECT * from usuarios where login='$login' and contrasena='$password'";
	$resultado=$con->query($sql);	
	if($fila=$resultado->fetch_assoc()){
		$login=$fila['login'];
		$password=$fila['contrasena'];
		$_SESSION['login']=$login;
		$_SESSION['contrasena']=$password;
		echo'<meta http-equiv="REFRESH" content="0;URL=Fintroduccion.html">';
		
	}
	else{
		echo "USUARIO O CONTRASEÑA INCORRECTO";
		echo'<meta http-equiv="REFRESH" content="2;URL=formlogin.php">';
	}

?>
</form>
</table>
</body>
</html>