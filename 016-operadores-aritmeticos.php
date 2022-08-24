<?php

$resultado = 5 + 5;
echo $resultado;
echo "<br>";

$resultado = 5 - 5;
echo $resultado;
echo "<br>";

$resultado = 5 ** 3;
echo $resultado;
echo "<br>";

$resultado = (5 * 3) . " " . (80 / 4);
echo $resultado;
echo "<br>";

$resultado = 5 % 2;
echo $resultado;
echo "<br>";

$resultado = 5 / 2;
echo $resultado;
echo "<br>";

$segundos = 7203;
echo $segundos . " segundos son " . (int)($segundos / 3600) . " horas";
echo "<br>";
echo "Sobran " . ($segundos % 3600) . " Segundos";