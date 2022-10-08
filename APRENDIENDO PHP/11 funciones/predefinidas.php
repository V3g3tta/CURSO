<?php
// deebuggear
$nombre = "jesuath";
var_dump($nombre);

//fecha
echo date('d-m-y');
echo"</br>";
echo time();

echo"</br>";
//matematica
echo "raiz cuadrada de 10: ".sqrt(10);
echo"</br>";
echo "numero aleatorio entre 10 y 40: " . rand(10,40);

echo"</br>";
echo"numero pi" . pi();

echo"</br>";
echo "redondear: " . round(7.891234,2);
echo"</br>";

//mas funciones generales
echo gettype($nombre);
//detectar tipos
if(is_string($nombre)){
    echo "esa variable es un string";
    echo"</br>";
}
echo"</br>";
if(is_float($nombre)){
    echo"la variable nombre no es una numero decimal";
}

echo"</br>";
//comprobar si exite algo
if(isset($nombre)){
    echo"la variable existe";
}else{
    echo "la variabvle no existe";
}

echo"</br>";
//limpiar espacios
$frase = " mi contenido ";
var_dump(trim($frase));


//eliminar variable o indices de array

$year = 2020;
unset($year);

//comprobar variable vacia

$texto ="";
if(empty($texto)){
    echo "la variable esta vacia";
}else{
    echo"la variable tiene conteniod";
}


//contar caracteres de un string
echo"</br>";
$cadena = "12345";
echo strlen($cadena);


//encontrar carecter
echo"</br>";
$frase = "la vida es bella";
echo strpos($frase,"vida");


//remplazar palabra de un string
$frase = str_replace("vida","moto",$frase);
echo"</br>";
echo $frase;

//matuscula y minuscula
echo"</br>";
echo strtolower($frase);
echo"</br>";
echo strtoupper($frase);

