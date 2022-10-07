<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>VALIDACION DE FORMULARIO</title>
    </head>
    <body>
        <h1>VALIDAR FORMULARIO EN PHP</h1>

        <?php
        if(isset($_GET['error'])){
            $error = $_GET['error'];
            if($error== 'falta_datos'){
                echo '<storng style = "color:red">introduce todo los datos en todo los campos formulario</strong>';
            }
        }

        ?>

        <form method="POST" action="procesar.php">
        <label for="nombre">Nombre</label></br>
        <input type="text" name="nombre" required ="required" pattern="[A-Za-z]+"></br>

        <label for="apellidos">Apellidos</label></br>
        <input type="text" name="apellidos" required ="required" pattern="[A-Za-z]+"></br>

        <label for="edad">Edad</label></br>
        <input type="number" name="edad" required ="required" pattern="[0-9]+"></br>
        
        <label for="email">Email</br>
        <input type="email" name="email"required="required"></br>

        <label for="password">Contraseña</label></br>
        <input type="password" name="password"required="required"></br>
        </br>
        <input type="submit" value="Enviar"/>

        </form>
    </body>
</html>