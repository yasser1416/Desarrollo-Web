<?php 
?>
<style type="text/css"></style>
<link rel="stylesheet" href="diseñotabla.css">
<style type="text/css">

	</style>

	<?php		
			echo '<br><br><table border="1" align="center">';
				include('conexion.php');
				$sql="SELECT * FROM usuarios";
				$resultado=$con->query($sql);
				echo "<tr class='bg1' align='center'><td>Nombres</td><td>Apellidoss</td><td>Correo</td></tr>";
				$con=2;
				while (	$fila=$resultado->fetch_assoc()) {
					echo "<tr class='bg2 ' align='center'><td>".$fila['nombres']."</td><td>".$fila['apellidos']."</td> <td>".$fila['correo']."</td></tr>";
				}		
			echo "</table>";

	?>