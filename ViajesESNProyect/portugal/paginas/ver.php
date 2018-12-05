<?php

if(isset($_GET['coordi'])){
    switch($_GET['coordi']){
        case "ben01ja":
            $file = fopen("../mensajes/benja.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "dav02id":
            $file = fopen("../mensajes/david.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "fer03be":
            $file = fopen("../mensajes/fernando.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "fer04ma":
            $file = fopen("../mensajes/fermarin.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "ali05ci":
            $file = fopen("../mensajes/alicia.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "cov06aa":
            $file = fopen("../mensajes/cova.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "ele07na":
            $file = fopen("../mensajes/elena.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "enr08iq":
            $file = fopen("../mensajes/enrique.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "ern09es":
            $file = fopen("../mensajes/ernesto.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "lau10ra":
            $file = fopen("../mensajes/laura.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "pal11om":
            $file = fopen("../mensajes/paloma.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "ped12ro":
            $file = fopen("../mensajes/pedro.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "you13na":
            $file = fopen("../mensajes/youna.txt", "r") or exit("No se puede abrir el archivo");
        break;
        case "gen14er":
            $file = fopen("../mensajes/general.txt", "r") or exit("No se puede abrir el archivo");
        break;
    }    
}

while(!feof($file))
{
    echo fgets($file);
}
    fclose($file);
?>