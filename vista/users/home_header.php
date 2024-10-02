<?php 
    session_start();

    if (!isset($_SESSION["nombre"])) {
        header("location: login.php");
    }
?>

<link rel="stylesheet" href="../css/styles.css">
<link rel="stylesheet" href="../css/home.css">
<script src="https://kit.fontawesome.com/861b3604ef.js" crossorigin="anonymous"></script>
<header>
    <h3>Lock And Dates</h3>
    <div class="log-out">
     <h4><?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"]; ?> <i class="fa-solid fa-caret-up arrow"></i></h4>
     <div class="log-out-item">
        <a href="cerrar_sesion.php">Cerrar sesion</a>
     </div>
    </div>
</header>