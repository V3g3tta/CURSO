<?php
//crear un script que tenga 5 variable una de tipo array
//otra tipo string
//int
//boolean
//que imprima segun su tipo de variable que sea.

$matriz = array("hola mundo",88);
$titulo = "master en php";
$numero = 77;
$verdadero = true;

if(is_array($matriz)){
    echo "<h1> el array es un array </h1>";


}
if(is_string($titulo)){
    echo "<h1>".$titulo."</h1>";
}
if (is_bool($verdadero)){
    echo "el boliano es verdadero";
}