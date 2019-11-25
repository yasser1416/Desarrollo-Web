<?php include ("conexion.php");
//$sql="SELECT id,nombres,apellidos,cu,ci from alumnos ";
//echo $sql;
$n=$_COOKIE['n'];
for ($i=0; $i < $n; $i++) { 
	$Nom=$_POST['txtnombres'.$i];
	$Ape=$_POST['txtapellidos'.$i];
	$CU=$_POST['txtcu'.$i];
	$Sex=$_POST['txtSexo'.$i];
	$Cod=$_POST['txtcarrera'.$i];
	echo $Nom,$Ape,$CU,$Sex,$Cod;
	$sql="INSERT into alumnos(nombres,apellidos,cu,sexo,codigo_carrera) values ('$Nom','$Ape','$CU','$Sex','$Cod')";
	echo $sql;
	$resultado=$con->query($sql);
}
