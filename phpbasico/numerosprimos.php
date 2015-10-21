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

$num_impares=0;
$i=0;

while ($num_impares<10) {
 if (($i%2)==1) { /* funcion que te da el resto (5/2) SI DA RESTO 1 ES IMPAR*/

   echo "$i El numero es Impar<br>";
   $num_impares++;
 }
 $i++; /* este es el numero porque el que divide entre 2*/
}
?>

    </body>
</html>
