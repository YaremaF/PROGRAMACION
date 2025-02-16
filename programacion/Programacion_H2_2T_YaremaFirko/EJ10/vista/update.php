<?php
require_once '../controlador/SociosController.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];


$controller = new SociosController();

$controller->actualizarSocio($id,$nombre, $apellido, $email, $telefono, $fecha_nacimiento);

header("Location: lista_socios.php");



?>