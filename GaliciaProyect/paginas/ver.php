<?php

if(isset($_GET['coordi'])){
    switch($_GET['coordi']){
        case "laura926":
            $file = fopen("../mensajes/laura.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "ernesto387":
            $file = fopen("../mensajes/ernesto.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "jaime820":
            $file = fopen("../mensajes/jaime.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "david909":
            $file = fopen("../mensajes/david.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "bea431":
            $file = fopen("../mensajes/bea.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "fernando742":
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