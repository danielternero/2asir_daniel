<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numeros multiplos de 77</title>
    <link rel="stylesheet" type="text/css" href="">
  </head>
  <body>

        <div id="main">
          <ol>
          <?php
            $v1=[];
            $v2=0;

              for ($i=1;count($v1)<10;$i++)
            {
              if(($i%77)==0) {
                $v1[]=$i;
              }

            }
            for ($a=0;count($v1)>$a;$a++) {
              echo "<li>".$v1[$a]."</li>";
            }



          ?>
        </ol>
        </div>
  </body>
</html>
