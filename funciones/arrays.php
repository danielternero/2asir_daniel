<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
    </head>
    <body>

      <?php
      $coches=["1" =>"ford","2" =>"opel", "3" =>"seat","4" =>"audi"];
      $marca="ford";
      function compara($cadena, $marca){
        foreach ($cadena as $j => $guarda){
          if ($guarda == $marca){
            return true;
          }
        }
        return false;
      }
 if compara($coches,"ford")

       ?>


    </body>
</html>
