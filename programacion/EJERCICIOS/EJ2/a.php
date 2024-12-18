<?php
/**
*/
// Filtrar vocales:
$string = 'No coger vocales';
echo preg_match_all("/[^aeiou]/", $string, $matches); // 10
// Filtrar vocales y espacios:
echo preg_match_all("/[^ aeiou]/", $string, $matches); // 8
// Filtrar consonantes:
$string = "NO coger MAYUSCULAS solo minusculas"; // 23
echo preg_match_all("/[^A-Z]/", $string, $matches);


?>