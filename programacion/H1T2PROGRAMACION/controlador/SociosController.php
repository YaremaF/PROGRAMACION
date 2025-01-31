<?php
//Esto es un controlador que se encarga de ser el intermediario.
//Necesita una vez conectarse a la clase socio.
require_once '../modelo/class_socio.php';
//Creamos una clase llamada SociosController, creamos funciones a las que llamaremos mas adelante para las acciones que queremos hacer.
class SociosController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Socio();
    }
    //En esta función se le pasan los datos que le mandemos desde vista hacia el modelo de la funcion agregarSocio.
    //Esta función se encarga de agregar un socio a la BBDD.
    public function agregarSocio($nombre, $apellido,$correo_electronico, $edad, $tipo_plan, $paquetes_adicionales, $duracion_suscripcion) {
        $this->modelo->agregarSocio($nombre, $apellido,$correo_electronico, $edad, $tipo_plan, $paquetes_adicionales, $duracion_suscripcion);
    }
    //Esta duncion no necesita variables, se la llama y el controlador se va a modelo para darnos la lista de los socios.
    public function listarSocios() {
        return $this->modelo->obtenerSocios();
    }
    //Es lo mismo que antes, pero en este caso se le pasa un id para que nos devuelva un socio en concreto.
    public function obtenerSocioPorId($id_socio) {
        return $this->modelo->obtenerSocioPorId($id_socio);
    }
    //En esta función se le pasan los datos que le mandemos desde vista hacia el modelo de la funcion actualizarSocio.
    public function actualizarSocio($id_socio, $nombre, $apellido, $correo_electronico, $edad, $tipo_plan, $paquetes_adicionales, $duracion_suscripcion) {
        $this->modelo->actualizarSocio($id_socio, $nombre, $apellido, $correo_electronico, $edad, $tipo_plan, $paquetes_adicionales, $duracion_suscripcion);
    }
    //En esta función se le pasa un id para que el modelo elimine un socio en concreto.
    public function eliminarSocio($id_socio) {
        $this->modelo->eliminarSocio($id_socio);
    }
}
?>


