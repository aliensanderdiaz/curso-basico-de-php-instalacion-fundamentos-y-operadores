<?php

// https://www.php.net/manual/en/language.operators.precedence.php
$a = 1;
$b = $a++;

echo $b;
echo "<br>";
echo "<br>";

// Es 1 porque primero se asigna ($b = $a) despues se hace $a++

echo 1 - 2 - 3;
echo "<br>";
echo 1 - (2 - 3);
echo "<br>";
echo "<br>";

// La resta tiene asociatividad izquierda

$c = 2;
$e = $d = $c;

echo $e;
echo "<br>";
echo "<br>";

// aqui vemos la asociatividad
// Pensariamos que hay un error porque $d no existe
// pero la asociatividad de = es right
// primero $d = $c
// segundo $e = $d

$resultado = true and false;

var_dump($resultado);

// Porque? and tiene asociatividad left
// primero $resultado = true
// segundo true and false
// por eso ya quedó resultado como true

echo "<br>";

$resultado = (true and false);

var_dump($resultado);

