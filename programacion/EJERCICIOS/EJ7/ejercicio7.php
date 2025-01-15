<?php
//EJ1
class Persona{
    public $nombre;
    public $edad;
    public $genero;

    public function presentar(){
        echo("Hola, ni nombre es " . $this->nombre . " tengo " . $this->edad . " años y mi género es " . $this->genero . "\n" );
    }
}
$usuario1 = new Persona();
$usuario1->nombre = "Antonio";
$usuario1->edad = 25;
$usuario1->genero = "Masculino";

$usuario1->presentar();

//EJ2
class Rectangulo{
    public $base;
    public $altura;

    public function calcularArea(){
        echo("El área de este rectángulo con base " . $this->base . " y altura " . $this->altura . " es igual a " . ($this->base * $this->altura) . "\n" );
    }
}

$rectangulo1 = new Rectangulo();
$rectangulo1->base = 10;
$rectangulo1->altura = 5;

$rectangulo1->calcularArea();

//EJ3
class Animal{
    public $especie;
    public function emitirSonido(){
        if ($this->especie == "canina"){echo "Guau, Guau!!" . "\n" ;
        }elseif ($this->especie == "vacuna"){echo "MUUUUU!!" . "\n" ;
        }else{echo "sonido de animal no definido" . "\n" ;}
    }
}

class Perro extends Animal{
    public $raza;

    public function raza(){
        echo ("Mi raza es " . $this->raza . "\n");
    }
}

$Oggy = new Perro();
$Oggy->especie = "canina";
$Oggy->raza = "Chihuahua";

$Oggy->emitirSonido();
$Oggy->raza();


//EJ4

class Producto{
    public $nombre;
    public $precio;

    public function mostrarDetalles(){
        echo("Este producto es un " . $this->nombre . " su precio es de " . $this->precio . "$" . "\n");
    }

}

class Electrodomestico extends Producto{
    public $consumo;

    public function mostrarDetallesElectrodomestico(){
        echo("Este producto es un " . $this->nombre . " su precio es de " . $this->precio . "$," . " su consumo es de " . $this->consumo . "kWh" . "\n");
    }
}

$producto1 = new Producto();
$producto1->nombre = "Samsung S22";
$producto1->precio = 550;

$producto1->mostrarDetalles();

$electrodomestico1 = new Electrodomestico();
$electrodomestico1->nombre = "Frigorífico Sony";
$electrodomestico1->precio = 657;
$electrodomestico1->consumo = 50;

$electrodomestico1->mostrarDetallesElectrodomestico();

//EJ5
class ConversorMoneda{
    public $valorEuro;
    public $valorDolar;
    public $cantidad;

    public function convertirDolaresAEuros(){
        echo ($this->cantidad . "$ a euros es igual a " . $this->cantidad * $this->valorEuro) . "\n";
    }
    public function convertirEurosADolares(){
        echo ($this->cantidad . " euros a $ es igual a " . $this->cantidad / $this->valorEuro) . "\n";
    }
}


$conversion = new ConversorMoneda();
$conversion->valorDolar = 1;
$conversion->valorEuro = 0.97;
$conversion->cantidad = 100;

$conversion->convertirDolaresAEuros();
$conversion->convertirEurosADolares();




?>