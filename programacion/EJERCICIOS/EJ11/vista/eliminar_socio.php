<?php
//Nos conectamos al controlador de socios (el intermediario entre la vista y el modelo).
require_once '../controlador/SociosController.php';
//Recogemos el id del socio que queremos eliminar.
$id = $_GET['id'];
//Creamos un objeto de la clase SociosController.
$controller = new SociosController();

//Y llamamos a la función eliminarSocio del controlador y le pasamos el id del socio que queremos eliminar.
$socio = $controller->eliminarSocio($id);
//Y nos redirigimos a la lista de socios.
header("Location: ../index.php");
?>


?>