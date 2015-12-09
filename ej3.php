<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



<?php
if(empty($_POST)){
echo "<form method='post' action= 'ej3.php'>";
echo "<input type='text' name='numero' value=''></br></br>";
echo "<input type='submit'>";
}

$lista[

["stock1"=>"1","stock2"=>"2","stock3"=>"3","stock4"=>"4","stock5"=>"5","stock6"=>"6" ]


foreach($lista as $clave => $nombre){
if($_POST["numero"]<=$nombre){
echo "</p>" la has acertado"</p>";
}

 ?>
  </body>
</html>
