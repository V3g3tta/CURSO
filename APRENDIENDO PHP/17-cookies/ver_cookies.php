<?php

//para mostara el valor de las cookies, tengo que usar $_cookies 
//una valirable super global, es una array asociativo.

if(isset($_COOKIE['micookie'])){
    echo $_COOKIE['micookie'];
}else{
    echo"no existe la cookies";
}
echo "</br>";

if(isset($_COOKIE['unyear'])){
    echo $_COOKIE['unyear'];
}else{
    echo"no existe la cookies";
}

?>
<br>
<a href="crear_cookies.php">crar cookies</a>
<br>
<a href="borrar_cookies.php">borrar mis galletas</a>

