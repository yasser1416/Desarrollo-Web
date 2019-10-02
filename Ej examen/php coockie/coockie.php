<?php 
if (isset( $_COOKIE['contador'] ) ) {
	
	
	$valor=$_COOKIE['contador']+1;
	if($valor==5){
		echo"Indique que le gusta de este sitio: <input type='radio' >a) Buena presentacion <input type='radio' >b) Optimo<input type='radio' >c) Confiable ";
		setcookie("contador",$valor,time()+20);
	}else{
	echo "Gracias por ya ser un visitante frecuente usted visito este sitio ". $valor." veces";
	setcookie("contador",$valor,time()+20); /* expira en 1 hora */	
	}
	
}	
else 
	{
    echo "Bienvenido";	
    setcookie("contador",1,time()+10); /* expira en 1 hora */ 
	}
?> 