<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style_g.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../app/notes.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <title>Galicia ESN UCM</title>
</head>

<body>
    <div class="main">
        <header>
            <img class="img_titulo" src="../assets/titulo.png">
        </header>

        <div class="wraper">

            <div class="menu">
                <nav class="navbar navbar-expand-lg navbar-light bg-light mi_nav">
                    <a class="navbar-brand" href="#">Galicia</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="../index.php">Mapa
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./team.php">Team</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="./notes.php">Notes</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <?php
                if(isset($_GET['ver'])){
                    $coordi = $_GET['ver'];
                    echo "<p class='ver_cabecera'>Mensajes secretos de ".$coordi."</p></br>";
                    echo "<p><button class='btn btn-primary' onclick=leerPuntuacion('$coordi')>Ver / Actualizar Mensajes</button></p>";
                    echo "<br><ul id='mensajes_$coordi' class='list-group'>"
            ?>
                </ul>
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    En pruebas! En la versión final los mensajes sólo podrán leerlos los coordinadores propietarios
                </div>
            <?php
            }
            else{
            ?>
            <div class="notas">
                <form action="save.php" method="post">
                    <div class="form-group">
                        <label for="exampleSelect1">Coordinador/a</label>
                        <select class="form-control" name="coordi_select">
                            <option value="laura">LAURA</option>
                            <option value="ernesto">ERNESTO</option>
                            <option value="jaime">JAIME</option>
                            <option value="david">DAVID</option>
                            <option value="bea">BEA</option>
                            <option value="fernando">FERNANDO</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea">¡Escribe un mensaje secreto!</label>
                        <textarea class="form-control mensaje" id="inputTextToSave" name="mensaje" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Enviar mensaje</button>
                    </div>
                </form>
            </div>

            <?php
            }
                if(isset($_GET['finalizado']) == true){
            ?>
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Enviado! </strong> Tu mensaje se ha enviado correctamente
                </div>
            <?php
                }
            ?>

        </div>
    </div>
</body>

</html>