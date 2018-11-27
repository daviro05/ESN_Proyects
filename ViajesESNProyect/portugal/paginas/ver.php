<?php

if(isset($_GET['coordi'])){
    switch($_GET['coordi']){
        case "benja123":
            $file = fopen("../mensajes/benja.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "david123":
            $file = fopen("../mensajes/david.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "fer123":
            $file = fopen("../mensajes/fernando.txt", "r") or exit("No se puede abrir el archivo");
        break;
    }    
}

while(!feof($file))
{
    echo fgets($file);
}
    fclose($file);
?>