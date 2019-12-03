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
	<input type="button" value="Pregunta 2" onclick="llamar('pregunta 2.php')">
	<div id="contenido" style="background-color: white ;width: 2000px ; height: 100px">
		
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
	function most()
		{
			lista=document.getElementsByTagName('input');
			x1=parseInt(lista[2].value);
			document.getElementById("contenido3").innerHTML=x1;

			//var cad=parseInt(document.getElementById("panel").value)
		
			document.getElementById("contenido3").style.backgroundColor="yellow";

				
		}

</script>

</body>
</html>