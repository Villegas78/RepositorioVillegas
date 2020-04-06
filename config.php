<?php
// Datos de la base de datos
$dbuser = "root";
$dbpwd = "";
$host = "localhost";
$db = "sistema_control";

// Creación de la conexión a la base de datos con mysqli_connect()
$connect = mysqli_connect($host, $dbuser, $dbpwd);

if (!$connect) {
	echo "No se ha podido acceder a la base de datos.";
} else {
	$select = mysqli_select_db($connect, $db);
}
?>