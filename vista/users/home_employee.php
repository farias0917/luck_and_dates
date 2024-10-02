<?php 
    session_start();

    if (!isset($_SESSION["nombre"])) {
        header("location: login.php");
    }
?>

<link rel="stylesheet" href="../css/styles.css">
<h1><?php echo "Bienvenido Empleado ".$_SESSION["nombre"]." ".$_SESSION["apellido"]; ?></h1>
<a href="cerrar_sesion.php">Cerrar sesion</a>