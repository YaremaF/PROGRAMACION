<?php



?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <title>Document</title>




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Inicio</a>
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
                            <li><a class="dropdown-item" href="index.php">Lista de tareas</a></li>
                            <li><a class="dropdown-item" href="index.php">Agregar tarea</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        body {
            background-image: url('img/fondo.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>


<form action="IniciarSesion.php" method="POST">
    <div class="card" style="width: 40rem; margin: 0 auto; margin-top: 10%;">

        <div class="card-body">
            <h5 class="card-title">Inicio Sesión</h5>

            <?php
            if (isset($_GET['error'])) {
            ?>  
            <p>
                <?php echo $_GET['error']; ?>
            </p>
            <?php
                }
            ?>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <i class="fa-solid fa-user"></i>
                <label>Nombre</label>
                <br>
                <input type="text" name="Usuario" class="form-control" placeholder="Inserta el nombre de usuario">
            </li>
            <li class="list-group-item">
                <i class="fa-solid fa-envelope"></i>
                <label>Correo electrónico</label>
                <br>
                <input type="text" name="Email" class="form-control" placeholder="Inserta el correo electrónico del usuario">
            </li>
            <li class="list-group-item">
                <i class="fa-solid fa-unlock"></i>
                <label>Clave</label>
                <br>
                <input type="password" name="Clave" class="form-control" placeholder="Inserta la clave del usuario">
            </li>
        </ul>
        <div class="card-body">
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            <a href="EJ10/vista/formulario_alta_socio.php" class="card-link">Registrarse</a>
        </div>
    </div>
</form>
</body>

</html>