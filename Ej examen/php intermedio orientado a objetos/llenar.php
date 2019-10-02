<?php
$n=$_GET['num'];
setcookie("n",$n,time()+3600)
?>
<form action="multiplicacion.php" method="POST">
<?php
for($i=0; $i<$n; $i++){
?>
<input type="text" name="n<?php echo $i?>"><br>
<?php
}
?>
<input type="submit" value="multiplicar">
</form>