<?php 
class operaciones
{
	private $n;
	private	$cadena;
	private $a;
	private $b;
	private $c;	
	function __construct($n2)
	{
		$this->n=$n2;
		
	
	}
	function __construct1($a2,$b2,$c2){
		$this->a=$a2;
		$this->b=$b2;
		$this->c=$c2;
	}
	function __construct2($cadena2){
		$this->cadena=$cadena2;
	}
	
	public function Calcular_Fibonaci($n2)
	{
		$aux=0;
		$aux2=1;
		$aux3;
		for($i=1; $i<=$this->n; $i++)
		{
			echo $aux." ";
			$aux3=$aux+$aux2;
			$aux= $aux2;
			$aux2= $aux3;
		}
	}
	public function Calcular_Menor($a2,$b2,$c2)
	{
		if($a2 < $b2 && $a2 < $c2)
		{
			echo $a2." es el numero menor";
			
		}
		if($b2 < $a2 && $b2 < $c2)
		{
			echo $b2. " es el numero menor";
			
		}
		if($c2 < $a2 && $c2 < $b2)
			echo $c2. " es el numero menor";
	
	}

	public function Piramide($cadena2){
	$aux=strlen($this->cadena)/2;
	echo $this->cadena[$aux-1]."<br>";
	echo substr($this->cadena,$aux-2,$aux)."<br>";
	$i=3;
	while($i<=$aux){
	    echo substr($this->cadena,$aux-$i,$aux-$i-1)."<br>";
	    $i++;
	}
	echo $this->cadena;
	}
}
