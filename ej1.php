<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
<?php

$alumno=[

        "22222222x"=>["Nombre"=>"Juan Diego","Apellidos"=>"Perez", "Localidad"=>"Bormujos"],

        "33333333x"=>["Nombre"=>"Paco", "Apellidos"=>"Fernandez", "Localidad"=>"Salteras"],
];

foreach($alumno as $dni=>$informacion){
echo "<ul><li>".$dni."<ul>";
foreach($alumno[$dni] as $v1=>$v2){

echo "<li>".$v1.": ".$v2."</li>";

};
echo "</ul></li></ul>";
};

?>
</body>
</html>
