<?php
//creo que ok

//En este archivo nos conectamos a la BBDD
//Creamos una clase llamada Conexion y que tenga los atributos necesarios para conectarse a la BBDD
class Conexion {
    private $servidor = "localhost";
    private $usuario = "root";
    private $password = "curso";
    private $base_datos =  "gestor_tareas";
    public $conexion;

    //Creamos un constructor que se conecte a la BBDD
    public function __construct(){
        $this->conexion = new mysqli($this->servidor, $this->usuario, $this->password, $this->base_datos);

        if ($this->conexion->connect_error){
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    public function cerrar(){
        $this->conexion->close();
    }
    public function getConexion(){
        return $this->conexion;
    }
}

$conexion = new Conexion;

?>