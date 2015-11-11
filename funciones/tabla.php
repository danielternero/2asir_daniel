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
    function tabla($filas, $columnas){

    echo "<table>";
    for($i=0;$i<$filas;$i++) {
      echo "<tr>";
      for($j=0;$j<$columnas;$j++) {
        echo "<td>$i,$j</td>";
      }
      echo "</tr>";
    }

    echo "</table>";
      }
    tabla(8,17);
     ?>

</html>
