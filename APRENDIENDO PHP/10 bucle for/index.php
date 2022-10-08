<?php
//for 
//for(ecpresion inicial, condicion, incremento contador){
//} bloque de instruciones

/*$resultado = 0;
for($i=0; $i<=100; $i++){
    $resultado = $resultado + $i;
    echo "<p> $resultado <p/>";
}
echo "<h1> el resultado es: $resultado <h1/>";

*/echo '<hr/>';
//ejemplo


if(isset($_GET['numero'])){

    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}
echo '<hr/>';

echo '<h1>'.'TABLA DE MULTIPICAR DEL NUMERO '. '<h1/>';


for($contador = 1; $contador <= 10; $contador++){
    if($numero == 45){
        echo "no se puede mostrar estas operaciones proibidas";
        break;
    }
    echo "$numero x $contador = " . ($numero*$contador)."<br/>";
}
