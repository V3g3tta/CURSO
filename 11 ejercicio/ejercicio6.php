<?php
/**
 * ejercicio 6 mostrar una tabla de html con las tabalas de mutiplicad de q al 10 
 * 
 */

 echo"<table border ='1'><tr>"; //inicio de la tabla 
 echo "<tr>";//inicion de fial 1
     for($cabecera = 1; $cabecera <= 10; $cabecera++){
        echo"<td>TABLA DE $cabecera</td>";
     }
 echo "</tr>";//cierre de fila 1

 echo "<tr>";//inicio de fila 2 
 for($i = 1; $i <= 10; $i++){
    echo "<td>";
        for($c=1; $c<=10;$c++){
            echo "$i x $c = " .($i*$c).'<br/>';
        }
    echo "</td>";

 }
 echo "</tr>";//cierre de fila 2
 echo"</table>";// fin de la tabla