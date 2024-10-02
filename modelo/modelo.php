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

        static function crear_usuario($numdoc, $tipodoc, $nombre, $apellido, $direccion, $telefono, $correo, $contrasenna, $rol){
            global $mi_conexion;
            $conexion = $mi_conexion->traer_conexion(); 
            $consulta = $conexion->prepare("INSERT INTO usuario (num_doc_usuario, tipo_doc_usuario, nombre_usuario, apellido_usuario, direccion_usuario, telefono_usuario, correo_usuario, pass_usuario, id_rol_fk) VALUES (:num_doc_usuario, :tipo_doc_usuario, :nombre_usuario, :apellido_usuario, :direccion_usuario, :telefono_usuario, :correo_usuario, :pass_usuario, :id_rol_fk)");
            
            $consulta->bindParam("num_doc_usuario", $numdoc);
            $consulta->bindParam("tipo_doc_usuario", $tipodoc);
            $consulta->bindParam("nombre_usuario", $nombre);
            $consulta->bindParam("apellido_usuario", $apellido);
            $consulta->bindParam("direccion_usuario", $direccion);
            $consulta->bindParam("telefono_usuario", $telefono);
            $consulta->bindParam("correo_usuario", $correo);
            $consulta->bindParam("pass_usuario", $contrasenna);
            $consulta->bindParam("id_rol_fk", $rol);
            $consulta->execute();
            return $consulta;
        }

        static function traer_usuarios($correo){
            global $mi_conexion;
            $conexion = $mi_conexion->traer_conexion(); 
            $consulta = $conexion->prepare("SELECT * FROM usuario WHERE correo_usuario != :correo_usuario");
            $consulta->bindParam("correo_usuario", $correo);
            $consulta->execute();
            return $consulta;
        }

        static function eliminar_usuario($id){
            global $mi_conexion;
            $conexion = $mi_conexion->traer_conexion(); 
            $consulta = $conexion->prepare("DELETE FROM usuario WHERE id_usuario = :id_usuario");
            $consulta->bindParam("id_usuario", $id);
            $consulta->execute();
        }

        static function traer_usuario_por_id($id){
            global $mi_conexion;
            $conexion = $mi_conexion->traer_conexion(); 
            $consulta = $conexion->prepare("SELECT * FROM usuario WHERE id_usuario = :id_usuario");
            $consulta->bindParam("id_usuario", $id);
            $consulta->execute();
            return $consulta;
        }

        static function actualizar_usuario($numdoc, $tipodoc, $nombre, $apellido, $direccion, $telefono, $correo, $contrasenna, $rol, $id){
            global $mi_conexion;
            $conexion = $mi_conexion->traer_conexion(); 
            $consulta = $conexion->prepare("UPDATE usuario SET num_doc_usuario = :num_doc_usuario, tipo_doc_usuario = :tipo_doc_usuario, nombre_usuario = :nombre_usuario, apellido_usuario = :apellido_usuario, direccion_usuario = :direccion_usuario, telefono_usuario = :telefono_usuario, correo_usuario = :correo_usuario, pass_usuario = :pass_usuario, id_rol_fk = :id_rol_fk WHERE id_usuario = :id_usuario");
            $consulta->bindParam("num_doc_usuario", $numdoc);
            $consulta->bindParam("tipo_doc_usuario", $tipodoc);
            $consulta->bindParam("nombre_usuario", $nombre);
            $consulta->bindParam("apellido_usuario", $apellido);
            $consulta->bindParam("direccion_usuario", $direccion);
            $consulta->bindParam("telefono_usuario", $telefono);
            $consulta->bindParam("correo_usuario", $correo);
            $consulta->bindParam("pass_usuario", $contrasenna);
            $consulta->bindParam("id_rol_fk", $rol);
            $consulta->bindParam("id_usuario", $id);
            $consulta->execute();
        }
    }
?>