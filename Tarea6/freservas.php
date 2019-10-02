<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reservas</title>
	<link rel="stylesheet" type="text/css" href="maqueta.css">
	<link rel="stylesheet" href="inde.css">
</head>
<body>
	<div id='contenedor'>

	<?php
		
		session_start();
		if(isset($_SESSION['login'])){
			if($_SESSION['Nivel']==1){
				$nivel="ADMINISTRADOR  ";
				echo"<div id='arriba'>";
				echo "<div align='center'><h3>Binevenidos al Hotel Tarabuco</h3></div>";
				echo "<div align='center'><b>Usuario: </b>".$_SESSION['login']."<br><b>Nivel: </b>"."$nivel"."</div>";
				echo "<br><div align='left'><button>LISTAR USUARIOS</button></div>";  
				echo"</div>"; 
	?>			  
				<div id="izquierda">
				<br>	
				<div align="center"><a href="habitaciones.php">Habitaciones</a><br><br>	</div>	
				<div align="center"><a href="">Tipo habitacion</a><br><br></div>
				<div align="center"><a href="freservas.php">Reservas</a><br><br>	</div>
				<div align="center"><a href="">Editar</a><br><br>	</div>
				<div align="center"><a href="">Eliminar</a><br><br>	</div>
				<div align="center"><a href="">Insertar</a><br><br>	</div>
				<div align="center"><a href="cerrar.php">Cerrar sesion</a><br></div>	
				</div>	

				<div id="centro">
					<form action="reservas.php" method="POST" align="center">
						<label for="txtfecha">Fecha:</label>
						<input type="date" name="txtfecha"><br>
						<label for="txttipo">tipo:</label><br>	
						<input type="radio" name="txttipo" value="1">Simple<br>
						<input type="radio" name="txttipo" value="2">Doble<br>
						<input type="radio" name="txttipo" value="3">Triple<br>

						<label for="dias">Dias:</label>
						<input type="number" name="dias" min="1" max="31"><br>
						<input type="submit" value="Reservar">
					</form>	
	
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
				<div align="center"><a href="habitaciones.php">Habitaciones</a><br><br>	</div>	
				<div align="center"><a href="">Tipo habitacion</a><br><br></div>
				<div align="center"><a href="">Reservas</a><br><br>	</div>
				<div align="center"><a href="cerrar.php">Cerrar sesion</a><br></div>	
				</div>	

				<div id="centro">
				<form action="reservas.php" method="POST" align="center">
					<label for="txtfecha">Fecha:</label>
					<input type="date" name="txtfecha"><br>
					<label for="txttipo">tipo:</label><br>	
					<input type="radio" name="txttipo" value="1">Simple<br>
					<input type="radio" name="txttipo" value="2">Doble<br>
					<input type="radio" name="txttipo" value="3">Triple<br>

					<label for="dias">Dias:</label>
					<input type="number" name="dias" min="1" max="31"><br>
					<input type="submit" value="Reservar">
				</form>	
				</div>	
		<?php	
			}
		?>	
	</div>
	<?php
	}
		
		else{
			echo"ACCESO DENEGADO";
			echo'<meta http-equiv="REFRESH" content="2;URL=login.html">';
		}	
	?>
</body>
</html>	