<!DOCTYPE html>
<html>
<head>
	<title>CANTIDADES</title>
</head>
<body>
<center><h1>MAYOR QUE..</h1></center>
<?php 

$a=8;
$b=10;
$c=6;

if ($a>$b) {
	if ($b>$c) {
		echo "El orden de los numeros es: Primero número:$a<br>";
		echo "Segundo número:$b<br>";
		echo "Tercer número= $c ";
	}
}
if ($b>$c) {
	if ($c>$a) {
		echo "El orden de los numeros es: Primero número:$b<br>";
		echo "Segundo número:$c<br>";
		echo "Tercer número= $a ";
	}
}
if ($c>$a) {
	if ($a>$b) {
		echo "El orden de los numeros es: Primero número:$c<br>";
		echo "Segundo número:$a<br>";
		echo "Tercer número= $b ";
}

if ($a>$c) {
	if ($c>$b) {
		echo "El orden de los numeros es: Primero número:$a<br>";
		echo "Segundo número:$c<br>";
		echo "Tercer número= $b ";
	}
}
if ($c>$b) {
	if ($b>$a) {
		echo "El orden de los numeros es: Primero número:$c<br>";
		echo "Segundo número:$b<br>";
		echo "Tercer número= $a ";
	}
}
if ($b>$a) {
	if ($a>$c) {
		echo "El orden de los numeros es: Primero número:$b<br>";
		echo "Segundo número:$a<br>";
		echo "Tercer número= $c ";
	}
}
 ?>
</body>
</html>