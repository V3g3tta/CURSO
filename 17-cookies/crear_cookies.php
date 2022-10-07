<?php
//cookies: es un fichero que se almacena en el ordenador del usuario que visita
//la wed, con el fin de recordar datos o rastrear el computador del mismo
//en la we


//crear cookie
//setcookie("nombre","valor que solo puede ser tecto",caducidad,ruta,dominio);
//cookies basica
setcookie("micookie","valor de mi galleta");


//cookie con expiracion
setcookie("unyear","valor de mi cookies de 356 dias",time()+(60*60*24*356));

echo "</br>";
header('location:ver_cookies.php');
?>

