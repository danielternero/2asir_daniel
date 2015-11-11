<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nombres que empiezan por m</title>
    <link rel="stylesheet" type="text/css" href="">
  </head>
  <body>

        <div id="main">
          <table border="1px">
          <?php
            $v1=["roberto","juan","marta","moria","martin","jorge","miriam","nahuel","mirta"];
            $v2=[];
            $valor="m";
              for ($i=0;$i<count($v1);$i++)
            {
              if(strchr($v1[$i], "m")) {
                $v2[]=$v1[$i];
              }

            }
            var_dump($v2);


          ?>
        </table>
        </div>
  </body>
</html>
