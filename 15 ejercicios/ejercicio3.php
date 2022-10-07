<?php
//programa que compuebe si una variable esta vacia y si esta vaci 
//rellenarla con texto en minuscula y mostrar en mayuscula y negrita.

$texto ="";

if(empty($texto)){
    
    $texto = "hola yo soy el relleno";
    $textomayus = strtoupper($texto);
    echo "<strong>".$textomayus."</strong>";
}else{
    echo "la variable tiene este contenido dentro : ". $texto;
}