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
            $aux=$i;
            $aux2=$i;
            $aux3=$i;
            $aux4=$i;
            $con=$i+1;
    	?>
                
    			<tr>&nbsp &nbsp &nbsp<?php echo "<b>$con</b>"; ?>&nbsp &nbsp<input type="text" name="txtnombres<?php echo $i?>">&nbsp &nbsp  </tr>
                <tr><input type="text" name="txtapellidos <?php echo $aux?>"> &nbsp &nbsp</tr>
                <tr><input type="text" name="txtcu <?php echo $aux2?>">&nbsp &nbsp </tr>
                <tr>Masculino:<input type="radio" name="txtSexo <?php echo $aux3?>" value="masculino" >
                    Femenino:<input type="radio" name="txtSexo <?php echo $aux3?>" value="femenino">&nbsp &nbsp  </tr>
                <tr><select name="txtcarrera n<?php echo $aux4?>"> 
                    <option>Ing. Sistemas</option>

                    <option selected>Ing. Ciencias de la Computacion</option>

                    <option >Ing. Tecnologias de la Inf.</option>
                </select><br><br> </tr>


    	<?php
            
    	 } 
    	?>
    	
        </table>
        &nbsp &nbsp &nbsp <input type="submit" value="Registrar">
	</form>

</body>
</html>

