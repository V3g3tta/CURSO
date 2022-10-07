<?php

$error = true;
if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) &&!empty($_POST['email']) && !empty($_POST['password'])) {
$error = false;
$nombre = $_POST['nombre'];
$apellido = $_POST['apellidos'];
$edad = $_POST['edad'];
$email = $_POST['email'];
$password = $_POST['password'];
}
?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>VALIDACION DE FORMULARIO</title>
    </head>
    <body>
        
    </body>
</html>