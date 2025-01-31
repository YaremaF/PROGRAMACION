<?php
//Nos conectamos al controlador de socios (el intermediario entre la vista y el modelo).
require_once '../controlador/SociosController.php';
//Cogemos el id del socio que queremos editar.
$id = $_GET['id'];
// Creamos un objeto de la clase SociosController.
$controller = new SociosController();

// Obtenemos los datos del socio.
$socio = $controller->obtenerSocioPorId($id);


?>
<?php
//Creamos un HTML para mostrar el formulario de edición de socios.
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Socios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        body {
            background-image: url('img/g.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>

<body>


    <div class="container-fluid">
        <div class="col-md-6" >
            <?php
            //Este es el formulario de edición de socios.
            ?>
            <h1>Formulario de edición de socio</h1>
            <?php
            //Mediante este metodo se nos insertan los datos anteriores y con el método POST recogemos los datos.
            ?>
                <form action="update.php" method="POST">
                    <input type="hidden" name="id" placeholder="id" value="<?= $id ?>" >
                    <label for="nombre" class="form-label"></label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?= $socio['nombre'] ?>">
                    <label for="apellido" class="form-label"></label>
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="<?= $socio['apellido'] ?>">
                    <label for="correo_electronico" class="form-label"></label>
                    <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" placeholder="Correo electronico" value="<?= $socio['correo_electronico'] ?>">
                    <label for="edad" class="form-label"></label>
                    <input type="text" class="form-control" id="edad" name="edad" placeholder="Edad" value="<?= $socio['edad'] ?>">
                    <br>
                    <label for="tipo_plan" class="form-label">Tipo de Plan:</label>
                    <select name="tipo_plan" id="tipo_plan" class="form-select"> >
                        <option value="Básico">Básico</option>
                        <option value="Estándar">Estándar</option>
                        <option value="Premium">Premium</option>
                    </select>
                    <br>
                    <label for="paquetes_adicionales" class="form-label"> Paquetes adicionales:</label>
                    <div>
                        <input type="checkbox" id="deporte" name="paquetes[]" value="Deporte">
                        <label for="deporte">Deporte</label>
                        <br>
                        <input type="checkbox" id="cine" name="paquetes[]" value="Cine">
                        <label for="cine">Cine</label>
                        <br>
                        <input type="checkbox" id="infantil" name="paquetes[]" value="Infantil">
                        <label for="infantil">Infantil</label>
                    </div>
                    <br>
                    <label for="duracion_suscripcion" class="form-label">Duración de suscripción</label>
                    <select name="duracion_suscripcion" id="duracion_suscripcion" class="form-select"> 
                        <option value="Mensual">Mensual</option>
                        <option value="Anual">Anual</option>
                    </select>
                    <input type="submit" class="btn btn-primary" value="Editar">
                </form>
        </div>
    </div>




</body>

