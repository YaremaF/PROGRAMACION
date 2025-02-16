<?php

//Este archivo se encarga de actualizar el estado de una tarea, si esta completada o no.
require_once '../controlador/SociosController.php';
$controller = new SociosController();

// Comprobar si se ha enviado el formulario
if (isset($_POST['id_tarea'])) {
    // Recoger los datos del formulario
    $id_tarea = $_POST['id_tarea'];
    $estado = isset($_POST['estado']) ? 1 : 0;


    $controller = new SociosController();
    $controller->actualizarEstadoTarea($id_tarea, $estado);

    // Redirigir a la lista de tareas
    header("Location: lista_tareas.php");
    exit();
}



?>