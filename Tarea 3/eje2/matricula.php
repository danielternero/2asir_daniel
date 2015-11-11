<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href=" ">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script>
    $(document).ready(function () {
    $('#envio').click(function() {
      var1 = $("input[type=checkbox]:checked").length;

      if(!var1) {
        alert("Tienes que seleccionar al menos una asignatura");
        return false;
      }
    });
});
    </script>
      <style>
      #bloq {
            margin-left: 50px;
        float: left;
            height: 600px;
            width: 300px;
            color: black;
            background-color: gray;
            margin-right: 50px;
            padding-left: 20px;
        }
        #bloq2 {
        float: left;
            height: 600px;
            width: 300px;
            color: black;
            background-color: gray;
            margin-right: 50px;
            padding-left: 20px;
        }
        #bloq3 {
        float: left;
            height: 600px;
            width: 300px;
            color: black;
            background-color: gray;
            padding-left: 20px;
        }
      </style>
    </head>
      <body>
      <?php
      if(empty($_POST)){
      echo "<form method='post'>";
      echo "<fieldset>";
      echo "<legend>Informacion Personal</legend>";
      echo  "<p>DNI:<input type='text' required name='DNI'></p>";
      echo  "<p>Nombre:<input type='text' required name='nombre'></p>";
        echo"<p>Apellidos:<input type='text' required name='apellidos'></p>";
        echo"<p>Direccion:<input type='text' required name='direccion'></p>";
      echo  "<p>Telefono:<input type='tel' required name='telefono'></p>";
      echo  "<p>E-mail:<input type='email' required name='email'></p>";

      echo "</fieldset>";
      echo "<fieldset>";
    echo  "<legend>Curso:</legend>";
  echo "<select name='curso'>";
    echo  "<option  value='Asir1'required>Asir1</option></br>";
    echo  "<option  value='Asir2' required>Asir2</option></br>";
  echo "</select>";
  echo "</fieldset>";
      echo "<fieldset>";
    echo  "<legend>Asignaturas:</legend>";
        echo "<input type='checkbox' name='asignatura1' value='LM' >Lenguaje de marcas<br>";
        echo  "<input type='checkbox' name='asignatura2' value='GBD' >Base de datos<br>";
        echo   "<input type='checkbox' name='asignatura3' value='PAR' >Redes<br>";
        echo   "<input type='checkbox' name='asignatura4' value='IAW' > Implantacion<br>";
      echo     "<input type='checkbox' name='asignatura5' value='HAW' > hardware<br>";
    echo "</fieldset>";
    echo "<fieldset>";
      echo "<legend>Opcion a becas:</legend>";
      echo  "Sí:<input type='radio' name='beca' value='Si' ></br>";
      echo  "No:<input type='radio' name='beca' value='No' checked='checked'>";

      echo "</fieldset>";
  echo "<input id='envio' type='submit'></input>";

echo "</form>";
}
else {
echo "
<div id='bloq'>
<h2>DNI:</h2><p>".$_POST["DNI"]."</p>
<h2>Nombre:</h2><p>".$_POST["nombre"]."</p>
<h2>Apellidos:</h2><p>".$_POST["apellidos"]."</p>
<h2>Direccion:</h2><p>".$_POST["direccion"]."</p>
<h2>Telefono:</h2><p>".$_POST["telefono"]."</p>
<h2>E-mail:</h2><p>".$_POST["email"]."</p>
</div>
<div id='bloq2'>
<h2>Curso:</h2><p>".$_POST["curso"]."</p>
<h2>Opcion a becas:</h2><p>".$_POST["beca"]."</p>
</div>
<div id='bloq3'>
<h2>Asignaturas escogidas:<h2>
<ul>";
if (isset($_POST["asignatura1"])) {
   echo "<li>Lenguaje de Marcas</li>";
   }
  if (isset($_POST["asignatura2"])) {
   echo "<li>Base de datos</li>";
   }
    if (isset($_POST["asignatura3"])) {
   echo "<li>Redes</li>";
   }
    if (isset($_POST["asignatura4"])) {
   echo "<li>Implantacion</li>";
   }
   if (isset($_POST["asignatura5"])) {
   echo "<li>hardware</li>";
   }
   
echo "</ul></div>";
}
?>


    </body>
</html>
