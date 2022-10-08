<?php

/**
 * 1.funcion
 * 2.validar un email con filter_var
 * 3.recoger  varible por get y validad
 * 4.mostrar el resultado
 * 
 */
function validaremail($email){
      $status = "no valido. ";
      if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            $status = "valido";

      }
      return $status;
}
if(isset($_GET['email'])){
      echo validaremail($_GET["email"]);

}else{
      echo"pasa por get un email...";
}
?>