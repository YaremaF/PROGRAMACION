<?php
//Crea un programa que pida al usuario dos números y muestre el resultado de todas las operaciones aritméticas básicas entre ellos.

/** 
$numero1 = readline('Dame el primer numero: ');
$numero2 = readline('Dame el segundo numero: ');

echo "La suma de " . $numero1 . " y " . $numero2 . " es: " . $numero1 + $numero2;

//Escribe un programa que determine si un número es par o impar.
$numero3 = readline('Dame el numero para saber si es par o impar: ');

if ($numero3 % 2 == 0){
    echo"El número que me has puesto es par";

}else{
    echo"El número que has puesto es impar";
}


*/
//Crea un programa que calcule el área de un círculo.

$pi = (3.14);
$diametro = readline("Dame el diámetro del círculo para poder calcular el área: ");
$radio = $diametro / 2;

$calculo_area = $pi * pow($radio,2);

echo"El área del círculo es: " . $calculo_area;

?>
