<?php
/*
Ejercicio 3

Crea una función que reciba un parámetro de cualquier tipo y que devuelva únicamente valores enteros. 
La función devolverá el valor que reciba como parámetro. 
A continuación crea un bloque try catch que capture la excepción producida tras pasarle, 
a la función, un valor por parámetro que no sea entero.
*/
function returnInteger($value): int {
  return $value;
}

echo returnInteger(15);
echo "<hr>";
try {
  echo returnInteger('hola');
} catch (Error $e) {
  echo "Error en returnInteger(): " . $e->getMessage();
}
?>