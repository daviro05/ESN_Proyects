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
    <title>Portugal ESN UCM</title>
</head>

<body>
    <div class="main">
        <header>
            <img class="img_titulo" src="../assets/titulo.png">
        </header>

        <div class="wraper">

            <div class="menu">
                <nav class="navbar navbar-expand-lg navbar-light bg-light mi_nav">
                    <a class="navbar-brand" href="../index.php">Portugal</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="../index.php">Map
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./team.php">Team</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="./notes.php">Notas de AMOR</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link invis" href="./secret.php">Secret</a>
                             </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <?php
                if(isset($_GET['ver'])){
                    $coordi = $_GET['ver'];
                    $nombre = substr($coordi, 0, -5);
                    echo "<p class='ver_cabecera'>Mensajes secretos de ".$nombre."</p></br>";
                    echo "<p><button class='btn btn-primary' onclick=leerPuntuacion('$coordi')>Ver / Actualizar Mensajes</button></p>";
                    echo "<br><ul id='mensajes_$coordi' class='list-group'>"
            ?>
                </ul>
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
                
                <?php
                }
                    if(isset($_GET['finalizado']) == true){
                ?>
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>¡Enviado! </strong> Mensaje secreto enviado correctamente
                    </div>
                <?php
                    }
                ?>
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    Sólo podrán leerlos los coordinadores individualmente. Deja un mensaje anónimo.
                </div>
            </div>

        </div>
    </div>
</body>

</html>