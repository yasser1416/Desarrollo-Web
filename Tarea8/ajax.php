<?php 
 
$nommes = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"); 
$nomdia = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"); 
$dia = date("j"); 
$mes = date("n"); 
$diasemana = date("w"); 
$hoy = $nomdia[$diasemana]." ".$dia." de ".$nommes[$mes-1]." ".date("Y").""; 

$mes= $_GET['mes'];
$anio= $_GET['anio'];


$days = cal_days_in_month(CAL_GREGORIAN, $mes, $anio); 
$days2Use = array(); 
for ($x=1; $x<=$days; $x++) $days2Use[] = $x; 

$jd = GregorianToJD($mes,1,$anio); 
$dayWeek = jddayofweek($jd,0); 

$v = 7 - $dayWeek; 
$start = ($dayWeek == 0) ? false : true; 

if ($v < 7) { 
	$m = 1; 
	$preDays2Use = array_filter($days2Use,'splitDays'); 

	$rest = 7 - count($preDays2Use); 
	$fDays2Use = array(); 
	for ($y = 1; $y <= $rest; $y++) $fDays2Use[] = '&nbsp;'; 
	foreach ($preDays2Use AS $k => $v) $fDays2Use[] = $v; 
} 
$m = 0; 
$days2Use = array_filter($days2Use,'splitDays'); 
function splitDays($d) { 
	global $v, $start, $m; 
	$com = ($m) ? ($d > $v) : ($d <= $v); 
	if (($com) AND ($start)) return false; 
	return true; 
} 
$totRestDays = count($days2Use); 

$pre = $totRestDays % 7; 
if ($pre == 0) $top = $totRestDays / 7; 
else { $top = ($totRestDays / 7) + 1; $top = floor($top); } 

$spDays = array("Dom","Lun","Mar","Mie","Jue","Vie","Sab"); 
?>
<?php
$html = '<table cellpadding="0" cellspacing="2" width="200" border="0" style="text-align: center;"> 

  <tr ><th bgstyle="color:#4069B1" scope="col">'.$nommes[$mes-1].' '.$anio.'</th></tr></table>
<table cellpadding="0" cellspacing="2" width="200" border="0" style="text-align: center;">
<tr height="17"> ';
?>

   


  
  <?php foreach($spDays AS $dd) $html = $html.'<th bgstyle="color:#4069B1" scope="col">'.$dd.'</th>'; 
  $html = $html.'</tr>'; 

if ($v < 7) { 
	$html = $html.'<tr>';
	foreach ($fDays2Use AS $k => $v) $html = $html.'<td bgstyle="color:#F0F5FF">'.$v.'</td>'; 
	$html = $html.'<tr>';
}
reset($days2Use); 
for ($x = 1; $x <= $top;$x++) { 
	$bgcolor = ($x % 2) ? "#FFFFFF" : "#F0F5FF"; 
	$html = $html.'<tr>';
	for ($p = 1; $p <= 7;$p++){
		$html = $html.'<td bgstyle="color:#'.$bgcolor.'">';
		$aux = (current($days2Use)) ? current($days2Use) : "&nbsp;";
		$html = $html.$aux.'</td>';  
		next($days2Use); 
	}
	$html = $html.'</tr>';
}
$html = $html.'</table><br> ';
echo $html;
?>