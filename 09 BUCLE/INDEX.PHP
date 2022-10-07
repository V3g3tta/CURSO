<?php

// bucle while
//estructura de control que intera o repite la ejecucion de una serie de intruciones tantas veces necesaria

//while(condicione){
    //bloque de intruciones 
    //otra instruciones
//}
$numero = 0; 
while($numero <= 100){
    //echo '<p>'.$numero.'</p>';
    echo $numero.',';
    $numero++;
}

// ejemplo
if(isset($_GET['numero'])){

    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}
echo '<hr/>';

echo '<h1>'.'TABLA DE MULTIPICAR DEL NUMERO '. '<h1/>';

$contador = 0;
while($contador <= 10){
    echo "$numero x $contador = " . ($numero*$contador)."<br/>";
    $contador ++;
}

//do while
//do {
    //bloque de instruciones
//}while(condicion);


$edad = 17;
$contador = 1;
 do {
    echo "tienes acesos al local privado $contador <br/>";
    $contador++;
 }while($edad >= 18 && $contador <= 10);
