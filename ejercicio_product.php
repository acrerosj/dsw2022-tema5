<?php
require_once('product.php');

$product = new Product("123");
echo "<p>Número de productos: " . Product::$numProducts . "</p>"; // 1
unset($product);
echo "<p>Número de productos: " . Product::$numProducts . "</p>"; // 0

$a = new Product('555');
$a->setName('Samsung Galaxy S');

$b = $a;
echo "\$b = \$a.";
echo "<br>";
if ($b instanceof Product) {
  echo "<p>\$b es instancia de Product.</p>";
}
echo "¿Es \$a == \$b?";
echo $a == $b; // Si es cierto devuelve un 1.
echo "<br>";
echo "¿Es \$a === \$b?";
echo $a === $b;
echo "<br>";
echo "Son referencias al mismo objeto";
echo "<hr>";

$c = clone ($a);
echo "\$c es una clonación de \$a.";
echo "<br>";
echo "¿Es \$a == \$c?";
echo $a == $c;
echo "<br>";
echo "¿Es \$a === \$c?";
echo $a === $c;  // Si falso, devuelve "vacío". 
echo "<br>";
echo "Es una copia con las mismas propiedades";
echo "<hr>";

echo "cambiar: " . $b->setCode('123');
echo "cambiado a: " . $b->getCode();