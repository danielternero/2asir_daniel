<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GETTING DATA FROM A MYSQL DATABASE</title>
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
          printf("<p>The select query returned %d rows.</p>", $result->num_rows);
      ?>

          <!-- PRINT THE TABLE AND THE HEADER -->
          <table style="border:1px solid black">
          <thead>
            <tr>
              <th>IdReparacion</th>
              <th>Matricula</th>
              <th>FechaEntrada</th>
              <th>Km</th>
              <th>Avería</th>
              <th>FechaSalida</th>
              <th>Reparado</th>
              <th>Observaciones</th>
              <th>Editar</th>
              <th>Mecanico</th>
              <th>Añadir</th>
              <th>Borrar</th>
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
              echo "<td><a href='editar.php?id=".$obj->IdReparacion."'><img src='https://openxava.wikispaces.com/file/view/edit.gif/144835853/edit.gif'></a></td>";
              echo "<td><a href='asignar_empleados.php?id=2' ><img src='http://08pc10.es/08ts3/img_cliente/icono_manage_contacts.jpg'></a></td>";
              echo "<td><a href='asignar_piezas.php?id=3'><img src='http://www.genmagic.org/pdi/Curso_Notebook_10/Unidad%205/Galeria/nueva.gif'></a></td>";
              echo "<td><a href='borrar.php?id=".$obj->IdReparacion."'><img src='http://helpcenter.senamoffice.com/es/images/Help/Mobile/Projects/delete.png'></a><td>";
              echo "</tr>";
          }
          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);
      } //END OF THE IF CHECKING IF THE QUERY WAS RIGHT
    ?>
  </body>
</html>
