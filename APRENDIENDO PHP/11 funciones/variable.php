<?php
/**
variable locales: se efinen eentro de una funcionm y 
no pueden ser usada fuera de la funcio, solo disponiblee dentro
a no ser haga un rurnt
variable globales: son las que se declaran fuera de una funcion  y estan disponibles 
dentro y fuera de las funciones.
 */

//variable global
$frases = "ni los genios son tan genios, ni los mediocres tan mediocres";
echo $frases;
function holamundo(){
    global $frases;
    echo "<h1>".$frases."</h1>";

    $year = 2019;
    echo $year;
    return $year;
}

holamundo();

echo "</br>";
//funciones variable
function bunosdias(){
    return "hola buenos dias";
}

function buenastardes(){
    return "hey que tal la comida";

}

function buenasnoches(){
   return "te vas a dormidor?";
}

$horario = "buenasnoches";
echo$horario();
