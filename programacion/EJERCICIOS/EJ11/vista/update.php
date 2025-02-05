<?php
//Nos conectamos al controlador de socios (el intermediario entre la vista y el modelo).
require_once '../controlador/SociosController.php';
//Recogemos los datos del formulario para actualizar un socio.
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo_electronico = $_POST['correo_electronico'];
$edad = $_POST['edad'];
$tipo_plan = $_POST['tipo_plan'];
$paquetes_adicionales = implode(",", $_POST['paquetes']);
$duracion_suscripcion = $_POST['duracion_suscripcion'];

//Creamos un objeto de la clase SociosController.
$controller = new SociosController();



//Llamamos a la función actualizarSocio del controlador y le pasamos los datos recogidos del formulario.
$controller->actualizarSocio($id, $nombre, $apellido, $correo_electronico, $edad, $tipo_plan, $paquetes_adicionales, $duracion_suscripcion);
//Y nos redirigimos a la lista de socios.
header("Location: ../index.php");



?>