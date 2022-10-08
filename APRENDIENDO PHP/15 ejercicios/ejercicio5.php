<?php
//crear una array con el contenido con la siguiente tabla:
//accion aventura  deportes
//gta     assasing  fifa 19
//cod     crash     pes 19
//pubg    price of  moto gp 19
//         persia

// cada columna bebe ir een un ficehro separado .



$tabla = array(
    "accion" => array("gta 5","call of duty","pugb"),
    "aventura" => array("assasins cread","crash bandicoot","price of persia"),
    "deporte" => array("fifa 19","pes 19","moto gp 19")

);
var_dump($tabla);
$categoria = array_keys($tabla);
?>

<table border="1">
<?php require_once 'ejercicio/encabezado.php';?>
<?php require_once 'ejercicio/primero.php';?>  
<?php require_once 'ejercicio/segundo.php';?> 
<?php require_once 'ejercicio/tercero.php';?>
</table>