<?php
/** 
class Libro{
public $titulo;
public $autor;
public $nPaginas;

public function mostrarinfo(){
    echo "El título de este libro es " . $this->titulo . " su autor es " . $this->autor . " y en tótal tiene " . $this->nPaginas . " páginas.";
}
}
$PrimerLibro = new Libro();
$PrimerLibro->titulo = "El Quijote";
$PrimerLibro->autor = "Cervantes";
$PrimerLibro->nPaginas = 1560;

$PrimerLibro->mostrarinfo();

class Circulo{
public $radio;
public function calcularArea(){
    echo "El área de este círculo con un radio de " . $this->radio . " es igual a ". (3.14 * $this->radio * $this->radio);
}
}
$areaCirculo = new Circulo();
$areaCirculo->radio = 5;

$areaCirculo->calcularArea();

class Vehiculo{
    public $marca;
    public function encender(){
        echo "El vehículo se está encendiendo";
    }
}
class Coche extends Vehiculo{
    public $modelo;
    public function infoCoche(){
        echo "La marca de este coche es ". $this->marca . " y su modelo es " . $this->modelo;
    }
}

$primerCoche = new Coche();
$primerCoche->marca = "Audi";
$primerCoche->modelo = "A8";
$primerCoche->infoCoche();
*/
class Empleado{
    public $nombre;
    public $sueldo;

    public function mostrarDetalles(){
        echo "Nombre: " . $this->nombre . " Sueldo: " . $this->sueldo . "\n";
    }
}
class Gerente extends Empleado{
    public $departamento;
    public function mostrarDetalles()
    {
        echo "Nombre: " . $this->nombre . " Sueldo: " . $this->sueldo . " Departamento: " . $this->departamento . "\n";
    }
}
$primerEmpleado = new Empleado();
$primerEmpleado->nombre = "Oscar";
$primerEmpleado->sueldo = 1500;
$primerEmpleado->mostrarDetalles();

$primerGerente = new Gerente();
$primerGerente->nombre = "Oscar";
$primerGerente->sueldo = 1500;
$primerGerente->departamento = "Contabilidad";
$primerGerente->mostrarDetalles();



?>