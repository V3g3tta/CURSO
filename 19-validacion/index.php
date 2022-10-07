<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Validacion de Formulario</title>
    </head>
    <body>
        <h1>Validar Formulario</h1>
        <?php
        if(isset($_GET['error'])){
            $error = $_GET['error'];
            if($error == 'faltan_datos'){
                echo '<strong style="color:red">Introduce todo los datos en todo los campos del formulario</strong>';
            }
        }
        ?>
        <form method="POST" action="hola.php">
            <label for="nombre">Nombre</label><br/>
            <input type="texto" name="nombre"></br>

            <label for="apellido">Apellido</label><br/>
            <input type="texto" name="apellido"></br>

           

            <input type="submit" value="Enviar" />
        </form>
    </body>
</html>