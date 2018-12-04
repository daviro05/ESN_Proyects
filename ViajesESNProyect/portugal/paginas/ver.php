<?php

if(isset($_GET['coordi'])){
    switch($_GET['coordi']){
        case "benja123":
            $file = fopen("../mensajes/benja.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "david123":
            $file = fopen("../mensajes/david.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "ferb123":
            $file = fopen("../mensajes/fernando.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "ferm123":
            $file = fopen("../mensajes/fermarin.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "ali123":
            $file = fopen("../mensajes/alicia.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "cova123":
            $file = fopen("../mensajes/cova.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "elena123":
            $file = fopen("../mensajes/elena.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "enri123":
            $file = fopen("../mensajes/enrique.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "ernes123":
            $file = fopen("../mensajes/ernesto.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "lau123":
            $file = fopen("../mensajes/laura.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "paloma123":
            $file = fopen("../mensajes/paloma.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "pedro123":
            $file = fopen("../mensajes/pedro.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "youna123":
            $file = fopen("../mensajes/youna.txt", "r") or exit("No se puede abrir el archivo");
        break;
    }    
}

while(!feof($file))
{
    echo fgets($file);
}
    fclose($file);
?>