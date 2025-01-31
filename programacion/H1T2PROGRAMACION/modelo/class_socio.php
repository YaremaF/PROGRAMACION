<?php
//Decimos que necesitamos conectarnos a la BBDD.
require_once '../config/conexion.php';
//Creamos una clase llamada Socio que se encargará de hacer las operaciones con la BBDD.
class Socio {
    //Creamos un atributo privado que será la conexión a la BBDD.
    private $conexion;
    //Creamos un constructor que se conecte a la BBDD.
    public function __construct(){
        $this->conexion = new Conexion();
    }
    
    //Esta función se encarga de agregar un socio a la BBDD.
    //Le pasamos los datos que le mandamos desde el controlador el cual los recibe de la vista.
    public function agregarSocio($nombre, $apellido, $correo_electronico, $edad, $tipo_plan, $paquetes_adicionales, $duracion_suscripcion) {
        $query = "INSERT INTO socios (nombre, apellido,correo_electronico, edad, tipo_plan, paquetes_adicionales, duracion_suscripcion ) VALUES (?,?,?,?,?,?,?)";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("sssisss", $nombre, $apellido, $correo_electronico, $edad, $tipo_plan, $paquetes_adicionales, $duracion_suscripcion);
            if ($stmt->execute()) {
                echo "Socio agregado con éxito.";
            }else{
                echo"Error al agregar socio: " . $stmt->error;
            }
        $stmt->close();
        
    }
    //Esta función se encarga de devolvernos una lista con todos los socios.
    public function obtenerSocios() {
        $query = "SELECT * FROM socios";
        $resultado = $this->conexion->conexion->query($query);
        $socios = [];
        while ($fila = $resultado->fetch_assoc()) {
            $socios[] = $fila;
        }
        return $socios;
    }
    //Esta función se encarga de devolvernos un socio en concreto con el id que le pasamos.
    public function obtenerSocioPorId($id_socio) {
        $query = "SELECT * FROM socios WHERE id_socio = ?";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("i", $id_socio);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }
    //Esta función se encarga de actualizar un socio en la BBDD con los datos que le pasamos desde el controlador el cual los recibe de la vista al rellenar el formulario de actualizar.
    public function actualizarSocio($id_socio, $nombre, $apellido, $correo_electronico, $edad, $tipo_plan, $paquetes_adicionales, $duracion_suscripcion) {
        $query = "UPDATE socios SET nombre = ?, apellido = ?,correo_electronico = ?, edad = ?, tipo_plan = ?, paquetes_adicionales = ?, duracion_suscripcion = ? WHERE id_socio = ?";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("sssisssi", $nombre, $apellido, $correo_electronico, $edad, $tipo_plan, $paquetes_adicionales, $duracion_suscripcion, $id_socio);

        if ($stmt->execute()) {
            echo "Socio actualizado con éxito.";
        } else {
            echo "Error al actualizar socio: " . $stmt->error;
        }
        $stmt->close();

        //Creamos un archivo de texto para guardar los datos introducidos (esto lo tenía para ver que se estaba metiendo y saber el problema).
        $archivo = fopen("datos.txt", "w");

        if ($archivo) {
            fwrite($archivo, ( " " . $id_socio . " " .$nombre . " " . $correo_electronico . $apellido . " " . $edad . " " . $tipo_plan  . " " . $paquetes_adicionales . " " . $duracion_suscripcion . " "));
            fclose($archivo);
            echo "Texto escrito con éxito.";
        } else {
            echo "Error al abrir el archivo.";
        }

    }
    //Esta función se encarga de eliminar un socio de la BBDD con el id que le pasamos desde el controlador.
    public function eliminarSocio($id_socio) {
        $query = "DELETE FROM socios WHERE id_socio = ?";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("i", $id_socio);

        if ($stmt->execute()) {
            echo "Socio eliminado con éxito.";
        } else {
            echo "Error al eliminar socio: " . $stmt->error;
        }

        $stmt->close();
    }

}










?>