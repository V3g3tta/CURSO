<?php

//abrir archivo
$archivo = fopen("fichero_texto.txt","a+");

//leer contenido
while(!feof($archivo)){
$contenido = fgets($archivo); 
echo $contenido."</br>";
}

//escribir 
fwrite($archivo,"'''''soy un tecto metido en php''''");
//cerrar archivo
fclose($archivo);

//copiar un archivo
copy('fichero_texto.txt','fichero_textocopiado.txt') or die("error al copiar");

//renombrar fichero
rename('fichero_textocopiado.txt','fichero1.txt');
//eliminar fichero
unlink('fichero1.txt') or die ("no se pudo eliminar ");

//comprobar
if(file_exists("fichero_texto.txt")){
      echo"si existe";

}else{
      echo"no existe";
}