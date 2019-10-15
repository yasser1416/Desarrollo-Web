<?php include ("conexion.php");
//$sql="SELECT id,nombres,apellidos,cu,ci from alumnos ";
//echo $sql;
$n=$_COOKIE['n'];
for ($i=0; $i < $n; $i++) { 
    $aux=$i;
    $aux2=$i;
    $aux3=$i;
    $aux4=$i;
    $con=$i+1;
	$Nom=$_POST['txtnombres'.$i];
	$Ape=$_POST['txtapellidos'.$aux];
	$CU=$_POST['txtcu'.$aux2];
	$Sex=$_POST['txtSexo'.$aux3];
	$Cod=$_POST['txtcarrera'.$aux4];

	$sql="INSERT into alumnos(' ',nombres,apellidos,cu,sexo,codigo_carrera) values (' ',$Nom','$Ape','$CU','$Sex','$Cod')";
	

}
$resultado=$con->query($sql);