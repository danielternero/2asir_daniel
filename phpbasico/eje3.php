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
    $v1=["Roberto","juan","marta","moria","martin","miriam","jorge","nahuel","mirta"];
    $v2=[];
for($i=0;$i<9;$i++){

    if (strchr($v1[$i],"m")){

      $v2[]=$v1[$i];
    }

}
var_dump($v2);



       ?>
     </table>
    </body>
</html>
