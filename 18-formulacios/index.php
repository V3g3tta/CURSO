<?php
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>FORMULARIO PHPH Y HTML</title>
    </head>
    <body>
        <h1>FORMULARIO</h1>
        <form action="" method="POST" enctype ="multipart/form-data">
           <label for="nombre">NOMBRE </label>
           <p><input type="text" name ="nombre"/></p>
          
           <label for="apellido">NOMBRE </label>
           <p><input type="text" name ="nombre"/></p>

           <label for="boton">BOTON: </label>
           <p><input type="button" name ="boton" value="clip"/></p>

           <label for="sexo">SEXO: </label>

           <p>
           NOMBRE: <input type="checkbox" name ="sexo" value="hombre" checked="checked"/> 
           MUJER: <input type="checkbox" name ="sexo" value="mujer"/>
           </p>
           
           <label for="color">COLOR </label>
           <p><input type="color" name ="color"/></p>

           <label for="fecha">FECHA </label>
           <p><input type="date" name ="fecha"/></p>

           <label for="correo">CORREO </label>
           <p><input type="email" name ="correo"/></p>


           <label for="archivo">ARCHIVO </label>
           <p><input type="file" name ="archivo" multiple ="multiple"/></p>

           <label for="numero">NUMERO </label>
           <p><input type="number" name ="numero"/></p>


           <label for="continente">FECHA </label>
           <p>america del sur <input type="radio" name ="continente" value="america del sur"/></p>
           <p>aeuropa <input type="radio" name ="continente" value="aeuropa"/></p>
           <p>asia <input type="radio" name ="continente" value="aeuropa"/></p>


           <label for="wed">PAGINA WED </label>
           <p><input type="url" name ="wed"/></p>

           <textarea></textarea>

           </br>

           peliculas:
           <select name ="peliculas">
            <option value="spiderman">spiderman</option>
            <option value="batman">batman</option>
            <option value="la jungla de cristal"> la jungla de cristal</option>
            <option value="gran torino"> gran torino</option>

           </select>
       





                     
           <input type="submit" value="Enviar"/>
        </form>

    </body>
</html>
