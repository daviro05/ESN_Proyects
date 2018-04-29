<?php

if(isset($_GET['coordi'])){
    switch($_GET['coordi']){
        case "laura":
            $file = fopen("../mensajes/laura.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "ernesto":
            $file = fopen("../mensajes/ernesto.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "jaime":
            $file = fopen("../mensajes/jaime.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "david":
            $file = fopen("../mensajes/david.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "bea":
            $file = fopen("../mensajes/bea.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "fernando":
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