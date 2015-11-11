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
    $v= ["ciudad 0"=>"San Cristobal","ciudad 1"=>"Cucuta","ciudad 2"=>"Maracaibo","ciudad 3"=>"Caracas"];
    echo "numero de elementos ".count($v);
    foreach ($v as $a=>$b){
      echo "<p>".$a."</p>";
      echo "<h1>".$b."</h1>";
    }

       ?>
    </body>
</html>
