<?php
/**
 * hacer una interfaz de usuario(formulario con dos inpust y 4
 * botones uno para sumar , restar,dividir, y multiplicar.
 * )
 */
$resultado = false;
if(isset($_POST['n1']) && isset($_POST['n1'])){
      
      if(isset($_POST['sumar'])){
            $resultado = "el resualtado es:" . ($_POST['n1'] + $_POST['n2']);
      }
      if(isset($_POST['restar'])){
            $resultado = "el resualtado es:" . ($_POST['n1'] - $_POST['n2']);
      }
      if(isset($_POST['multiplicar'])){
            $resultado = "el resualtado es:" . ($_POST['n1'] * $_POST['n2']);
      }
      if(isset($_POST['dividir'])){
            $resultado = "el resualtado es:" . ($_POST['n1'] / $_POST['n2']);
      }
}     
?>

<!DOCTYPE html>
<html lang="es">
      <head>
            <meta charset="utf-8"/>
            <title>Calculadora php</title>
      </head>
      <body>
            <h1>Calculadora php</h1>
            <form action="" method="POST">
                 <label for="n1">Numero 1</label><br>
                 <input type="number" name="n1"></br>
                 
                 <label for="n2">Numero 2</label><br>
                 <input type="number" name="n2"></br>
                 </br>
                 <input type="submit" value="Sumar" name="sumar" />
                 <input type="submit" value="Restar" name="restar" />
                 <input type="submit" value="Multiplicar" name="multiplicar" />
                 <input type="submit" value="Dividir" name="dividir" />
            </form>
                  <?php
                  if($resultado !=false):
                        echo "<h2>$resultado</h2>";

                  endif;
                  ?>   
      </body>
</html>
