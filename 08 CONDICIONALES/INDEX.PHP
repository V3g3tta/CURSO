<?php
// condicionales if
//if:(condicion){
//    intruciones
//}else{
//otras instruciones
//}



//operadores de comparacion
// == igual 
// === identico
// != distinto o diferente
// <> diferente
// !== no identico
// < menor que 
// > mayor que 
// <= menor igual que
// >= mayor igual que 

$color = 'verde';
if ($color == 'rojo'){
    echo 'el color es rojo';
}else{
    echo 'el color no es rojo';
}

echo '<br/>';
$year = 2021;
if($year != 2022){
    echo 'diferente en 2022';
}else{
    echo '  estamos en el 2022';
}
//ejemplo 3
echo '<br/>';
$ciudad = 'madrid';
$edad = 42;
$edad_mayor = 18;
$nombre = 'david';
$continente = 'sur';
if ($edad >= $edad_mayor){
    echo $nombre .' si es mayor de edad ';
    if($continente == 'europa'){
        echo 'y es '.$ciudad ;
    }else{
        echo 'no es europero';
    }
}else{
    $nombre. ' no es mayor de edad ';
}
echo '<br/>';
//ejemplo4
$dia = 7;
if ($dia == 1){
    echo 'es lunes';

}else{
    if($dia == 2){
        echo 'es martes';
    }else{
        if($dia == 3){
            echo 'miercoles';
        }else{
            if($dia == 4){
                echo 'es jueves';
            }else{
                if($dia == 5){
                    echo 'viernes';
                }else{
                    echo 'es fin de semana';
                }
            }
        }
    }
}
echo '<br/>';

if($dia == 1){
    echo'lunes';    
}elseif($dia == 2){
    echo 'martes';
}elseif($dia == 3){
    echo 'miercole';
}elseif($dia == 4){
    echo 'jueves';
}elseif($dia == 5){
    echo 'viernes';
}else{
     echo'fin de semana';
}

//operadores logico
// && and y
//  or o
// ! not mo
//ejemplo
echo '<br/>';
$edad1 = 18;
$edad2 = 64;

$edad_oficial =20 ;

if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo 'esta en edad de trabajar ';    
}else{
    echo 'no puede trabajar';
}


$pais = 'mexico';
if($pais == 'mexico' || $pais == 'españa'|| $pais == 'colombia' ){
    echo ' en este paise se habla espanol';
}else{
    echo ' no se habla spanish';
}



//ejemplo con el switch
echo '<br/>';

$dias = 1;

switch($dias){
    case 1: 
        echo 'lunes';
        break;
    case 2:
        echo 'martes'; 
        break;
    case 3:
        echo 'miercoles';
        break;    
    case 4:
         echo 'jueves';
         break;    
    case 5:
         echo 'viernes';
         break;
    default:
    echo 'es fin de semana'  ;   
    

} 

//operador goto
goto marca;
echo '<h3>intruciones 1</h3>';
echo '<h3>intruciones 2</h3>';
echo '<h3>intruciones 3</h3>';
echo '<h3>instruciones 4</h3>';

marca:
echo 'me e saltado 4 echos';