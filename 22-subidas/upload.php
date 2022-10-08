<?php

$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];


if($tipo == "image/png" ){
      if(!is_dir('mi_imagen')){
            mkdir('mi_imagen',0777);
      }
      move_uploaded_file($archivo['tmp_name'],'mi_imagen/'.$nombre);
      echo "<h1> imagen subida correctamente </h1>";
}else{
      header("refresh: 5; URL=index.php");
      echo"<h1>subi una imagen con el formato correcto..</h1>";
}

?>