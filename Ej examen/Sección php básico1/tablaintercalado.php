<?php 
$filas=$_GET['txtfilas'];
$columnas=$_GET['txtcolumnas'];
?>
<style type="text/css"></style>
<link rel="stylesheet" href="diseño.css">

<table border="1" width="1000" >
	<?php 
	$con=1;
	for ($i=1;$i<=$filas;$i++)
		{		
			?>
			<tr class="bg<?php echo $con?>">
				<?php
			if($con==3){
				$con=0;
			}		
			for ($j=1;$j<=$columnas;$j++)
				{?>
				<td >
				<?php						
			  		if ($j==0)
						echo ".";
			  		else
			  			echo ".";
			  		
					?>
				</td>
		  <?php }?>
	        </tr>
	    <?php
	    	$con++;    
		}?>        

</table>