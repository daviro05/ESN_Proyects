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
}

$cabecera = "<li class='list-group-item'>";

fwrite($file, $cabecera.$mensaje. PHP_EOL);
fclose($file);

header("Location:notes.php?finalizado=true");
?>