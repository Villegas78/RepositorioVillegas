<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos de alumnos</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">
	<link href="css/style_nav.css" rel="stylesheet">
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
	
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<?php include("nav.php");?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Datos de alumnos &raquo; Editar datos</h2>
			<hr />
			
			<?php
		//INICIO DE PHP


			$nik = mysqli_real_escape_string($connect,(strip_tags($_GET["nik"],ENT_QUOTES)));
			$sql = mysqli_query($connect, "SELECT * FROM alumnos WHERE nombre='$nik'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: Index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				$nombre = mysqli_real_escape_string($connect, $_POST['nombre']);//Escanpando caracteres 
				$matricula = mysqli_real_escape_string($connect, $_POST['matricula']);//Escanpando caracteres 
				$correo = mysqli_real_escape_string($connect, $_POST['correo']);//Escanpando caracteres 
				$telefono = mysqli_real_escape_string($connect, $_POST['telefono']);//Escanpando caracteres 

				$update = mysqli_query($connect, "UPDATE alumnos SET nombre='$nombre', matricula='$matricula', correo='$correo', telefono='$telefono' WHERE nombre='$nik'") or die(mysqli_error());
				if($update){
					header("Location: editar.php?nik=".$nik."&pesan=sukses");
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo guardar los datos.</div>';
				}
			}
			
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido guardados con éxito.</div>';
			}
			?>

			<!--INICIO DE HTML-->

			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombre</label>
					<div class="col-sm-4">
						<input type="text" name="nombre" value="<?php echo $columna ['nombre']; ?>" class="form-control" placeholder="Nombre Completo" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Matrícula</label>
					<div class="col-sm-4">
						<input type="text" name="matricula" value="<?php echo $columna ['matricula']; ?>" class="form-control" placeholder="Matrícula" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Correo Electrónico</label>
					<div class="col-sm-4">
						<input type="text" name="correo" value="<?php echo $columna ['correo']; ?>" class="form-control" placeholder="Correo Electrónico" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Teléfono</label>
					<div class="col-sm-3">
						<input type="text" name="telefono" value="<?php echo $columna ['telefono']; ?>" class="form-control" placeholder="Teléfono" required>
					</div>
                </div>
			
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Guardar datos">
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