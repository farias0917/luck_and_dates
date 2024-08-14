<?php
    class Conexion{

        //PROPIEDADES
        private $host;
        private $nombre_bd;
        private $usuario; 
        private $contrasenna; 

        function __construct($host, $nombre_bd, $usuario, $contrasenna){
            $this->host = $host;
            $this->nombre_bd = $nombre_bd;
            $this->usuario = $usuario;
            $this->contrasenna = $contrasenna;
        }

        function traer_conexion(){
            try {
                $conex = new PDO("mysql:localhost=$this->host;dbname=$this->nombre_bd", $this->usuario, $this->contrasenna);
                return $conex;

            } catch (PDOException $e) {
                echo "Error! ".$e->getMessage();
            }
        }
    }

    $mi_conexion = new Conexion("localhost", "lock_and_dates", "root", "");
?>