<!DOCTYPE html>
<html>
<head>
	<title>Captura de Alumnos</title>
</head>
<body bgcolor="violet">
	<center><h1>Datos referentes al alumno</h1></center>
	<form action="ARRAY_ALUMNO.php" method="POST">
		Nombre:
		<input type="text" name="alumo[Nombre]">
		<br>
		Matricula:
		<input type="number" name="alumno[Matricula]">
		<br>
		Edad:
		<input type="number" name="alumno[Edad]">
		<br>
		Carrera:
		<input type="text" name="alumno[Carrera]">
		<br>
		Email:
		<input type="text" name="alumno[Email]">
		<br>
		Telefono:
		<input type="number" name="alumno[Telefono]">
		<br>
		Tutor:
		<input type="text" name="alumno[Tutor]">

		<?php
		if (isset($_POST['alumno'])) {
		$array=$_POST['alumno'];
		$Nombre=$array['Nombre'];
		$Matricula=$array['Matricula'];
		$Edad=$array['Edad'];
		$Carrera=$array['Carrera'];
		$Email=$array['Email'];
		$Telefono=$array['Telefono'];
		$Tutor=$array['Tutor'];
		}
		echo "Los datos del alumno son: ",$Nombre,$Matricula,$Edad,$Carrera,$Telefono,$Tutor;


		  ?>


</body>
</html>