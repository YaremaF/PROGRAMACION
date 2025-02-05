
<?php
//Nos conectamos al controlador de socios (el intermediario entre la vista y el modelo).
require_once '../controlador/SociosController.php';


//Recogemos los datos del formulario.
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo_electronico = $_POST['correo_electronico'];
$edad = $_POST['edad'];
$tipo_plan = $_POST['tipo_plan'];
$paquetes_adicionales = implode(",", $_POST['paquetes']);
$duracion_suscripcion = $_POST['duracion_suscripcion'];
echo "Edad: $edad<br>";
echo "Tipo de plan: $tipo_plan<br>";

//Creamos restricciones para los datos introducidos.
//Si el usuario es menor de 18 años y no ha seleccionado el Pack Infantil, se le mostrará un mensaje de error.
if ($edad < 18 && $paquetes_adicionales != 'Infantil') {
    echo "Error: Los usuarios menores de 18 años solo pueden contratar el Pack Infantil.";
    exit;
}
//Si el usuario selecciona más de un paquete adicional y tiene un plan básico, se le mostrará un mensaje de error.
if ($tipo_plan == 'Básico' && count($_POST['paquetes']) > 1) {
    echo "Error: Los usuarios del Plan Básico solo pueden seleccionar un paquete adicional.";
    exit;
}
//Si el usuario selecciona el paquete de deportes y la duración de la suscripción es mensual, se le mostrará un mensaje de error.
if (in_array('Deporte', $_POST['paquetes']) && $duracion_suscripcion == 'Mensual'){
    echo "Error: Para contratar el paquete de deportes la duración de la suscripción debe de ser anual.";
    exit;
}

//Creamos un archivo de texto para guardar los datos introducidos (esto lo tenía para ver que se estaba metiendo y saber el problema).
$archivo = fopen("datos.txt", "w");

if ($archivo) {
    fwrite($archivo, ( " " . $id_socio . " " .$nombre . " " . $apellido . " " . $correo_electronico . $edad . " " . $tipo_plan  . " " . $paquetes_adicionales . " " . $duracion_suscripcion . " " . "\n"));
    fclose($archivo);
    echo "Texto escrito con éxito.";
} else {
    echo "Error al abrir el archivo.";
}

//Creamos un objeto de la clase SociosController.
$controller = new SociosController();
//Llamamos a la función agregarSocio del controlador y le pasamos los datos recogidos del formulario.
$controller->agregarSocio($nombre, $apellido, $correo_electronico, $edad, $tipo_plan, $paquetes_adicionales, $duracion_suscripcion);
//Si se ha añadido correctamente, redirigimos a la lista de socios y si no, mostramos un mensaje de error.
if ($controller) {
    header('Location: lista_socios.php');
} else {
    echo "Error al agregar socio.";
}

?>



