<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>operacion con funciones y sin funciones</title>
</head>
<body>
	<CENTER>

		<h1>Operacion con funciones y sin funciones</h1>
		<?php
	// SUMA SIN FUNCION 


	$n1=20;
	$n2=5;
	$resultado=$n1+$n2;
	echo "SUMA sin funciones <br>20+5= ". $resultado;

echo "<br><br><br><br>";

// SUMA con FUNCION 

function suma ($n1,$n2)
{
	return $suma=$n1+$n2;
}
$n1=20;
$n2=5;
echo "SUMA con funciones <br>20+5 =".suma($n1,$n2);

echo "<br><br><br><br>";
function resta ($n1,$n2)
{
	return $n1-$n2;
}
$n1=20;
$n2=5;
echo "RESTA CON FUNCIONES<BR>20-5 =". resta($n1,$n2);



echo "<br><br><br><br>";

function multi ($n1,$n2)
{
	return $suma=$n1*$n2;
}
$n1=20;
$n2=5;
echo "MULTIPLICACION CON FUNCIONES<BR>20*5 =".multi($n1,$n2);



echo "<br><br><br><br>";

function div ()
{
	$n1=20;
$n2=5;
	echo "DIVISION CON FUNCIONES<BR>20/5 =". $suma=$n1/$n2;
}

echo div();


echo "<br><br><br><br>";

echo"TABLA DE MULTIPLICAR SIN FUNCIONES<BR>";

	for ($tabla=5; $tabla <=5 ;$tabla++) { 
		for ($i=0; $i <11 ; $i++) {
			 echo "<BR>".$tabla."X".$i."=".$tabla*$i;
			}
		
	}


echo "<br><br><br><br>";
echo"TABLA DE MULTIPLICAR CON FUNCIONES<BR>";

function ope()
{
	for ($tabla=5; $tabla <=5 ;$tabla++) { 
		for ($i=0; $i <11 ; $i++) {

			 echo "<br>".$tabla."X".$i."=".$tabla*$i;



		}
		
	}

}
echo ope();

echo "<br><br><br><br>";
echo"TABLAS DE MULTIPLICAR CON LA FUNCION TABLAS<BR>";

function tablas()
{
	for ($tabla=0; $tabla <=12;$tabla++) { 
		for ($i=0; $i <11 ; $i++) {

			 echo "<br><br>".$tabla."X".$i."=".$tabla*$i;}
		
	}

}
echo tablas();


	

?>
	</CENTER>
</body>
</html>
