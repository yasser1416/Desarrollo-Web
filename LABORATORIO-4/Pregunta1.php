<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h3>LABORATORIO 4</h3>
	<hr>
	
	<input type="button" value="Pregunta 1" onclick="llamar('formulario.html')">
	<input type="button" value="Pregunta 2" onclick="llamar('formularioPOST.html')">
	<div id="contenido" style="background-color: white;width: 400px">
		vacio
	</div>

<script>
	function llamar($direccion)
	{
		ajax=new XMLHttpRequest();
		ajax.onreadystatechange=function()
		{
		 if(ajax.readyState == 4) { 
		 	if(ajax.status == 200) { 
		 	 document.getElementById('contenido').innerHTML=ajax.responseText;
		 	}
		 	}	
		} 
		ajax.open('GET', $direccion, true); 
		ajax.send(); 
	}
	function llamarGET()
	{
		ajax=new XMLHttpRequest();
		ajax.onreadystatechange=function()
		{
		 if(ajax.readyState == 4) { 
		 	if(ajax.status == 200) { 
		 	 document.getElementById('contenido').innerHTML=ajax.responseText;
		 	}
		 	}	
		} 
		cadena="txtNombres="+encodeURIComponent(document.getElementById("txtNombres").value)+"&";
		cadena+="txtApellidos="+encodeURIComponent(document.getElementById("txtApellidos").value)+"&";
		cadena+="txtCorreo="+encodeURIComponent(document.getElementById("txtCorreo").value)+"&";
		cadena+="pass="+encodeURIComponent(document.getElementById("pass").value);
		cadena+="&nocache=" + Math.random();
		
		ajax.open('GET', 'registrar.php?'+cadena, true); 
		ajax.send(); 
	}

</script>

</body>
</html>