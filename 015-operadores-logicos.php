<?php

$michis_felinos = true;
$michis_4_patas = true;
$michis_vuelan = false;
$michis_programan_con_PHP = false;

var_dump($michis_felinos && $michis_4_patas);
echo "<br>";

var_dump($michis_felinos && $michis_vuelan);
echo "<br>";

var_dump($michis_programan_con_PHP && $michis_felinos);
echo "<br>";

var_dump($michis_vuelan && $michis_programan_con_PHP);
echo "<br>";
echo "<br>";

var_dump($michis_felinos and $michis_4_patas);
echo "<br>";

var_dump($michis_felinos and $michis_vuelan);
echo "<br>";

var_dump($michis_programan_con_PHP and $michis_felinos);
echo "<br>";

var_dump($michis_vuelan and $michis_programan_con_PHP);
echo "<br>";
echo "<br>";

var_dump($michis_felinos || $michis_4_patas);
echo "<br>";

var_dump($michis_felinos || $michis_vuelan);
echo "<br>";

var_dump($michis_vuelan || $michis_programan_con_PHP);
echo "<br>";
echo "<br>";

var_dump(!$michis_felinos);
echo "<br>";

var_dump(!$michis_4_patas);
echo "<br>";

var_dump(!$michis_vuelan);
echo "<br>";
echo "<br>";

$resultado = true and false;
var_dump($resultado);