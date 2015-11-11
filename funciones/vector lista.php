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

    //esto es con un for//
      function crearlista ($vector){

        echo "<ul>";
        for($i=0;$i<$vector;$i++){
          echo "<li>x</li>";

        }
        echo "</ul>";


    }
    crearlista(10)
//esto es con foreach para que recorra un vector//
    function listavector ($v){

    echo "<ul>";
    foreach ($v as $valor){
      echo "<li>$valor</li>";

    }
    echo "<ul>"
    }

    $data=array(1,2,3,4,5,6)
    
?>




    </body>
</html>
