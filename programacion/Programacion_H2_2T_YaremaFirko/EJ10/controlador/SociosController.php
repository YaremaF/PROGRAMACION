<?php
require_once '../modelo/class_socio.php';

//En este archivo tenemos el controlador, que es el intermediario entre la vista y el modelo.
//Tiene las funcines de las tareas y del registro y alta de usuarios.

class SociosController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Socio();
    }

    public function agregarTarea($Descripcion) {
        $this->modelo->agregarTarea($Descripcion);
    }

    public function listarTareas() {
        return $this->modelo->obtenerTareas();
    }


    public function eliminarTarea($id) {
        $this->modelo->eliminarTarea($id);
    }

    public function actualizarEstadoTarea($id, $estado) {
        $this->modelo->actualizarEstadoTarea($id, $estado);
    }
    public function listarUsuarios() {
        return $this->modelo->obtenerUsuarios();
    }

    public function agregarUsuario($Usuario, $Email, $Clave) {
        $this->modelo->agregarUsuario($Usuario, $Email, $Clave);
    }
}
?>


