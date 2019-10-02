

<?php include ("conexion.php");
//$sql="SELECT id,nombres,apellidos,cu,ci from alumnos ";
//echo $sql;
$Log=$_POST	['txtLogin'];
$Con=$_POST	['txtContraseña'];
$Ni=$_POST	['txtNivel'];
$Nom=$_POST['txtNombres'];
$Ape=$_POST['txtApellidos'];
$Em=$_POST['txtEmail'];
$Sex=$_POST['txtSexo'];

$sql="INSERT into usuarios(login,contrasena,nombres,apellidos,email,sexo,Nivel) values ('$Log','$Con','$Nom','$Ape','$Em','$Sex')";
//echo $sql;
$resultado=$con->query($sql);
?>