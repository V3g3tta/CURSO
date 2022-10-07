<?php

//ejercicio1:
//un programa en php que tenga un array con 8 numero enteros 
//que haga lo siguiente :
//-recorrerlo y mostrarlo 
//-ordenarlo y mostrarlo
//-mostrar su logitud
//-buscar algo dentro del array (buecar por el parametro que me llegue )
 
//funciones
function mostrarArray($numeros){
    $resultado = "";
     foreach ($numeros as $numero) {
//resultado = $numero."</br>";
        $resultado .=$numero."</br>";
    
      
 }
  return $resultado;
 
}
//crear array
$numeros = array (11,44,55,77,23,9,97,67);

 //recorrer y mostrar
echo"<h1> recorrer y mostar </h1>";

echo mostrarArray($numeros);


//ordenarlo y mostrarlo
echo"<h1> ordenar y mostar </h1>";

sort($numeros);

echo mostrarArray($numeros);

 //r mostrar logitud
 echo"<h1> mostar su logitud </h1>";

 echo count($numeros);

 //buscar en el array
 $busqueda =55;
 echo"<h1> buscar en el array en numero $busqueda </h1>";
 $search = array_search($busqueda,$numeros);
 if(!empty($search)){
    echo "si existe en el array, en el indice: $search";

 }else{
    echo"no existe";
 }
