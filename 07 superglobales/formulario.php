<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset=" utf-8"/>
        <title>FORMULARIO EN PHP</title>
    </head>
    <body>
        <h1>FORMULARIO EN PHP</h1>
        <form method="POST" action ='recibir.php'>
            <p>
            <label for="nombre">nombre</label>
            <input type="text" name="nombre"/>
            </p>
            <p>
            <label for="apellido">apellido</label>
            <input type="text" name="apellido"/>
            </p>
            <input type="submit" value="enviar"/>
        </form>
    </body>
</html>