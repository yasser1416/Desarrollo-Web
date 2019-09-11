<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Numero de mes</title>
</head>
<body>
<h1>Numero de mes (Resultado)</h1>
<?php

$meses = array('enero','febrero','marzo','abril','mayo','junio','julio',
               'agosto','septiembre','octubre','noviembre','diciembre');
$nombre = 'meses';
$resultado = lista($nombre, $meses);
echo $resultado;
echo '</form>';

function lista($nombre, $meses){
	$array = $meses;
	$txt= "<select name='$nombre' id='$nombre'>";
	for ($i=0; $i<sizeof($array); $i++){
	$txt .= "<option value='$i'>". $array[$i] . '</option>';
	}
	$txt .= '</select>';
	return $txt;
}

?>
</body>
</html>