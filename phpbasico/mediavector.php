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
$v1=[0,10,15,20,50];
$media=0;
for ($i=0;$i<count($v1);$i++) {
  $media=$media+$v1[$i];
}
echo $media/count($v1);
 ?>

    </body>
</html>
