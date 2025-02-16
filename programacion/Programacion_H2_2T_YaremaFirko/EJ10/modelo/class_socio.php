<?php

require_once '../config/conexion.php';

//En este archivo tenemos el modelo, que es el encargado de interactuar con la base de datos.
//Tiene las funciones de las tareas y del registro y alta de usuarios.
//Creamos una clase llamada Socio que tiene los métodos necesarios para interactuar con la base de datos.
class Socio {
    private $conexion;

    public function __construct(){
        $this->conexion = new Conexion();
    }
    
    public function agregarTarea($Descripcion) {
        $query = "INSERT INTO tareas (Descripcion) VALUES (?)";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("s", $Descripcion);

            if ($stmt->execute()) {
                echo "Se ha registrado la tarea con éxito.";
            }else{
                echo"Error al agregar tarea: " . $stmt->error;
            }
        $stmt->close();
        
    }

    public function obtenerTareas() {
        $query = "SELECT * FROM tareas";
        $resultado = $this->conexion->conexion->query($query);
        $tareas = [];
        while ($fila = $resultado->fetch_assoc()) {
            $tareas[] = $fila;
        }
        return $tareas;
    }



    public function eliminarTarea($id) {
        $query = "DELETE FROM tareas WHERE id = ?";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo "Tarea eliminada con éxito.";
        } else {
            echo "Error al eliminar tarea: " . $stmt->error;
        }

        $stmt->close();
    }

    public function actualizarEstadoTarea($id, $estado) {

        $query = "UPDATE tareas SET Estado = ? WHERE id = ?";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("ii",$estado, $id);
        
        if ($stmt->execute()) {
            echo "Estado de la tarea actualizado con éxito.";
        } else {
            echo "Error al actualizar el estado de la tarea: " . $stmt->error;
        }
    }

    public function obtenerUsuarios() {
        $query = "SELECT * FROM usuarios";
        $resultado = $this->conexion->conexion->query($query);
        $usuarios = [];
        while ($fila = $resultado->fetch_assoc()) {
            $usuarios[] = $fila;
        }
        return $usuarios;
    }


    public function agregarUsuario($Usuario, $Email, $Clave) {
        $query = "INSERT INTO usuarios (Usuario, Email, Clave) VALUES (?, ?, ?)";
        $stmt = $this->conexion->conexion->prepare($query);
        $stmt->bind_param("sss", $Usuario, $Email, $Clave);

            if ($stmt->execute()) {
                echo "Se ha registrado la tarea con éxito.";
            }else{
                echo"Error al agregar tarea: " . $stmt->error;
            }
        $stmt->close();
        
    }

}


?>