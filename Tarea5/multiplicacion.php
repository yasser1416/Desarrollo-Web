<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Tabla de multiplicar</title>
  <link rel="stylesheet" href="diseño.css" title="Color">
  <style>
    td { text-align: left; }
  </style>
</head>

<body>
  <h1>Tabla de multiplicar (Resultado)</h1>

<?php
function recoge($var)
{
    $tmp =$_GET[$var];
    return $tmp;
}

$filas    = recoge("filas");
$columnas = recoge("columnas");
$altura   = recoge("altura");
$anchura  = recoge("anchura");

$filas2 = $columnas2 = $altura2 = $anchura2 = false;

$filasMinimo   = $columnasMinimo = 1;
$alturaMinimo  = 20;
$anchuraMinimo = 20;
$filasMaximo   = $columnasMaximo = $alturaMaximo = $anchuraMaximo = 100;

if ($filas == "") {
    print "  <p class=\"aviso\">No ha escrito el número de filas.</p>\n";
    print "\n";
} elseif (!is_numeric($filas)) {
    print "  <p class=\"aviso\">No ha escrito el número de filas como número.</p>\n";
    print "\n";
} elseif (!ctype_digit($filas)) {
    print "  <p class=\"aviso\">No ha escrito el número de filas "
        . "como número entero positivo.</p>\n";
    print "\n";
} elseif ($filas < $filasMinimo || $filas > $filasMaximo) {
    print "  <p class=\"aviso\">El número de filas debe estar entre "
        . "$filasMinimo y $filasMaximo.</p>\n";
    print "\n";
} else {
    $filas2 = true;
}

if ($columnas == "") {
    print "  <p class=\"aviso\">No ha escrito el número de columnas.</p>\n";
    print "\n";
} elseif (!is_numeric($columnas)) {
    print "  <p class=\"aviso\">No ha escrito  el número de columnas como número.</p>\n";
    print "\n";
} elseif (!ctype_digit($columnas)) {
    print "  <p class=\"aviso\">No ha escrito el número de columnas "
        . "como número entero positivo.</p>\n";
    print "\n";
} elseif ($columnas < $columnasMinimo || $columnas > $columnasMaximo) {
    print "  <p class=\"aviso\">El número de columnas debe estar entre "
        . "$columnasMinimo y $columnasMaximo.</p>\n";
    print "\n";
} else {
    $columnas2 = true;
}


if ($altura == "") {
    print "  <p class=\"aviso\">No ha escrito la altura de las filas.</p>\n";
    print "\n";
} elseif (!is_numeric($altura)) {
    print "  <p class=\"aviso\">No ha escrito la altura de las filas como número.</p>\n";
    print "\n";
} elseif (!ctype_digit($altura)) {
    print "  <p class=\"aviso\">No ha escrito la altura de las filas "
        . "como número entero positivo.</p>\n";
    print "\n";
} elseif ($altura < $alturaMinimo || $altura > $alturaMaximo) {
    print "  <p class=\"aviso\">La altura de las filas debe estar entre "
        . "$alturaMinimo y $alturaMaximo.</p>\n";
    print "\n";
} else {
    $altura2 = true;
}


if ($anchura == "") {
    print "  <p class=\"aviso\">No ha escrito la anchura de las columnas.</p>\n";
    print "\n";
} elseif (!is_numeric($anchura)) {
    print "  <p class=\"aviso\">No ha escrito la anchura de las columnas como número.</p>\n";
    print "\n";
} elseif (!ctype_digit($anchura)) {
    print "  <p class=\"aviso\">No ha escrito la anchura de las columnas "
        . "como número entero positivo.</p>\n";
    print "\n";
} elseif ($anchura < $anchuraMinimo || $anchura > $anchuraMaximo) {
    print "  <p class=\"aviso\">La anchura de las columnas debe estar entre "
        . "$anchuraMinimo y $anchuraMaximo.</p>\n";
    print "\n";
} else {
    $anchura2 = true;
}

if ($filas2 && $columnas2 && $altura2 && $anchura2) {
    print "    <table class=\"conborde\" style=\"table-layout: fixed; width:" . ($anchura * ($columnas + 1)) . "px\">\n";
    print "    <tbody align>\n";
    print "      <tr $altura px\">\n";
    print "        <th>X</th>\n";
    for ($j = 1; $j <= $columnas; $j++) {
        print "        <th>$j</th>\n";
    }
    

    for ($i = 1; $i <= $filas; $i++) {
        print "      <tr $altura px\">\n";
        print "        <th>$i</th>\n";
        for ($j = 1; $j <= $columnas; $j++) {
            print "        <td>" . ($i * $j) . "</td>\n";
        }
    }
    print "    </t body>\n";
    print "  </table>\n";
    print "\n";
}

?>
  <p><a href="formulario2.html">Volver al formulario.</a></p>
  </footer>
</body>
</html>