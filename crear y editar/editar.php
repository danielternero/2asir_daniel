<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GETTING DATA FROM A MYSQL DATABASE</title>
  </head>
  <body><table>
    <?php
      //CREATING THE CONNECTION
      $connection = new mysqli("localhost", "tf", "12345", "TalleresFaber");
      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $mysqli->connect_error);
          exit();
      }
      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */
      if ($result = $connection->query("SELECT * FROM REPARACIONES where IdReparacion=".$_GET['id'].";")) {
          printf("<p>The select query returned %d rows.</p>", $result->num_rows);
}
      while($obj = $result->fetch_object()) {
          //PRINTING EACH ROW
          echo "<form method='post'>";
          echo "<fieldset>";
          echo "IdReparacion: <input type='text' name='repa' value='".$obj->IdReparacion."'><br/>";
          echo "Matricula: <input type='text' name='matri' value='".$obj->Matricula."'><br/>";
          echo "FechaEntrada: <input type='date' name='fechae' value='".$obj->FechaEntrada."'><br/>";
          echo "Km: <input type='text' name='km' value='".$obj->Km."'><br/>";
          echo "Averia: <input type='text' name='aver' value='".$obj->Averia."'><br/>";
          echo "FechaSalida: <input type='date' name='fechas' value='".$obj->FechaSalida."'><br/>";
          echo "Reparado: <input type='text' name='reparad' value='".$obj->Reparado."'><br/>";
          echo "Observaciones: <input type='text' name='obv' value='".$obj->Observaciones."'><br/>";
          echo "<input type='submit'>";
}
$result->close();
unset($obj);
unset($connection);

          ?>

</table>
  </body>
</html>
