<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Area del triangulo</title>
</head>
<body>
<h1>Area del triangulo (Resultado)</h1>
<?php 
    function recoge($var){
        $tmp =$_GET[$var];
        return $tmp;
    }
  
    $base = recoge("base");
    $altura = recoge("altura");
    
    print ($base*$altura)/2;
?>
</body>
</html>