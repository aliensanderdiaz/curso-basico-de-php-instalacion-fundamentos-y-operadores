<?php

// Operador de Asignación 
$edad_de_jaimito = ($edad_de_pepito = 18 ) + 5 ;
echo "la edad de jaimito es $edad_de_jaimito <br>";
echo "la edad de pepito es $edad_de_pepito <br>";

// incremento

$contador = 1;
$contador = $contador + 1;
$contador += 1;
$contador++;

echo $contador;

echo "<br>";

/**
 * +=
 * -=
 * *=
 * /=
 * .=
 */

 $nombre = "Alexander";
 $nombre .= " Diaz";

 echo $nombre;

 echo "<br>";

 $contador = 1;
 $resultado = $contador++;
 echo $contador . " " . $resultado;
 echo "<br>";
 echo "<br>";

 $contador = 1;
 $resultado = ++$contador;
 echo $contador . " " . $resultado;
 echo "<br>";
 echo "<br>";