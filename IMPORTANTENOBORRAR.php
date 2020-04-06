<?php

// Datos de la base de datos
$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "sistema_control";

// Creación de la conexión a la base de datos con mysqli_connect()
$conexion = mysqli_connect($servidor, $usuario, "") or die ("No se ha podido acceder al servidor de base de datos.");

// Selección del a base de datos a utilizar
$db = mysqli_select_db($conexion, $basededatos) or die ("Upps! No se ha podido acceder a la base de datos.");

// Establecer y realizar consulta. Guardamos en variable.
$consulta = "SELECT * FROM alumnos";
$resultado = mysqli_query($conexion, $consulta) or die ("Algo ha ocurrido en la consulta a la base de datos.");

, 
// Motrar el resultado de los registro de la base de datos
// Encabezado de la tabla
	echo "<table borde='2'>";
	echo "<tr>";
	echo "<th>Nombre</th>";
	echo "<th>Matricula</th>";
	echo "<th>Correo</th>";
	echo "<th>Teléfono</th>";
	echo "</tr>";

// Bucle while que recorre cada registro y muestra cada campo en la tabla.
while ($columna = mysqli_fetch_array($resultado)){
		echo "<tr>";
		echo "<td>" . $columna['Nombre'] . "</td><td>" . $columna['Matricula'] . "</td><td>" . $columna['Correo'] . "</td><td>" . $columna['Telefono'] . "</td>";
		echo "</tr>";
}
	
echo "</table>"; // Fin de la tabla

// Cerrar conexión de base de datos
mysqli_close($conexion);

?>