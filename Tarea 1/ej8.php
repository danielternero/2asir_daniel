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

$aleatorio = rand(1,5);

switch ($aleatorio) {
  case 1:
      echo $aleatorio." es uno";
    break;
  case 2:
      echo $aleatorio." es dos";
    break;
  case 3:
    echo $aleatorio." es tres";
    break;
    case 4:
        echo $aleatorio." es cuatro";
      break;
      case 5:
          echo $aleatorio." es cinco";
        break;
}

  ?>
    </body>
</html>
