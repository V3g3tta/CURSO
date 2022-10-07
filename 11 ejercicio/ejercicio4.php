<?php
/**
 * ejercicio 4 recojer don nuemro por la url (parametro get) y hacer toda las operacione
 * basica de una calculadora de esps dos numero
 */

if(isset($_GET['numero1']) &&(isset($_GET['numero2']))){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    echo "<h1> CALCULADORA </h1>";
    echo "suma: $nuemro1+$numero2"."br/";
    echo "resta: $nuemro1-$numero2"."br/";
    echo "multiplicacion: $nuemro1*$numero2"."br/";
    echo "divicion: $nuemro1/$numero2"."br/";
   
}else{
    echo "<h1> introdusca correctamente los valores por al url </h1>";
}