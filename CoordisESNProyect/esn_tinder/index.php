<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <title>The Coordis Match - ESN UCM</title>
</head>
<body>
    <div class="tinder">
        <div class="tinder--status">
          <i class="fa fa-remove"></i>
          <i class="fa fa-heart"></i>
        </div>

        <div class="tinder--cards">

        <?php
          $directory="../subida/uploads/";
          $dirint = dir($directory);
          $contador = 1;
          while (($archivo = $dirint->read()) !== false)
          {
            if (preg_match("/gif/", $archivo) || preg_match("/jpg/", $archivo) || preg_match("/png/", $archivo)){
              echo '<div class="tinder--card">';
              echo '<img src="'.$directory."/".$archivo.'">'."\n";
              echo '<h3>Coordi '.$contador.'</h3>';
              echo '<p>Frase aleatoria</p>';
              echo '</div>';
            }
          }
          $contador++;
          $dirint->close();
        ?>
        </div>

        <!--<div class="tinder--cards">
          <div class="tinder--card">
            <img src="https://placeimg.com/600/300/people">
            <h3>Erasmus 1</h3>
            <p>This is a demo for Tinder like swipe cards</p>
          </div>
          <div class="tinder--card">
            <img src="https://placeimg.com/600/300/animals">
            <h3>Erasmus 2</h3>
            <p>This is a demo for Tinder like swipe cards</p>
          </div>
          <div class="tinder--card">
            <img src="https://placeimg.com/600/300/nature">
            <h3>Erasmus 3</h3>
            <p>This is a demo for Tinder like swipe cards</p>
          </div>
          <div class="tinder--card">
            <img src="https://placeimg.com/600/300/tech">
            <h3>Erasmus 4</h3>
            <p>This is a demo for Tinder like swipe cards</p>
          </div>
          <div class="tinder--card">
            <img src="https://placeimg.com/600/300/arch">
            <h3>Erasmus 5</h3>
            <p>This is a demo for Tinder like swipe cards</p>
          </div>
        </div>-->
      
        <div class="tinder--buttons">
          <button id="nope"><i class="fa fa-remove"></i></button>
          <button id="love"><i class="fa fa-heart"></i></button>
        </div>
      </div>
</body>
<script src="https://hammerjs.github.io/dist/hammer.min.js"></script>
<script src="./main.js"></script>
</html>