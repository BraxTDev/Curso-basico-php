<?php
//me ayudar pedirle a un usuario los datos
 $segundos = readline("Ingresa el tiempo en segundos: ");
 $horas = $segundos / 3600;
 $segundos = $segundos % 3600;
 $minutos = $segundos / 60;
 $segundos = $segundos % 60;


 echo $horas . " " . $segundos;



echo $segundos;

$los_michis_duermen = true;
$los_michis_vuelan = false;

var_dump($los_michis_duermen || $los_michis_vuelan);


