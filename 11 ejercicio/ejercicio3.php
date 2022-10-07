<?php
/*ejercicio3: escribir un programa que imprima por pantalla los cuadrados 
(un numero multiplicado por si mismop) de los 40 primnero  numero naturales*/
$contador = 0;
while($contador <=40){
    $cuadrado = $contador*$contador;
    echo"<h3>el cuadrado de  $contador es :$cuadrado<h3/>";
    $contador++;
}

