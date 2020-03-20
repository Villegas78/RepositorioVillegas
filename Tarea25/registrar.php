<?php 

include("con_db.php");

if (isset($_POST['registrar'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1) {
	    $nombre = trim($_POST['nombre']);
	    $email = trim($_POST['email']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$nombre','$email','$fechareg')";
	    $resultado = mysqli_query($conexion,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">INSCRITO CORRECTAMENTE</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">NO TE HAS PODIDO INSCRIBIR</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">COMPLETA LOS CAMPOS</h3>
           <?php
    }
}

?>
