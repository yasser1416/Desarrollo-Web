<?php 
include ("conexion.php");
$nombres=$_GET['txtNombres'];
$apellidos=$_GET['txtApellidos'];
$correo=$_GET['txtCorreo'];
$contrasena=$_GET['pass'];
	$sql="insert into persona(nombres,apellidos,correo,password) values ('$nombres','$apellidos','$correo','$contrasena')";
	$resultado=$con->query($sql);
if ($resultado)
	echo "Se regitro con exito";
else
	echo "Ocurrio un error";

echo '<br><br><table border="1" align="">';
	include('conexion.php');
	$sql="SELECT * FROM persona";
	$resultado=$con->query($sql);
	echo "<tr class='bg1' align='center'><td>Nombres</td><td>Apellidos</td><td>Correo</td>";
	$con=2;
	while (	$fila=$resultado->fetch_assoc()) {
echo "<tr class='bg2 ' align='center'><td>".$fila['nombres']."</td><td>".$fila['apellidos']."</td> <td>".$fila['correo']."</td></tr>";
				}		
echo "</table>";
?> 	 

	


