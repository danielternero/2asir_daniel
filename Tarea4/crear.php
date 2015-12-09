
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
  
  </head>
  <body>

      

   <?php if (!isset($_POST["matricula"])) : ?>
      
      <div class="c1">
         <h1 >NUEVA REPARACIÓN</h1>

         <form method="post" action="#">
                        <fieldset>
                            <legend>Datos reparación</legend>
   
            <?php
                      //CONEXION
                      $connection = new mysqli("localhost", "root", "", "talleresfaber");
                      //TESTING IF THE CONNECTION WAS RIGHT
   if ($connection->connect_error) {
   printf("Connection failed: %s\n", $mysqli->connect_error);
  exit();
  }
  $result=$connection->query('SELECT Matricula FROM VEHICULOS');
   echo "<label>Matrícula</label>";  
  echo "<select name='matricula'>";
   while($obj=$result->fetch_object()){
   echo "<option value='".$obj->Matricula."'>".$obj->Matricula."</option>";
 }
  echo "</select>";
     ?>

 Fecha de entrada: <input type="date" name="fechaentrada" required> 

   Km: <input type="number" name="km" required> 

     Averia: <input type="text" name="averia" required>

     Fecha de salida: <input type="date" name="fechasalida">
                                
   <table>
    <tr>
     <td>
   Reparado: </br><input name="reparado" type="radio" id="ia" value="1" checked/>
     <label for="ia">Reparado</label>
      </td>
       <td>
      <input  name="reparado" type="radio" id="nein" value="0"/>
    <label for="nein">No reparado</label>
     </td>
     </tr>
     </table>
                                
      Observaciones: <input type="text" maxlength="30" name="observaciones" required>
      </fieldset>
     <br>
       <input type="submit" id='btn' value="Enviar">
    </form> 
 </div>
      
                    
        <?php else: ?>    
      
                    
                    <?php
            $mat=$_POST['matricula'];
            $entrada=$_POST['fechaentrada'];
            $km=$_POST['km'];
            $ave=$_POST['averia'];
            $salida=$_POST['fechasalida'];
            $rep=$_POST['reparado'];
            $obs=$_POST['observaciones'];
                              //CONEXION
            $connection = new mysqli("localhost", "root", "", "talleresfaber");
                              //TESTING IF THE CONNECTION WAS RIGHT
             if ($connection->connect_error) {
                  printf("Connection failed: %s\n", $mysqli->connect_error);
                  exit();
             }
                             mysqli_query($connection,"INSERT INTO REPARACIONES VALUES(NULL,'$mat','$entrada',$km,'$ave','$salida',$rep,'$obs')"); 
                            header('Location: reparaciones.php');
                     ?>
      
      <?php endif ?>




  </body>
</html>
