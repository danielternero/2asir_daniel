
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reparaciones</title>
    <style>
      img {
        height: 35px;
        width: 35px;
      }
    </style>
  </head>
  <body>
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
      if ($result = $connection->query("SELECT * FROM REPARACIONES;")) {
          
      ?>

          <!-- PRINT THE TABLE AND THE HEADER -->
          <table style="border:1px solid black">
          <thead>
            <tr>
              <th>IdReparacion</th>
              <th>Matricula</th>
              <th>Fecha Entrada</th>
              <th>Km</th>
              <th>Averia</th>
              <th>Fecha Salida</th>
              <th>Reparado</th>
              <th>Observaciones</th>
              <th>Editar</th>
              <th>Asignar</br> mecánico</th>
              <th>Asignar</br> pieza</th>
              <th>Borrar</th>
                <th>Asignar empleados</th>
                <th>Mostrar empleados</th>
                <th>Asignar piezas</th>
                <th>Mostrar piezas</th>
          </thead>

      <?php
          //FETCHING OBJECTS FROM THE RESULT SET
          //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
          while($obj = $result->fetch_object()) {
              //PRINTING EACH ROW
              echo "<tr>";
              echo "<td>".$obj->IdReparacion."</td>";
              echo "<td>".$obj->Matricula."</td>";
              echo "<td>".$obj->FechaEntrada."</td>";
              echo "<td>".$obj->Km."</td>";
              echo "<td>".$obj->Averia."</td>";
              echo "<td>".$obj->FechaSalida."</td>";
              echo "<td>".$obj->Reparado."</td>";
              echo "<td>".$obj->Observaciones."</td>";
              echo "<td><a href='editar.php?id=$obj->IdReparacion&mat=$obj->Matricula'><img src='http://www.two53.com/wp-content/uploads/2010/07/icono11.gif'></a></td>";
              echo "<td><a href='asignar_empleados.php.php?id=$obj->IdReparacion&mat=$obj->Matricula'><img src='http://cdn.flaticon.com/png/256/48637.png'></a></td>";
              echo "<td><a href='asignar_piezas.php?.php?id=$obj->IdReparacion&mat=$obj->Matricula'><img src='https://image.freepik.com/iconos-gratis/ajustes-de-la-camara-de-la-rueda-dentada_318-77174.png'></a></td>";
              echo "<td><a href='borrar.php?id=$obj->IdReparacion&mat=$obj->Matricula'><img src='https://upload.wikimedia.org/wikipedia/commons/f/f6/White_X_in_red_background.png'></a></td>";
              echo "<td><a href='asignar_empleados.php?id=$obj->IdReparacion&mat=$obj->Matricula'>Asignar</a></td>";
              echo "<td><a href='mostrar_empleados.php?id=$obj->IdReparacion&mat=$obj->Matricula'>Mostrar</a></td>";
              echo "<td><a href='asignar_piezas.php?id=$obj->IdReparacion&mat=$obj->Matricula'>Asignar</a></td>";
              echo "<td><a href='mostrar_piezas.php?id=$obj->IdReparacion&mat=$obj->Matricula'>Mostrar</a></td>";
              echo "</tr>";
          }
          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);
      } //END OF THE IF CHECKING IF THE QUERY WAS RIGHT

    ?>
      <a href="crear.php"> Crear reparación </a>
  </body>
</html>
