<?php

$segundos = (int) readline("Ingresa el tiempo en segundos: ");

$horas = (int) ($segundos / 3600);
$segundos = $segundos % 3600;

$minutos = (int) ($segundos / 60);
$segundos = $segundos % 60;

echo "\n";
echo "$horas:$minutos:$segundos";
echo "\n";


$horas = (int) readline("Ingresa el tiempo en horas: ");
echo "\n";

$minutos = (int) readline("Ingresa el tiempo en minutos: ");
echo "\n";

$segundos = (int) readline("Ingresa el tiempo en segundos: ");
echo "\n";

$segundos = $segundos + $minutos * 60 + $horas * 3600;
echo "Segundos: $segundos";