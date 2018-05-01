<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style_g.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./app/app.js"></script>
    <title>Galicia ESN UCM</title>
</head>

<body>
    <div class="main">
    <header>
        <img class="img_titulo" src="./assets/titulo.png">
    </header>

    <div class="wraper">

        <div class="menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light mi_nav">
                <a class="navbar-brand" href="./index.php">Galicia</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="./index.php">Map
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./paginas/team.php">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./paginas/notes.php">Notes</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="mapa">

            <figure>
                <img id="map_img" src="./assets/mapaV7.png">
            </figure>

        </div>

    </div>
</div>
</body>
</html>