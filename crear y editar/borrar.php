<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GETTING DATA FROM A MYSQL DATABASE</title>
  </head>
  <body>
    <?php


      if(!isset($_GET["id"])) {
        header("Location: crear.php");
      }

      //CREATING THE CONNECTION
      $connection = new mysqli("localhost", "tf", "12345", "TalleresFaber");
      //TESTING IF THE CONNECTION WAS RIGHT
      if($connection->connect_errno){
          printf("Connection failed: %s\n", $mysqli->connect_error);
          exit();
      }

      $q1= "DELETE FROM Incluyen where IdReparacion=".$_GET['id'];
      $q2= "DELETE FROM Interviene where IdReparacion=".$_GET['id'];
      $q3= "DELETE FROM FACTURAS where IdReparacion=".$_GET['id'];
      $q4="DELETE FROM REPARACIONES where IdReparacion=".$_GET['id'];

      if (!($result = $connection->query($q1))) {
        echo "<h1>Error en la conexion de la tabla Incluyen.</h1>";
      }

      if (!($result = $connection->query($q2))) {
        echo "<h1>Error en la conexion de la tabla Intervienen.</h1>";
      }

      if (!($result = $connection->query($q3))) {
        echo "<h1>Error en la conexion de la tabla FACTURAS.</h1>";
      }

      if (!($result = $connection->query($q4))) {
        echo "<h1>Error en la conexion de la tabla REPARACIONES.</h1>";
      }

      var_dump($q1);
      var_dump($q2);
      var_dump($q3);
      var_dump($q4);
      unset($connection);

      header("Location: crear.php");

    ?>
  </body>
</html>
