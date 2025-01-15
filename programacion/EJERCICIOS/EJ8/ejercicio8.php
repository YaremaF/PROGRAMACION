<?php
/** 
//EJ1
class CuentaBancaria{
    public $titular;
    public $saldo;
    public $tipoDeCuenta;

    public function depositar($cantidad){
        echo ("Se han ingresado " . $cantidad . " euros a la cuenta \n");
        $this->saldo = $this->saldo + $cantidad;
    }
    public function retirar($cantidad){
        echo ("Se han retirado " . $cantidad . " euros a la cuenta \n");
        $this->saldo = $this->saldo - $cantidad;

    }
    public function mostrarInfo(){
        echo ("Muy buenas Pedro Del Pozo, su saldo actual de la cuenta " . $this->tipoDeCuenta . " es de " . $this->saldo . (" euros"));
    }
}
$usuario1 = new CuentaBancaria();

$usuario1->titular = "Pedro Del Pozo";
$usuario1->saldo = 0;
$usuario1->tipoDeCuenta = "Corriente";

$usuario1->depositar(100);
$usuario1->retirar(20);
$usuario1->depositar(200);
$usuario1->retirar(50);
$usuario1->mostrarInfo();

//EJ2
class Tarea{
    public $nombre;
    public $descripcion;
    public $fechaLimite;
    public $estado;

    public function marcarComoCompletada(){
        $this->estado = "completada";
    }
    public function editarDescripcion($nuevaDescripcion){
        $nuevaDescripcion = readline("Escribe una nueva descripción ");
        $this->descripcion = $nuevaDescripcion;
    }
    public function mostrarTarea(){
        echo ("Nombre: " . $this->nombre . " Descripción: " . $this->descripcion . " Fecha límite: " . $this->fechaLimite . " Estado: " .$this->estado) . "\n";
    }
}

$ejercicios = array("Mates", "Lengua", "Historia");

$ejercicios[0] = new Tarea();
$ejercicios[0]->nombre = "Juan López";
$ejercicios[0]->descripcion = "nada";
$ejercicios[0]->fechaLimite = "15/01";
$ejercicios[0]->estado = "incompleta";


$ejercicios[1] = new Tarea();
$ejercicios[1]->nombre = "Marta Mata";
$ejercicios[1]->descripcion = "esfuerzo";
$ejercicios[1]->fechaLimite = "15/01";
$ejercicios[1]->estado = "incompleta";
$ejercicios[1]->marcarComoCompletada();

$ejercicios[0]->mostrarTarea();
$ejercicios[1]->mostrarTarea();
*/
//EJ3
class Empleado{
    public $nombre;
    public $sueldo;
    public $aniosExperiencia;

    public function calcularBonus(){
        //vamos a meter una division entre 2 y que redondee a enteros luego aplicamos el 5%
        $this->sueldo = (floor($this->aniosExperiencia))*1.05;
    }
    public function mostrarDetalles(){
        
    }
}
class Consultor extends Empleado{
    public $horasPorProyecto;

    public function calcularBonus(){
        //aquí vamos a añadir un 10% de bonus por cada 100 horas,
        //las hortas restantes se redondean igual
    }
}

$empleado = new Empleado();
$empleado->nombre = "Juan Pérez";
$empleado->sueldo = 1550;
$empleado->aniosExperiencia = 5;


$consultor = new Consultor();
$consultor->nombre = "Alicia Robles";
$consultor->sueldo = 1758;
$consultor->aniosExperiencia = 6;
$consultor->horasPorProyecto = 225;

echo round(5.5, -1);
?>