<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style_g.css">
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../app/app.js"></script>
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
                        <li class="nav-item">
                            <a class="nav-link" href="./notes.php">Notas de AMOR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link invis" href="./secret.php">Secret</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

<div class="secret">
                <div class="alert alert-info alert-dismissible instrucciones">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    Introduce tu código de coordi/descoordi para leer tus mensajes secretos
                </div>
        <div class="col">
            <div class="input-group">
                <input type="text" id="codigo_coordi" class="form-control" placeholder="Código secreto...">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="button" onclick="verMensajes()">Confirmar</button>
                </span>
         </div>
</div>

            
        </div>

    </div>
</div>
</body>
</html>