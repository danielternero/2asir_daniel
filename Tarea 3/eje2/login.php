<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Dialog - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#dialog" ).dialog();
  });
  </script>
</head>
<body>


<div id='dialog' title='Usuario y Contraseña'>
<form method="post">
Nombre:<input type='text' name='name'><br/>
Contraseña:<input type='text'name='password'><br/>
    <?php
      if (isset($_POST["password"]) && $_POST["password"] <> "1234" || isset($_POST["name"]) && $_POST["name"] <> "pepe") {
        echo "Usuario o contraseña incorrecta";
      }
    ?>
<br/>
<input type='submit'>
</form>
</div>


  <?php
    if (isset($_POST["name"]) == "pepe" && $_POST["password"] == "1234") {
      header ('Location: matricula.php');
    }
  ?>






</body>
</html>
