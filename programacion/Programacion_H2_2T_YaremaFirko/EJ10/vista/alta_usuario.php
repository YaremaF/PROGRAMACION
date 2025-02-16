
<?php
require_once '../controlador/SociosController.php';
//En este archivo le mandamos los datos del formulario de alta de usuario al controlador.
//Recogemos el usuario, email y clave.
$Usuario = $_POST['Usuario'];
$Email = $_POST['Email'];
$Clave = $_POST['Clave'];


$controller = new SociosController();

$controller->agregarUsuario($Usuario, $Email, $Clave);

if ($controller) {
    header('Location: ../../index.php');
} else {
    echo "Error al agregar socio.";
}

?>



