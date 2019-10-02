<?php include ("conexion.php");


//$sql="SELECT id,nombres,apellidos,cu,ci from alumnos ";
//echo $sql;
$Fecha=$_POST['txtfecha'];
$Tipoh=$_POST['txttipo'];
$Dias=$_POST['dias'];

$sql="INSERT into reservas(fecha,tipohabitacion,dias) values ('$Fecha','$Tipoh',$Dias)";
//echo $sql;
$resultado=$con->query($sql);
?>