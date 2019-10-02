<?php 
$n1=$_GET['numero1'];
$n2=$_GET['numero2'];
$filas=1;
$columnas=5;
$resultado;
?>
<style type="text/css"></style>
<link rel="stylesheet" href="diseño.css">
<style type="text/css">
	tr{
		background: lightgreen;
	}
	</style>

<table border="1" width="300" >
	<?php 
	$con=1;
	for ($i=1;$i<=$filas;$i++)
		{		
			?>
			<tr>
				<?php
			for ($j=1;$j<=$columnas;$j++)
				{
				$resultado=$n1+$n2;
				?>					
		  <?php }
		  	echo"<td align='center'>$n1</td><td align='center'>+</td> <td align='center'>$n2</td> <td align='center'>=</td> <td align='center'>$resultado</td>"
		  ?>
	        </tr>
	    <?php   
		}?>        

</table>