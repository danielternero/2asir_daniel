<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
    </head>
    <body>

      <table>
    <?php
    $v1= ["2222222X"=>"Pepe","3333333X"=>"Manuel","4444444X"=>"Jose","55555X"=>"Rosa"];
    $v2= ["2222222X"=>"Perez","3333333X"=>"Jimenez","4444444X"=>"Martinez","55555X"=>"Rodriguez"];

    foreach ($v1 as $a=>$b){

      echo "<tr><td>".$b."</td><td>".$v2[$a]."</td></tr>";
    }

       ?>
     </table>
    </body>
</html>
