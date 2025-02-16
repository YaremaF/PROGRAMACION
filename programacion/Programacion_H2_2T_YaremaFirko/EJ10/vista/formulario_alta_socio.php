<?php
require_once '../controlador/SociosController.php';
$controller = new SociosController();
$socios = $controller->listarUsuarios();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario de alta para usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <div class="container-fluid">
        <div class="col-md-6">
            <h1>Formulario de registro</h1>
            <form action="alta_usuario.php" method="post">
                <label for="Usuario" class="form-label"></label>
                <input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Usuario">
                <label for="Email" class="form-label"></label>
                <input type="text" class="form-control" id="Email" name="Email" placeholder="Email">
                <label for="Clave" class="form-label"></label>
                <input type="Clave" class="form-control" id="Clave" name="Clave" placeholder="Clave">

                <input type="checkbox" name="politicas" id="politicas" required>
                <label for="politicas">Acepto las <a href="politicas.php" target="_blank">políticas de privacidad</a></label><br>

                <button type="submit" class="btn btn-primary">Registrarse</button>

            </form>
        </div>
    </div>
    
    <script>
    document.getElementById("registroForm").addEventListener("submit", function(event) {
        let checkbox = document.getElementById("politicas");
        if (!checkbox.checked) {
            alert("Debes aceptar las políticas de privacidad para registrarte.");
            event.preventDefault();
        }
    });
    </script>
</body>

</html>