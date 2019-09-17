<?php include("operaciones.php");
$char=$_POST["txtCadena"];
$char=new operaciones($char);
$char->Piramide($char);