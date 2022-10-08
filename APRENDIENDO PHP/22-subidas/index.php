<!DOCTYPE html>
<html lang="es">
      <head>
            <meta charset="utf-8"/>
            <title>Subir archivo php</title>
      </head>
      <body>
            <h1>Subir archivo con php</h1>
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="archivo"/>
                  <input type="submit" value="Enviar"/>

            </form>
            <h1>Lista de Imagenes</h1>
            <?php
            $gestor = opendir('./mi_imagen');
            if($gestor):
                  while (($mi_imagen = readdir($gestor)) !== false):
                        if($mi_imagen != '.' && $mi_imagen != '..'):
                              echo "<img src='mi_imagen/$mi_imagen' width='200px'/><br/>";
                        endif;
                  endwhile;
            endif;
            ?>

      </body>

</html>