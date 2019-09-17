<?php include("operaciones.php");
$n=$_GET["txtfibo"];
$n=new operaciones($n);
$n->Calcular_Fibonaci($n);
