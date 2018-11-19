<?php
$nombre = $_POST['coordi_select'];
$mensaje = $_POST['mensaje'];

switch($nombre)
{
    case "laura":
        $file = fopen("../mensajes/laura.txt", "a");
    break;
    case "ernesto":
        $file = fopen("../mensajes/ernesto.txt", "a");
    break;
    case "jaime":
        $file = fopen("../mensajes/jaime.txt", "a");
    break;
    case "david":
        $file = fopen("../mensajes/david.txt", "a");
    break;
    case "bea":
        $file = fopen("../mensajes/bea.txt", "a");
    break;
    case "fernando":
        $file = fopen("../mensajes/fernando.txt", "a");
    break;
}

$cabecera = "<li class='list-group-item'>";

fwrite($file, $cabecera.$mensaje. PHP_EOL);
fclose($file);

header("Location:notes.php?finalizado=true");
?>