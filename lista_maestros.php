<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos de maestros</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style_nav.css" rel="stylesheet">

	<style>
		.content {
			margin-top: 80px;
		}
	</style>

</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<?php include('nav_maestros.php');?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Lista de maestros</h2>
			<hr/>

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
$consulta = "SELECT * FROM maestros";
$resultado = mysqli_query($conexion, $consulta) or die ("Algo ha ocurrido en la consulta a la base de datos.");

if(isset($_GET['aksi']) == 'delete'){
	// escaping, additionally removing everything that could be (html/javascript-) code
	$nik = mysqli_real_escape_string($connect, $_GET["nik"]);
	$cek = mysqli_query($connect, "SELECT * FROM maestros WHERE nombre='$nik'");
	if(mysqli_num_rows($cek) == 0){
		echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
	}else{
		$delete = mysqli_query($connect, "DELETE FROM maestros WHERE nombre='$nik'");
		if($delete){
			echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Datos eliminado correctamente.</div>';
		}else{
			echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
		}
	}
}
// Motrar el resultado de los registro de la base de datos
// Encabezado de la tabla

	echo "<table class=table-responsive>";
    echo "<table class=table table-striped table-hover>";
	echo "<tr>";
	echo "<th>Número de Empleado</th>";
	echo "<th>Nombre</th>";
	echo "<th>Correo</th>";
	echo "<th>Teléfono</th>";
	echo "</tr>";

// Bucle while que recorre cada registro y muestra cada campo en la tabla.
while ($columna = mysqli_fetch_array($resultado)){
		echo "<tr>";
		echo "<td>" . $columna['Num_Empleado'] . "</td><td>" . $columna['Nombre'] . "</td><td>" . $columna['Correo'] . "</td><td>" . $columna['Telefono'] . "</td>";
		echo "</tr>";
}
	
echo "</table>"; // Fin de la tabla

// Cerrar conexión de base de datos
mysqli_close($conexion);

?>