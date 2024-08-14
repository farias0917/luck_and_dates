<?php
    session_start();
    require __DIR__ . '/../modelo/modelo.php';
    if ($_POST) {
        if (!(empty($_POST["correo"]) || empty($_POST["contrasenna"]))) {
            $correo = $_POST["correo"];
            $contrasenna = $_POST["contrasenna"];
            $resultado = Modelo::traer_usuario($correo, $contrasenna);
            if ($resultado->rowCount() > 0) {
                $usuario = $resultado->fetch();
                $_SESSION["nombre"] = $usuario["nombre_usuario"];
                $_SESSION["apellido"] = $usuario["apellido_usuario"];
                header("location: ../cliente/home.php");
            }else{
                echo "Usuario o contraseña incorrectos";

            }
            
        }else{
            echo "No pueden quedar campos vacios";

        }
    }
?>