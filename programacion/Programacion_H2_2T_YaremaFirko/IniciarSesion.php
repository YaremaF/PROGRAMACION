<?php
session_start();

include("EJ10/config/conexion.php");
$conexion = new Conexion();
$mysqli = $conexion->getConexion();

if (isset($_POST['Usuario']) && isset($_POST['Email']) && isset($_POST['Clave'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Usuario = validate($_POST['Usuario']);
    $Email = validate($_POST['Email']);
    $Clave = validate($_POST['Clave']);

    if (empty($Usuario)) {
        header("Location: index.php?error=Nombre de usuario es requerido");
        exit();
    } else if (empty($Email)) {
        header("Location: index.php?error=Correo electrónico es requerido");
        exit();
    } else if (empty($Clave)) {
        header("Location: index.php?error=Clave es requerida");
        exit();
    } else {
        
        $sql = "SELECT * FROM usuarios WHERE Usuario=? AND Email=? AND Clave=?";
        $stmt = $mysqli->prepare($sql);
        
        $stmt->bind_param("sss", $Usuario, $Email, $Clave);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result) {
            if (mysqli_num_rows($result) === 1) {
                // Si la consulta encontró un resultado, obtenemos la fila
                $row = mysqli_fetch_assoc($result);
                
                // Depuración: muestra los valores devueltos
                var_dump($row);  // Muestra los valores de la fila obtenida de la base de datos

                if ($row['Usuario'] === $Usuario && $row['Email'] === $Email && $row['Clave'] === $Clave) {
                    // Si los valores coinciden, se loguea al usuario
                    $_SESSION['Usuario'] = $row['Usuario'];
                    $_SESSION['Email'] = $row['Email'];
                    $_SESSION['Clave'] = $row['Clave'];
                    header("Location: Inicio.php");
                    exit();
                } else {
                    header("Location: index.php?error=Nombre de usuario, correo electrónico o clave incorrectos");
                    exit();
                }
            } else {
                header("Location: index.php?error=Nombre de usuario, correo electrónico o clave incorrectos");
                exit();
            }
        } else {
            die("Error en la consulta: " . $mysqli->error);  // Depuración de la consulta
        }
    }
} else {
    echo "POST data not set.";
    var_dump($_POST); // Para verificar si los datos llegan correctamente
}

?>