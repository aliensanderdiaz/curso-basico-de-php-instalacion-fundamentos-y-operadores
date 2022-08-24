<?php
// variables
$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

// resul
var_dump($es_un_michi_grande && $le_gusta_comer);
echo "<br>";
var_dump($es_un_michi_grande || $sabe_volar);
echo "<br>";
var_dump($sabe_volar || $tiene_2_patas);
echo "<br>";
var_dump(!$le_gusta_comer);
echo "<br>";
var_dump(!$le_gusta_comer || $es_un_michi_grande);
echo "<br>";