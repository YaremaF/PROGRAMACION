<?php
//YAREMA FIRKO
//EJ1
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

//EJ2
class Circulo{
public $radio;
public function calcularArea(){
    echo "El área de este círculo con un radio de " . $this->radio . " es igual a ". (3.14 * $this->radio * $this->radio);
}
}
$areaCirculo = new Circulo();
$areaCirculo->radio = 5;

$areaCirculo->calcularArea();

//EJ3
class Vehiculo{
    public $marca;
    public function encender(){
        echo "El vehículo " . $this->marca . " se está encendiendo \n";
    }
}
class Coche extends Vehiculo{
    public $modelo;
    public function infoCoche(){
        echo ("La marca de este coche es ". $this->marca . " y su modelo es " . $this->modelo . "\n");
    }
}

$primerCoche = new Coche();
$primerCoche->marca = "Audi";
$primerCoche->modelo = "A8";
$primerCoche->encender();
$primerCoche->infoCoche();

//EJ4
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
$primerEmpleado->sueldo = 1100;
$primerEmpleado->mostrarDetalles();

$primerGerente = new Gerente();
$primerGerente->nombre = "Adri";
$primerGerente->sueldo = 2105;
$primerGerente->departamento = "Contabilidad";
$primerGerente->mostrarDetalles();

//EJ5
class Calculadora{
    public $numero1;
    public $numero2;

    public function sumar(){
        echo "El resultado de sumar " . $this->numero1 . " por " . $this->numero2 . " es igual a " . $this->numero1 + $this->numero2 . "\n";
    }
    public function restar(){
        echo "El resultado de restar " . $this->numero1 . " por " . $this->numero2 . " es igual a " . $this->numero1 - $this->numero2 . "\n";
    }
    public function multiplicar(){
        echo "El resultado de multiplicar " . $this->numero1 . " por " . $this->numero2 . " es igual a " . $this->numero1 * $this->numero2 . "\n";
    }
  
    public function dividir(){
        try{
            if($this->numero2 == 0){throw new Exception ("El divisior no puede ser 0");
            }else{echo "El resultado de dividir " . $this->numero1 . " por " . $this->numero2 . " es igual a " . $this->numero1 / $this->numero2 . "\n";
            }
        }catch(Exception $ex){
            echo($ex->getMessage());
        }
    }

}

    


$calculo = new Calculadora();
$calculo->numero1 = (int)readline("Escribe el primer numero ");
$calculo->numero2 = (int)readline("Escribe el segundo numero ");

$calculo-> sumar();
$calculo-> restar();
$calculo-> multiplicar();
$calculo-> dividir();



?>