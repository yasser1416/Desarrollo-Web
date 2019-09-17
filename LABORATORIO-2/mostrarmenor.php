<?php include("operaciones.php");
$a=$_GET["txtA"];
$b=$_GET["txtB"];
$c=$_GET["txtC"];
$r=new operaciones($a,$b,$c);
$r->Calcular_Menor($a,$b,$c);

