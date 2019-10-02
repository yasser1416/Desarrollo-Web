<?php 
$n=$_COOKIE['n'];
$multi=1;
for ($i=0; $i < $n; $i++) { 
$multi*=$_POST['n'.$i];
 } 
echo "la multiplicacion es:" .$multi;

?>
