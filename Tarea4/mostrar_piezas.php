
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reparaciones</title>
  </head>
  <body>
     <?php
     
      $connection = new mysqli("localhost", "root", "", "talleresfaber");
      if ($connection->connect_error) {
          printf("Connection failed: %s\n", $mysqli->connect_error);
          exit();
      }
    $id=$_GET['id'];
      $result = $connection->query("SELECT R.*, I.* FROM RECAMBIOS R, INCLUYEN I WHERE R.IdRecambio=I.IdRecambio and I.IdReparacion = $id;")
      ?>
          <table>
                <h1>PIEZAS</h1>
                  <thead>
                    <tr>
                      <th>Id de Recambio</th>
                      <th>Descripción</th>
                      <th>Unidad Base</th>
                      <th>Stock</th>
                      <th>Precio referencia</th>
                      <th>Unidades</th>
                  </thead>
                   <?php
                  while($obj = $result->fetch_object()) {
                      echo "<tr>";
                      echo "<td>".$obj->IdRecambio."</td>";
                      echo "<td>".$obj->Descripcion."</td>";
                      echo "<td>".$obj->UnidadBase."</td>";
                      echo "<td>".$obj->Stock."</td>";
                      echo "<td>".$obj->PrecioReferencia."</td>";
                      echo "<td>".$obj->Unidades."</td>";
                      echo "</tr>";
                  }
                  $result->close();
                  unset($obj);
                  unset($connection);
            ?>
              </table>
            <a href="reparaciones.php"> Volver </a>

     
  </body>
</html>