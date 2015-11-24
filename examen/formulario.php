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
if (empty($_POST)){
echo "<form method='post'>";
echo "<fieldset>";
echo "<p>DNI: <input type='text' requiered name='DNI'></p>";
echo "<p>E-MAIL: <input type='email' requiered name='EMAIL'></p>";
echo "<h3>FECHA NACIMIENTO: <input type='date' name='FECHA'></h3>";
echo "<h4>AÑO DE CURSO: <input type='number' name='ANO'></h4>";
echo "<input type='submit'></input>";
}

else{
echo "<table border='1px'>";
echo "<tr><td>DNI:".$_POST["DNI"]."<td></tr>";
echo "<tr><td>EMAIL:".$_POST["EMAIL"]."</td></tr>";
echo "<tr><td>FECHA DE NACIMIENTO: ".$_POST["FECHA"]."</td></tr>";
echo "<tr><td>AÑO DEL CURSO: ".$_POST["ANO"]."</td></tr>";

echo "<p><a href='formulario2.php?'><img src='http://imagenes.es.sftcdn.net/es/scrn/73000/73632/google-chrome-02-100x100.png'></a></p>";
echo "</table>";


}


      ?>
</body>
</html>
