<?php
include 'funcionesEJ2.php';

$opcion = readline("Escribe el ej al que quieres llegar: ");

if ($opcion == 1)
{

$frase = readline("Escribe la frase que quieras: ");
contador_palabras($frase);
}elseif($opcion == 2){

ascendente();
}elseif($opcion == 3){
$necesario ="/(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{8,}/" ;
$contraseña = readline("Escribe la contraseña: ");
contraseña($necesario,$contraseña);
}elseif($opcion == 4){
n_aleatorio();
}elseif($opcion == 5){
lanzar_dado();
}
?>