<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	Datos</title>
</head>
<body>
    
	<?php 

	$n=$_GET['txtalumnos'];
    setcookie('n',$n,time()+3600);
	?>
	<form action="registro.php" method="POST">
        <table> <th>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   Nombres   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</th><th>Apellidos    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</th><th>CU    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</th><th>Sexo      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</th><th>Carrera    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </th>
        </table>
       
        <table>
           
    	<?php 
    	for ($i=0; $i < $n; $i++) { 
          
            $con=$i+1;
    	?>
                
    			<tr>&nbsp &nbsp &nbsp<?php echo "<b>$con</b>"; ?>&nbsp &nbsp<input type="text" name="txtnombres<?php echo $i?>">&nbsp &nbsp  </tr>
                <tr><input type="text" name=" <?php echo 'txtapellidos'.$i?>"> &nbsp &nbsp</tr>
                <tr><input type="text" name="<?php echo 'txtcu'. $i?>">&nbsp &nbsp </tr>
                <tr>Masculino:<input type="radio" name="txtSexo<?php echo $i?>" value="masculino" >
                    Femenino:<input type="radio" name="txtSexo<?php echo $i?>" value="femenino">&nbsp &nbsp  </tr>
                <tr><select name="<?php echo 'txtcarrera'. $i?>"> 
                    <option value="245">Ing. Sistemas</option>

                    <option value="280">Ing. Ciencias de la Computacion</option>

                    <option value="310">Ing. Tecnologias de la Inf.</option>
                </select><br><br> </tr>


    	<?php
            
    	 } 
    	?>
    	
        </table>
        &nbsp &nbsp &nbsp <input type="submit" value="Registrar">
	</form>

</body>
</html>

