<?php
require_once('person.php');

$person1 = new Person('pepe', '21/11/1988', 'masculino');

echo $person1;

echo '<hr>';
$person2 = new Person('marta', '11/08/1999');

var_dump($person2);

echo '<hr>';
$person3 = new Person('marta');

var_dump($person3);

echo '<hr>';
echo get_class($person1);