<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>INDEX</title>

	<link rel="stylesheet" type="text/css" href="maqueta.css">
	<link rel="stylesheet" href="inde.css">
</head>

<body>
	
	<?php 		
		
		session_start();
		if(isset($_SESSION['login'])){
			if($_SESSION['Nivel']==1){
				$nivel="ADMINISTRADOR  ";
				echo"<div id='contenedor'>";
				echo"<div id='arriba'>";
				echo "<div align='center'><h3>Binevenidos al Hotel Tarabuco</h3></div>";
				echo "<div align='center'><b>Usuario: </b>".$_SESSION['login']."<br><b>Nivel: </b>"."$nivel"."</div>";
				echo "<br><div align='left'><button>LISTAR USUARIOS</button></div>";   
				echo"</div>";
		?>
				<div id="izquierda">
				<br>	
				<div align="center"><a href="">Habitaciones</a><br><br>	</div>	
				<div align="center"><a href="">Tipo habitacion</a><br><br></div>
				<div align="center"><a href="freservas.php">Reservas</a><br><br>	</div>
				<div align="center"><a href="">Editar</a><br><br>	</div>
				<div align="center"><a href="">Eliminar</a><br><br>	</div>
				<div align="center"><a href="">Insertar</a><br><br>	</div>
				<div align="center"><a href="cerrar.php">Cerrar sesion</a><br></div>	
				</div>	
		<?php		    
		    }    
			else{
				$nivel="CLIENTE<br>";
				echo"<div id='contenedor'>";
				echo"<div id='arriba'>";
				echo "<div align='center'><h3>Binevenidos al Hotel Tarabuco</h3></div>";
				echo "<div align='center'><b>Usuario: </b>".$_SESSION['login']."<br><b>Nivel: </b>"."$nivel"."</div>";
				echo"</div>";
		?>		
					
				<div id="izquierda">
				<br>	
				<div align="center"><a href="">Habitaciones</a><br><br>	</div>	
				<div align="center"><a href="">Tipo habitacion</a><br><br></div>
				<div align="center"><a href="freservas.php">Reservas</a><br><br>	</div>
				<div align="center"><a href="cerrar.php">Cerrar sesion</a><br></div>	
				</div>	
			<?php	
			}	
			?>	

	<?php		
			echo '<br><br><table border="1" align="center">';
				include('conexion.php');
				$sql="SELECT * FROM tipohabitacion";
				$resultado=$con->query($sql);
				while (	$fila=$resultado->fetch_assoc()) {
					echo "<tr><td>".$fila['id_tipohabitacion']."</td><td>".$fila['habitacion']."</td></tr>";
				}		
			echo "</table>";

		}
		else{
			echo"ACCESO DENEGADO";
			echo'<meta http-equiv="REFRESH" content="2;URL=login.html">';
		}	
	?>
</body>
</html>