function cambiarMes(opcion){
	var d = new Date();
    var mes = d.getMonth() + 1;
    var anio = d.getFullYear();
	switch(opcion){
		case "-anio":
		anio--;
		break;
		case "-mes":
			if(mes == 1){
				anio --;
				mes = 12;
			}
			else
				mes--;
		break;
		case "+mes":
			if(mes == 12){
				anio ++;
				mes = 1;
			}
			else
				mes++;
		break;
		case "+anio":
		anio++
		break;
	}
	llamarGET('ajax.php',mes,anio);
	//llamarPOST('ajax.php',mes,anio);
}

function llamarGET(direccion,mes,anio){//PARA GET
	direccion += '?mes=' + mes + '&anio=' + anio;
	//ajax.php?mes=5&anio=2019 esto obtenemos con la linea de arriba
	ajax=new XMLHttpRequest();
	ajax.onreadystatechange=function(){
		if(ajax.readyState == 4) { 
		 	if(ajax.status == 200){//para ajax saber de memoria hasta aqui
		 	 document.getElementById('contenido').innerHTML=ajax.responseText;//ajax.responseText es el echo del ajax
		 	}
		}
	}
	ajax.open('GET', direccion, true); 
	ajax.send(); 
}

function llamarPOST(direccion,mes,anio){//PARA POST
	ajax=new XMLHttpRequest();
	ajax.onreadystatechange=function(){
		if(ajax.readyState == 4) { 
			if(ajax.status == 200) { 
			 	 document.getElementById('contenido').innerHTML=ajax.responseText;
			}
		}	
	}

	ajax.open('POST', direccion, true);
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
	ajax.send(mes,anio); 
}