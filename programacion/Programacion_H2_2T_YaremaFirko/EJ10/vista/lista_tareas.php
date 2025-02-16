<?php
require_once '../controlador/SociosController.php';
$controller = new SociosController();
$tareas = $controller->listarTareas();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Listado de tareas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../Inicio.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Tareas
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="lista_tareas.php">Lista de tareas</a></li>
                            <li><a class="dropdown-item" href="formulario_alta_tareas.php">Agregar tarea</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <h1>Tareas Registradas</h1>

    <div class="col-md-6">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Descripción</th>
                    <th>Completada</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tareas as $tarea): ?>
                    <tr>
                        <td><?= $tarea['id'] ?></td>
                        <td><?= $tarea['Descripcion'] ?></td>
                        <td>
                            <form method="POST" action="actualizar_estado.php">
                            <input type="hidden" name="id_tarea" value="<?= $tarea['id'] ?>">
                    <input type="checkbox" name="estado" value="1" 
                        <?= $tarea['Estado'] == 1 ? 'checked' : '' ?>
                        onchange="this.form.submit()">
                            </form>
                        </td>
                        <td>
                            <a href="eliminar_tarea.php?id=<?= $tarea['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que quieres eliminar esta tarea?')">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>