<?php

//Fácil

$nombre = "Carlos";
var_dump($nombre);
echo "<br>";
$apellido = "Gómez";
var_dump($apellido);
echo "<br>";
$edad = 18;
var_dump($edad);
echo "<br>";
$aprobado = true;
var_dump($aprobado);
echo "<br>";

//Medio

$promedio = (8 + 9.5 + 9 + 10 + 8) / 5;
var_dump($promedio);
echo "<br>";
$nombre_completo = $nombre . " " . $apellido;
var_dump($nombre_completo);
echo "<br>";
$presento_examen = (bool) 1;
var_dump($presento_examen);
echo "<br>";

//Avanzado

$numero_preguntas = 5 + "5";
var_dump($numero_preguntas);
echo "<br>";
$numero_respuestas = "5" + 5;
var_dump($numero_respuestas);
echo "<br>";
$promedio_maximo = $numero_respuestas / 1.0;
var_dump($promedio_maximo);
echo "<br>";
$michis = 3 + "5 michis";
var_dump($michis);
echo "<br>";