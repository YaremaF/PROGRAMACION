<?php
//Nos conectamos al controlador de tareas (el intermediario entre la vista y el modelo).
require_once '../controlador/SociosController.php';
//Recogemos el id del tarea que queremos eliminar.
$id = $_GET['id'];
//Creamos un objeto de la clase SociosController.
$controller = new SociosController();

//Y llamamos a la función eliminarTarea del controlador y le pasamos el id del tarea que queremos eliminar.
$socio = $controller->eliminarTarea($id);
//Y nos redirigimos a la lista de tareas.
header("Location: lista_tareas.php");
?>