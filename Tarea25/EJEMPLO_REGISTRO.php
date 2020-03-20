<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
</head>
<body>
    <form method="post">
    	<h1>¡¡¡Suscribte Gratis!!!</h1>
    	<input type="text" name="nombre" placeholder="Introduce tu nombre completo">
    	<input type="email" name="email" placeholder="Introduce tu E-mail">
    	<input type="submit" name="registrar">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>