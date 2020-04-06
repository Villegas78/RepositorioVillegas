<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de Control Escolar</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">
	<link href="css/style_nav.css" rel="stylesheet">
	<style>
		.content {
			margin-top: 80px;
		}
	</style>

</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<?php include("nav_materias.php");?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Datos de materias &raquo; Agregar datos</h2>
			<hr />

			<?php
			//INICIO DE PHP
			if(isset($_POST['registrar'])){
				$clavem = mysqli_real_escape_string($connect, $_POST['clavem']);
				$materia = mysqli_real_escape_string($connect, $_POST['materia']); 
				
				$comprobarclave = mysqli_num_rows(mysqli_query($connect, "SELECT Clave_Materia FROM materias WHERE Nombre = '$materia'"));
				if($comprobarclave >= 1){

					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. código exite!</div>';
				}else{
						$insertar = mysqli_query($connect, "INSERT INTO materias (Clave_Materia, Nombre)
													VALUES('$clavem', '$materia')");
						if($insertar){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
						}
				}	
					 
			}
			?>
<!--INICIO DE HTML-->
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Clave de la Materia</label>
					<div class="col-sm-4">
						<input type="text" name="clavem" class="form-control" placeholder="Clave de la Materia" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombre de la Materia</label>
					<div class="col-sm-4">
						<input type="text" name="materia" class="form-control" placeholder="Nombre de la Materia" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="registrar" class="btn btn-sm btn-primary" value="Guardar datos">
						<a href="Index.php" class="btn btn-sm btn-danger">Cancelar</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	$('.date').datepicker({
		format: 'dd-mm-yyyy',
	})
	</script>
</body>
</html>