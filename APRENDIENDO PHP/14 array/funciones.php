<?php
$cantantes = ['2pac','drake','jenifer lopez','afredo'];
$numeros = [1,2,3,4,5,];
//ordenar
asort($numeros);
var_dump($numeros);

//anadir elementos

$cantantes[] = "natos";
array_push($cantantes,"woaor");
var_dump($cantantes);

//eliminar
array_pop($cantantes);
unset($cantantes[2]);
var_dump($cantantes);

//aleatorio
$indice = array_rand($cantantes);
echo$cantantes[$indice];

//reverse
var_dump(array_reverse($numeros));

//buscar dentro de una array

$resultado = array_search('drake',$cantantes);
var_dump($resultado);

//contar numero de elemento
echo sizeof($cantantes);