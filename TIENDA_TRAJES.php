<!DOCTYPE html>
<html>
<head>
	<title>Tienda Trajes</title>
</head>
<body>
	<h2>EL TRAJESITO</h2>
	<?php 
	//La persona empleada para este programa es una mujer de 45 años de edad y compró un traje de $4000
	$sexo="Mujer";
	$edad="45";
	$costo="4000";

	//Se le hace un descuento de .17(ya que por su edad se le aplica un 2% de descuento y por el precio es de mas de 2500 15%)
	$subtotal= $costo*.17;
	$total= $costo-$subtotal;



	echo "¿Es usted hombre o mujer?: $sexo <br>";
	echo "¿Cual es su edad?: $edad <br>";
	echo "¿Cual es el costo del traje a pagar? $costo <br>";
	echo "<br><br>";
	echo "Usted es mujer mayor de 25 años y el precio de su traje es mayor a 2500, por lo tanto,";
	echo "su descuento es: $subtotal <br>";
	echo "Su total a pagar es: $total";

	 ?>

</body>
</html>