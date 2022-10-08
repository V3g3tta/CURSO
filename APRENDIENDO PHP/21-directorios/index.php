<?php
if(!is_dir('mi_carpeta')){
    mkdir('mi_carpeta',0777) or die("no se puede crar la carpeta");
}else{
      echo "ya existe la carpeta";
}

//eliminar carpeta
//rmdir('mi_carpeta');
echo"</br><h1>contenido de la carpeta </h1>";
if($gestor = opendir('./mi_carpeta')){
    while(false!==($archivo = readdir($gestor))){
      if($archivo!='.' && $archivo !='..'){
            echo $archivo."</br>";
      }
      
    }

}
?>