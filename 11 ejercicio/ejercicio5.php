<?php
/**\
 ejercicio 5 hacer un programa que mustre todos los numero entre dos numeros 

 */

if(isset($_GET['numero1']) &&(isset($_GET['numero2']))){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    if($numero1 < $numero2){
        for($i=$numero1;$i <=$numero2; $i++){
        echo "$i";
        }
    }else{
        echo"el numero 1 debe ser menor que el numero 2";
    }
}else{
    echo "los parametros get no existen";
}