<?php 
    session_start();
?>

<h1><?php echo "Bienvenido ".$_SESSION["nombre"]." ".$_SESSION["apellido"]; ?></h1>
<a href="cerrar_sesion.php">Cerrar sesion</a>