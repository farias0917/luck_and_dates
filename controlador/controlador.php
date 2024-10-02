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
                $_SESSION["correo"] = $usuario["correo_usuario"];
                if ($usuario["id_rol_fk"] == 1) {
                    header("location: ../users/home_admin.php");
                }

                if ($usuario["id_rol_fk"] == 2) {
                    header("location: ../users/home_employee.php");
                }
            }else{
                echo "Usuario o contraseña incorrectos";

            }
            
        }else{
            echo "No pueden quedar campos vacios";

        }
    }
?>