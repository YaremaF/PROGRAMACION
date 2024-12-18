<?php
error_reporting(E_ALL);
/** 
//EJ1 CONTADOR DE PALABRAS
function contador_palabras($frase){
    if ($frase contains " ");


};

$frase = readline("Escribe la frase que quieras: ");
$espacios = substr_count($frase," ");
echo("La cantidad de palabras en el texto es de: " . ($espacios + 1));

//EJ2 ORDEN DE NUMEROS



function ascendente($numeros)
{
    $longitud = count($numeros);
    for ($i=0;$i<$longitud;$i++){
        for ($j=0;$j<$longitud - 1;$j++){
            if ($numeros[$j]>$numeros[$j+1]){
                $mayor = $numeros[$j];
                $numeros[$j] = $numeros[$j + 1];
                $numeros[$j + 1] = $mayor;
            }
        }
    }
    print_r($numeros);


}



$num1 = random_int(0,10);
$num2 = random_int(0,10);
$num3 = random_int(0,10);
$numeros = [$num1,$num2,$num3];
print_r($numeros);
ascendente($numeros);

//EJ3 VALIDACIÓN CONTRASEÑA
function contraseña($necesario,$contraseña)
{
if (preg_match($necesario, $contraseña ))
{echo"si";};
}
$necesario ="/(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{8,}/" ;
$contraseña = readline("Escribe la contraseña: ");

contraseña($necesario,$contraseña);

//EJ4 GENERADOR DE NOMBRES ALEATORIOS

$nombres = ['Juan', 'Alicia','Pedro','Antonio'];
$apellidos = ['Recio', 'Rivas', 'Pastor', 'Zumber'];
$nombre_aleatorio = random_int(0,3);
$apellido_aleatorio = random_int(0,3);

$usuario_aleatorio = [$nombres[$nombre_aleatorio]." ".$apellidos[$apellido_aleatorio]];
foreach($usuario_aleatorio as $i){
    echo $i . "\n";
}
*/
//EJ5 SIMULADOR DE DADO
$dado = random_int(1,6);
echo("Has tirado el dado y te ha salido un: " . $dado)





?>