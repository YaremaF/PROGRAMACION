<?php
//Nos conectamos al controlador de socios (el intermediario entre la vista y el modelo).
require_once '../controlador/SociosController.php';
//Creamos un objeto de la clase SociosController.
$controller = new SociosController();
//Llamamos a la función listarSocios del controlador para obtener la lista de socios.
$socios = $controller->listarSocios();

//Creamos un array con los paquetes y sus precios.
$paquetes = [
    'Deporte',6.99,
    'Cine',7.99,
    'Infantil',4.99
];
//Creamos un array con los tipos de plan y sus precios.
$tipo_plan = [
    'Básico', 9.99,
    'Estándar', 13.99,
    'Premium', 17.99
];
?>
<?php 
//Creamos un HTML para mostrar la lista de socios y el formulario.
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Socios</title>
    <?php 
    //En este caso, se ha utilizado Bootstrap para darle un diseño más atractivo a la tabla.
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">

</head>
<body class = "bg-image">
    <?php
    //En este caso, se ha utilizado Bootstrap para darle un diseño más atractivo a la tabla.
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <?php
    //La tabla de los usuarios registrados se muestra en una tabla con Bootstrap.
    ?>
    <h1>Usuarios Registrados</h1>

    <div class="col-md-12">
        <table class = "table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo electrónico</th>
                    <th>Edad</th>
                    <th>Tipo de plan</th>
                    <th>Paquetes adicionales</th>
                    <th>Duración de suscripción</th>
                    <th>Total Pago</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($socios as $socio): ?>
                    <?php
                    //En esta tabla se muestran los datos de los socios registrados en la base de datos.
                    ?>
                    <tr>
                    <td><?= $socio['id_socio'] ?></td>
                    <td><?= $socio['nombre'] ?></td>
                    <td><?= $socio['apellido'] ?></td>
                    <td><?= $socio['correo_electronico'] ?></td>
                    <td><?= $socio['edad'] ?></td>
                    <td><?= $socio['tipo_plan'] ?></td>
                    <td><?= $socio['paquetes_adicionales'] ?></td>
                    <td><?= $socio['duracion_suscripcion'] ?></td>
                    <td>
                        <?php
                        //En esta parte se calcula el total a pagar por el socio.
                        $total = 0;
                        $total += $tipo_plan[array_search($socio['tipo_plan'], $tipo_plan) + 1];
                        $paquetes_adicionales = explode(",", $socio['paquetes_adicionales']);
                        foreach ($paquetes_adicionales as $paquete) {
                            $total += $paquetes[array_search($paquete, $paquetes) + 1];
                        }

                        // Multiplicar por 12 si la duración es anual
                        if ($socio['duracion_suscripcion'] == 'Anual') {
                            $total *= 12;
                        }

                        echo $total;
                        ?>
                    </td>
                    <td class = "table-secondary">
                        <a href="editar_socio.php?id=<?= $socio['id_socio'] ?>">Editar</a>
                        <a href="eliminar_socio.php?id=<?= $socio['id_socio'] ?>">Eliminar</a>
                    </td>

                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <br>
    <?php
    //Esto es el formulario de alta de socios.
    ?>
    <div class="container-fluid">
        <div class="col-md-12" >
            <h1>Formulario de alta de socio</h1>
                <form action="alta_socio.php" method="post">
                    <label for="nombre" class="form-label"></label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                    <label for="apellido" class="form-label"></label>
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
                    <label for="correo_electronico" class="form-label"></label>
                    <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" placeholder="Correo electronico">
                    <label for="edad" class="form-label"></label>
                    <input type="text" class="form-control" id="edad" name="edad" placeholder="Edad">
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
                    <br>
                    <button type="submit" class="btn btn-primary">Agregar Socio</button>
                </form>
        </div>
    </div>

</body>

</html>


