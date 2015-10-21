<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
    </head>
    <body>
      <table border="1px">TABLA DEL 5
          <?php
      $tabla=5;
      $i=0;
      while ($i<=10){
         $result=$i*$tabla;
         echo "<tr><td>".$result."</td></tr>";

      $i++;

        }

           ?>


</table>
</body>
</html>
