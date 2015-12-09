
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
  
  </head>
  <body>
      <?php
  
      $connection = new mysqli("localhost", "root", "", "talleresfaber");
      if ($connection->connect_error) {
          printf("Connection failed: %s\n", $mysqli->connect_error);
          exit();
      }
    $id=$_GET['id'];
     $result = $connection->query("SELECT E.*, I.* FROM EMPLEADOS E, INTERVIENEN I WHERE E.CodEmpleado=I.CodEmpleado and I.IdReparacion = $id;")
          
      ?>
      
  
          <table>
              <h1>EMPLEADOS</h1>
                  <thead>
                    <tr>
                      <th>Cod Empleado</th>
                      <th>DNI</th>
                      <th>Nombre</th>
                      <th>Apellidos</th>
                      <th>Dirección</th>
                      <th>Teléfono</th>
                      <th>C.p.</th>
                      <th>Fecha de alta</th>
                      <th>Categoría</th>
                      <th>Horas</th>
                  </thead>

                   <?php
                  while($obj = $result->fetch_object()) {
 
                      echo "<tr>";
                      echo "<td>".$obj->CodEmpleado."</td>";
                      echo "<td>".$obj->DNI."</td>";
                      echo "<td>".$obj->Nombre."</td>";
                      echo "<td>".$obj->Apellidos."</td>";
                      echo "<td>".$obj->Dirección."</td>"; // Habría que modificar la base de datos para que no llevase tilde e interpretase correctamente el elemento
                      echo "<td>".$obj->Telefono."</td>";
                      echo "<td>".$obj->CP."</td>";
                      echo "<td>".$obj->FechaAlta."</td>";
                      echo "<td>".$obj->Categoria."</td>";
                      echo "<td>".$obj->Horas."</td>";
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