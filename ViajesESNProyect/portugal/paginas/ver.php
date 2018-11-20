<?php

if(isset($_GET['coordi'])){
    switch($_GET['coordi']){
        case "laura92646":
            $file = fopen("../mensajes/laura.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "ernesto38719":
            $file = fopen("../mensajes/ernesto.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "jaime82037":
            $file = fopen("../mensajes/jaime.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "david90918":
            $file = fopen("../mensajes/david.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "bea43127":
            $file = fopen("../mensajes/bea.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "fernando74270":
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