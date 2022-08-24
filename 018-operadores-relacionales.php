<?php

$a = 5;
$b = 5;
$b2 = "5";

var_dump($a == $b);
echo "<br>";

var_dump($a == $b2);
echo "<br>";
echo "<br>";

var_dump($a === $b);
echo "<br>";

var_dump($a === $b2);
echo "<br>";
echo "<br>";

var_dump($a != $b);
echo "<br>";

var_dump($a != $b2);
echo "<br>";
echo "<br>";

var_dump($a !== $b);
echo "<br>";

var_dump($a !== $b2);
echo "<br>";
echo "<br>";
echo "<br>";

var_dump($a > $b);
echo "<br>";

var_dump($a < $b);
echo "<br>";
echo "<br>";
echo "<br>";

var_dump($a >= $b);
echo "<br>";

var_dump($a <= $b);
echo "<br>";
echo "<br>";
echo "<br>";

var_dump(1 <=> 2);
echo "<br>";

var_dump(1 <=> 1);
echo "<br>";

var_dump(2 <=> 1);
echo "<br>";
echo "<br>";

$edad_de_pepito = 23;
echo $edad_de_juanito ?? $edad_de_pepito;