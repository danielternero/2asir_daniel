<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHESS BOARD WITH PHP LOOPS</title>
    <link rel="stylesheet" type="text/css" href="style_chess.css">
  </head>
  <body>
        <!-- MAIN CONTAINER - CENTERED USING CSS -->
        <div id="main">
          <?php
              //SIZE OF THE CHESS BOARD
              $tam=8;
              $num=0;
              for ($i=0;$i<$tam;$i++) {
                  echo "<div class=\"row\">";
                  //CREATING THE ROW
                  for ($j=0;$j<$tam;$j++) {


                     echo "<div class=\"cell \"><p>".$num."</p></div>";
                     $num++;


                  }
                  echo "</div>";
              }
          ?>
        </div>
  </body>
</html>
