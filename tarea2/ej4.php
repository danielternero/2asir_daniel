<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numeros mas altos</title>
    <link rel="stylesheet" type="text/css" href="">
  </head>
  <body>

        <div id="main">
          <table border="1px">
          <?php
            $v1=[10,1654,2234,513,451,5987,61,417,478,139];
            $v2=0;

              for ($i=1;$i<count($v1);$i++)
            {
              if($v1[$i]>$v2) {
                $v2=$v1[$i];

              }

            }
            echo $v2;


          ?>
        </table>
        </div>
  </body>
</html>
