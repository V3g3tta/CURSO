<?php
$error = 'faltan_datos';
if(!empty($_POST['nombre']) && !empty($_POST['apellido'])
&& !empty($_POST['edad']) && !empty($_POST['email'])
&& !empty($_POST['pass'])) {

      $error = 'ok';
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $edad =  (int)$_POST['edad'];
      $email = $_POST['email'];
      $pass = $_POST['pass'];

      //validadar nombre
      if(!is_string($nombre) && !preg_match("/[0-9]/",$nombre)){
           $error ='nombre';
           
      }
      if(!is_string($apellido) && !preg_match("/[0-9]/",$apellido)){
            $error ='apellido';
            
      }
      if(!is_string($email)  && filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error ='email';
            
      }
      if(!is_int($edad) && filter_var($edad, FILTER_VALIDATE_INT)){
            $error ='edad';
            
      }
     
      if(!is_string($pass) && strlen($pass)<5){
            $error ='pass';
      }
      
     
      
}else{
      $error = 'faltan_datos';
      
}
if($error != 'ok'){
      header("location:index.php?error=$error");

}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Validacion de Formulario</title>
    </head>
    <body>
        <h1>Validar Formulario exitos</h1>
        <?php if($error == 'ok'):?>
            <p><?=$nombre?></p>
            <p><?=$apellido?></p>
            <p><?=$edad?></p>
            <p><?=$email?></p>
            <p><?=$pass?></p>
        <?php endif; ?>    
       
    </body>
</html>