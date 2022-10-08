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
            if($error == 'nombre'){
                echo '<strong style="color:red">Introduce el nombre correctamente en el formulario</strong>';
            }
            if($error == 'apellido'){
                echo '<strong style="color:red">Introduce el apellido correctamente en el formulario</strong>';
            }
            if($error == 'email'){
                echo '<strong style="color:red">Introducela correo correctamente en el formulario</strong>';
            }
            if($error == 'edad'){
                echo '<strong style="color:red">Introduce la edad correctamente en el formulario</strong>';
            }
            if($error == 'pass'){
                echo '<strong style="color:red">Introduce la contraseña correctamente en el formulario</strong>';
            }
            
         }
        ?>
        <form method="POST" action="hola.php">
            <label for="nombre">Nombre</label><br/>
            <input type="texto" name="nombre" require="required" pattern="[a-zA-Z]+"></br>

            <label for="apellido">Apellido</label><br/>
            <input type="texto" name="apellido"require="required" pattern="[a-zA-Z]+"></br>
            
            <label for="email">Email</label><br/>
            <input type="email" name="email"require="required"></br>

            <label for="edad">Edad</label><br/>
            <input type="number" name="edad"require="required" pattern="[0-9]+"></br>

            <label for="pass">Contraseña</label><br/>
            <input type="password" name="pass"require="required" minlength="5"></br>
           

            <input type="submit" value="Enviar" />
        </form>
    </body>
</html>