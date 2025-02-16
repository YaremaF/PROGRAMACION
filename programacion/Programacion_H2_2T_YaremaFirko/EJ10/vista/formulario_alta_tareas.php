<?php
require_once '../controlador/SociosController.php';
$controller = new SociosController();
$socios = $controller->listarTareas();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Agregar tareas</title>
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



    <div class="container-fluid">
        <div class="col-md-6">
            <h1>Agregar Tareas</h1>
            <form action="alta_tarea.php" method="post">
                <label for="Descripcion" class="form-label"></label>
                <input type="text" class="form-control" id="Descripcion" name="Descripcion" placeholder="Descripcion">

                <button type="submit" class="btn btn-primary">Agregar</button>

            </form>
        </div>
    </div>
    

</body>

</html>