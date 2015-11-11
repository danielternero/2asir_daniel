<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
    <style>
    #cuerpo{

      width: 1000px;
    }
    #datos{
      height: 600px;
      width: 500px;
      float: left;
}
#imagenes{
  height: 300px;
  width: 300px;
  float: left;
}

img {
  height: 600px;
  width: 450px;

}
    </style>
    </head>

    <body>
    <div id="cuerpo">
      <?php

echo "<div id='datos'>";
$imagenes=["http://shangay.com/sites/default/files/mairena.jpg",
"https://lh4.googleusercontent.com/-uJSFVGbII-I/TxpBOO2hdoI/AAAAAAAAbGk/P0pBtbQfD3A/s800/daniel-radcliffe-012012-%252520%2525282%252529.jpg",
"http://abcblogs.abc.es/laboratorio-de-estilo/files/2015/03/paco-rabanne.jpg",
"http://s01.s3c.es/imag/_v0/340x250/0/b/5/sonia340.jpg",
"http://jereztelevision.com/wp-content/uploads/2013/11/Jerez-TV-SS-Isabel-Pantoja.jpg",
"http://k.7w7.us/cm%2Fimgsvc%2F%2Fd%3Fp%3D144180959",
"http://gestioncultura.cervantes.es/COMUNES/32717_I_Fernando%20Trueba%20por%20Gonzo%20Su%C3%A1rez.jpg",
"http://loreal-dam-front-resources-corp-en-cdn.brainsonic.com/ressources/afile/2084-b45b6-picture_photo-jennifer-lopez-face-of-looreal-paris.jpg",
"http://media.ufc.tv/fighter_images/Ivan_Jorge/IvanJorge_Headshot.png",
"https://lh5.googleusercontent.com/-curiPHxA3Xo/AAAAAAAAAAI/AAAAAAAAHt4/mlRLEnmfwWo/photo.jpg"];



$alumno=[
[
  "DNI"=>"288585945x",
  "NOMBRE"=>"Carmen",
  "APELLIDOS"=>"De la guetto martinez",
  "DIRECCION"=>"cardenas nº98",
  "TELEFONO"=>"785485745",
  "EMAIL"=>"carmeno@gmail.com",

],

[
  "DNI"=>"302585945x",
  "NOMBRE"=>"Daniel",
  "APELLIDOS"=>"Porras Lopez",
  "DIRECCION"=>"Juan delesma nº4",
  "TELEFONO"=>"874585745",
  "EMAIL"=>"danielo@gmail.com",

],

[
  "DNI"=>"30248755x",
  "NOMBRE"=>"Paco",
  "APELLIDOS"=>"Perez Luan",
  "DIRECCION"=>"Juan belmonte nº421",
  "TELEFONO"=>"715246985",
  "EMAIL"=>"paco@gmail.com",

],

[
  "DNI"=>"452548715x",
  "NOMBRE"=>"Sonia",
  "APELLIDOS"=>"Lepe Garcia",
  "DIRECCION"=>"avd lorca nº12",
  "TELEFONO"=>"654185745",
  "EMAIL"=>"sonia@gmail.com",

],

[
  "DNI"=>"302585945x",
  "NOMBRE"=>"Isabel",
  "APELLIDOS"=>"Duarte Garrido",
  "DIRECCION"=>"corte de leon nº8",
  "TELEFONO"=>"622085745",
  "EMAIL"=>"isabel@gmail.com",


],

[
  "DNI"=>"125485945x",
  "NOMBRE"=>"Sandra",
  "APELLIDOS"=>"Gonzalez Salgado",
  "DIRECCION"=>"desamparo y abandono nº74",
  "TELEFONO"=>"664585745",
  "EMAIL"=>"sandra@gmail.com",

],
[
  "DNI"=>"285555945x",
  "NOMBRE"=>"fernando",
  "APELLIDOS"=>"Romero Suero",
  "DIRECCION"=>"Hytasa nº175",
  "TELEFONO"=>"777585745",
  "EMAIL"=>"Suero@gmail.com",

],

[
  "DNI"=>"308885945x",
  "NOMBRE"=>"Paloma",
  "APELLIDOS"=>"Palomo Leon",
  "DIRECCION"=>"Dos hermanas nº180",
  "TELEFONO"=>"671585745",
  "EMAIL"=>"paloma@gmail.com",

],

[
  "DNI"=>"745845852x",
  "NOMBRE"=>"Ivan",
  "APELLIDOS"=>"Tan Calvo",
  "DIRECCION"=>"Parraco nº10",
  "TELEFONO"=>"604585745",
  "EMAIL"=>"ivan@gmail.com",

],

[
  "DNI"=>"302544587x",
  "NOMBRE"=>"Pepe",
  "APELLIDOS"=>"Suero alvarez",
  "DIRECCION"=>"lujan nº45",
  "TELEFONO"=>"698785745",
  "EMAIL"=>"Pepe@gmail.com",

],
];
$personas=$alumno[$_GET["id"]];

$gente=$imagenes[$_GET["id"]];
echo "<img src=".$gente.">";
echo "</div>";
echo "<div id='imagenes'>";
  echo "<h1>".$personas["NOMBRE"]."</h1>";
  echo "<p>MBA student in Graduate School of Bussines</br>admitted Autumn 2011</p>";
  echo "<h3>Contac information</h3>";
  echo "<p>Email <a href='#'>".$personas["EMAIL"]."</a></p>";
  echo "<p>phone ".$personas["TELEFONO"]."</p>";
  echo "<p><a href='#'>StanfordWho listintg</a></p>";
  echo "<p><a href='#'>URL of this page</a></p>";
  echo "<p><a href='#'>what´s this?</a></p>";

echo "</div>";
      ?>
</div>
    </body>
</html>
