<?php
//array
$peliculas = array ('batman','spiderman','el senor de los anillos');
$cantantes = ['2pac','drake','jenifer lopez'];
$personas = array (
    'nombre' => 'jesuath',
    'apellido' => 'cotes',
    'edad' => '23');
    var_dump($personas['apellido']);
//echo $pelicula['0'];
//echo '</br>';
//echo $cantantes ['2'];

//recorrer con for

echo"<h1>listado de pelicula</h1>";
echo "<ul>";
for($i=0; $i<count($peliculas);$i++){
    echo "<li>".$peliculas[$i]."</li>";
}
echo "</ul>";


//recorrer con foreach
echo"<h1>listado de cantantes</h1>";
echo "<ul>";
foreach ($cantantes as $cantante) {
    echo "<li>".$cantante."</li>";
}
echo "</ul>";

//array multidimensionales

$contactos = array(
    array(
    'nombre' => 'jesuat',
    'emal' => 'djjesuth@hormal.cpm'
    ),
    array(
     'nombre' => 'pedro',
     'emal' => 'jesuth@hormal.cpm'
        
    ),
    array(
        'nombre' => 'pepe',
        'emal' => 'djjh@hormal.cpm'  
    )
);

//echo $contactos [2]['nombre'];
foreach ($contactos as $key => $contactos) {
   var_dump($contactos);
}