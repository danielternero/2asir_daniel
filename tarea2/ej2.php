<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recorrer vectores nombre y apllidos misma clave</title>
    <link rel="stylesheet" type="text/css" href="">
  </head>
  <body>

        <div id="main">
          <table border="1px">
          <?php
            $v1=["2222222X"=>"Pepe","3333333X"=>"Manuel","4444444X"=>"José","5555555X"=>"Rosa"];
            $v2=["2222222X"=>"Pérez","3333333X"=>"Jiménez","4444444X"=>"Martínez","5555555X"=>"Rodríguez"];

            foreach ($v1 as $k => $j)
            {
              echo "<tr><td>".$j."</td><td>".$v2[$k]."</td></tr>";

            }

          ?>
        </table>
        </div>
  </body>
</html>
