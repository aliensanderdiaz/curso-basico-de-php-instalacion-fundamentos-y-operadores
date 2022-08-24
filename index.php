<?php

    echo "Hola, mamá. Estoy programando";
    echo "<br>";

    $nombre = "Alexander";
    $apellido = "Diaz";

    // Concatenando
    echo "Yo me llamo " . $nombre . " " . $apellido;
    echo "<br>";
    // Sin concatenar
    echo "Yo me llamo $nombre $apellido";
    echo "<br>";
    // No funciona si se colocan comillas simples
    echo 'Yo me llamo $nombre $apellido';
    echo "<br>";
    echo "El resultado de 4 x 5 es " . (4 * 5);
    echo "<br>";

?>