<?php
// funciones: es un conjunto de intruciones agrupadas 
//bajop un nombre concreto y que puede reutilizarse solamente 
//invocancdo a la funcion tantas veces como queramos

//funcion nombredemifuncion(){
//bloque/conjuntode intruciiones
//}

//ejemplo

function muestranombre(){
    echo"jesuath almario <br/>";
    echo"jesuath almario <br/>";
    echo"jesuath almario <br/>";
}

muestranombre();

//ejemplo2:
function tablas($numero){
    echo "<h3> tabla de mutiplicar del nuemero: $numero <h3/>";
    for($i =1; $i <=10; $i++){
        $operacion = $numero*$i;
        echo"$numero x $i = $operacion <br/>";

    }
}
tablas('2');

//ejemplo 3
echo "<hr/>";
function calculadora($numero1,$numero2){
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacio = $numero1 * $numero2;
    $divicion = $numero1 / $numero2;

    echo "suma: $suma <br/>";
    echo "resta: $resta<br/>";
    echo "multiplicacio: $multiplicacio <br/>";
    echo "divicion: $divicion <br/>";
    
}
calculadora(10,30);

//ejemplo4:
function getnombre($nombre){
    $texto = "el nombre es: $nombre";
    return $texto;
}   
function getapellido($apellido){
     $texto = "el nombre es: $apellido";
    return $texto;    
}
function devuelvenombre($nombre,$apellido){
     $texto =getnombre($nombre)
     ."<br/>".
    getapellido($apellido) ;
    return $texto;

}
echo devuelvenombre("jesuath","cotes");
echo "<br/>";
echo devuelvenombre("jesuath","cotes");