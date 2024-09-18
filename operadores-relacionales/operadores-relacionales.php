<?php

// Operador de == Igual, es para ver una igualdad

$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

// == igual
// var_dump($a == $b);
// var_dump($a == $b2);
// var_dump( $c == $d);

// === identico

var_dump($a === $b);
var_dump($a === $b2); // nos devuelve false porque los valores deben ser identicos // son iguales, pero no indenticos

// este  != Diferente  este operador no compara tipos

var_dump($a != $b);

// este operador si compara tipos !== diferente de comparacion de tipos 

var_dump($a !== $b);
var_dump($a !== $b2);

// < menor que

var_dump($c < $b);
var_dump($d < $b);

// > mayor que

var_dump($a > $c);
var_dump($b > $d);

// Mayo o igual que >=

var_dump($a >= $b);

var_dump($c >= $d);

// <= menor o igual que

var_dump($a <= $b);
var_dump($c <= $b);

// <=> Nave espacial

//su funcionaiento es un poco estraño // te va devolver 1- si el numero, si el numero que este es mayor a la derecha

echo 2 <=> 1;

echo 1 <=> 1;

echo -50 <=> 1;

echo "\n";

// Una funsion ?? funsion de Null, si la edad de juanito no esta definida, usa la edad de pepito

$edad_de_pepito = 23;

echo $edad_de_juanito ?? $edad_de_pepito;