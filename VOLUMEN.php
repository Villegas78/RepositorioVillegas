<!DOCTYPE html>
<html>
<head>
	<title>VOLUMEN</title>
</head>
<body>
	<center><h1>CILINDRO</h1></center>

	<?php
	$radio=4;
	$altura=7;
	

	echo "El radio del colindro es: $radio<br>";
	echo "La altura del cilindro es: $altura<br>";


	$volumen=3.1416*($radio^2)*$altura;
	$area_l=2*3.1416*$radio*$altura;
	$area_b=3.1416*($radio^2);
	$area=(2*$area_b)*$area_l;


	echo "El el volmen del cilindro es: $volumen<br>";  
	echo "El area de la base del cilindro es: $area_b<br>";
	echo "El area lateal del cilindro es:$area_l<br>";
	echo "El area total del cilindro es:$area";
	

	?>

</body>
</html>