<?php
error_reporting(E_ALL);
//1
/** 
$numero1 = readline("Dame el primer numero para calcular: ");
$numero2 = readline("Dame el segundo numero para calcular: ");

$operacion = readline("Escribe 1 si quieres sumar, 2 si quieres restar, 3 para multiplicar, 4 para division ");

if ($operacion == 1){$resultado = $numero1 + $numero2;
}elseif ($operacion == 2){$resultado = $numero1 - $numero2;
}elseif ($operacion == 3){$resultado = $numero1 * $numero2;
}elseif ($operacion == 4){$resultado = $numero1 / $numero2;
}
echo"El resultado de la operación es: $resultado";

//2
$numero = readline("Escribe el número de que quieres hacer la tabla: ");

for ($i=0; $i<$numero; $i++) {
    echo"La multiplicacion de $i por $numero = " . ($i * $numero) . "\n";
}

//EJ 3 PRIMO O NO
function esprimo($numero_primo , $contador_primo)
{
    for ($i=2; $i<=$numero_primo; $i++){
        if ($numero_primo % $i == 0) $contador_primo++;
    };
    if ($contador_primo>1){
        echo"El numero no es primo" . "\n";
    }else{
        echo"El numero si es primo" . "\n";
    }
}
$contador_primo = 0;
*/
//4 JUEGO PARA ADIVINAR NUMERO
function juego_numero($tu_numero, $numero_adivinar)
{
    while ($tu_numero != $numero_adivinar){
        if ($tu_numero > $numero_adivinar) $tu_numero = readline("El numero que tienes que adivinar es mas bajo, prueba de nuevo: ");
        elseif($tu_numero < $numero_adivinar) $tu_numero = readline("El numero que tienes que adivinar es mas alto, prueba de nuevo: ");
    }
    echo"Felicidades, has acertado el numero!!";
}
$numero_adivinar = rand(1, 100);

//EJ 5 












?>
