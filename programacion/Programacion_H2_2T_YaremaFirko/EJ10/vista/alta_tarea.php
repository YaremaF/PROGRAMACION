
<?php
require_once '../controlador/SociosController.php';
//En este archivo le mandamos los datos del formulario de alta de tarea al controlador.
//Recogemos la descripción de la tarea.
$Descripcion = $_POST['Descripcion'];



$controller = new SociosController();

$controller->agregarTarea($Descripcion);

if ($controller) {
    header('Location: lista_tareas.php');
} else {
    echo "Error al agregar socio.";
}

?>