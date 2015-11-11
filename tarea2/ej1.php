<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vector ciudades</title>
    <link rel="stylesheet" type="text/css" href="">
  </head>
  <body>

        <div id="main">

          <?php
            $v1=["Ciudad 0"=>"San Cristóbal","Ciudad 1"=>"Cucuta","Ciudad 2"=>"Maracaibo","Ciudad 3"=>"Caracas"];
            echo "<p>Numero de elementos ".count($v1)."</p>";
            foreach ($v1 as $k => $j)
            {
              echo "<p>".$k."</p><h1>".$j."</h1>";

            }

          ?>

        </div>
  </body>
</html>
