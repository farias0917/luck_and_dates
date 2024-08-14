<?php
     require __DIR__ ."/../configuracion/conexionbd.php";
    class Modelo{
        public function __construct(){

        }

        static function traer_usuario($correo, $contrasenna){
            global $mi_conexion;
            $conexion = $mi_conexion->traer_conexion(); 
            $consulta = $conexion->prepare("SELECT * FROM usuario WHERE correo_usuario = :correo_usuario AND pass_usuario = :pass_usuario");
            $consulta->bindParam("correo_usuario", $correo);
            $consulta->bindParam("pass_usuario", $contrasenna);
            $consulta->execute();
            return $consulta;
        }
    }

?>