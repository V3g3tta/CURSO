<?php
//sesion : almacena y persistir datos del usuario mientras que navega en el sitio wied
//hasta que cierre sesion o cierre el navegador

//inicio sesion
session_status();
//variable local
$variable_normal = "soy una cadena de texto";
//variable de sesion
$_SESSION['variable_persistente'] = "hola soy una sesion activa";

echo $variable_normal;
echo "</br>";
echo $_SESSION['variable_persistente'];
