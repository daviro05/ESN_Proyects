<?php
$nombre = $_POST['coordi_select'];
$mensaje = $_POST['mensaje'];

switch($nombre)
{
    case "benja":
        $file = fopen("../mensajes/benja.txt", "a");
    break;
    case "david":
        $file = fopen("../mensajes/david.txt", "a");
    break;
    case "fernando":
        $file = fopen("../mensajes/fernando.txt", "a");
    break;
    case "fermarin":
        $file = fopen("../mensajes/fermarin.txt", "a");
    break;
    case "alicia":
        $file = fopen("../mensajes/alicia.txt", "a");
    break;
    case "cova":
        $file = fopen("../mensajes/cova.txt", "a");
    break;
    case "elena":
        $file = fopen("../mensajes/elena.txt", "a");
    break;
    case "enrique":
        $file = fopen("../mensajes/enrique.txt", "a");
    break;
    case "ernesto":
        $file = fopen("../mensajes/ernesto.txt", "a");
    break;
    case "laura":
        $file = fopen("../mensajes/laura.txt", "a");
    break;
    case "paloma":
        $file = fopen("../mensajes/paloma.txt", "a");
    break;
    case "pedro":
        $file = fopen("../mensajes/pedro.txt", "a");
    break;
    case "youna":
        $file = fopen("../mensajes/youna.txt", "a");
    break;
}

$cabecera = "<li class='list-group-item'>";

fwrite($file, $cabecera.$mensaje. PHP_EOL);
fclose($file);

header("Location:notes.php?finalizado=true");
?>