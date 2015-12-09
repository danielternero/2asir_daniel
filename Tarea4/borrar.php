
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar</title>
    <style>
      img {
        height: 35px;
        width: 35px;
      }
    </style>
  </head>
  <body>
    <?php
    if (!isset($_GET['id']))
    {
      header("Location: reparaciones.php");
    }

      //CREATING THE CONNECTION
      $connection = new mysqli("localhost", "root", "", "TalleresFaber");
      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $mysqli->connect_error);
          exit();
      }
      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */
      $q1 = "DELETE FROM Incluyen WHERE IdReparacion=".$_GET['id'];
      $q2 = "DELETE FROM Intervienen WHERE IdReparacion=".$_GET['id'];
      $q3 = "DELETE FROM FACTURAS WHERE IdReparacion=".$_GET['id'];
      $q4 = "DELETE FROM REPARACIONES WHERE IdReparacion=".$_GET['id'];

      if (!($result = $connection->query($q1))) {

        echo "<p>Error en la conexion con la tabla incluyen</p>";
      }
      if (!($result = $connection->query($q2))) {

        echo "<p>Error en la conexion con la tabla Interviene</p>";
      }

      if (!($result = $connection->query($q3))) {

        echo "<p>Error en la conexion con la tabla FACTURAS</p>";
      }
      if (!($result = $connection->query($q4))) {

        echo "<p>Error en la conexion con la tabla REPARACIONES</p>";
      }
    header ("Location: reparaciones.php");
         
          unset($obj);
          unset($connection);
    ?>
  </body>
</html>
