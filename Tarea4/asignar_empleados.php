
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar empleados</title>
  
  </head>
  <body>
<?php if (!isset($_POST["idempleado"])) : ?>
      
             <div class="container">
                 <h1>ASIGNAR EMPLEADO</h1>
                     <form method="post" action="#">
 <?php
$connection = new mysqli("localhost", "root", "", "talleresfaber");
if ($connection->connect_error) {
     printf("Connection failed: %s\n", $mysqli->connect_error);
     exit();
     }
   $result=$connection->query('SELECT * FROM Empleados');
  echo "Nombre empleado: <select  name='idempleado'>";
      while($obj=$result->fetch_object()){
 echo "<option value='".$obj->CodEmpleado."'>".$obj->Nombre."</option>";
   }
  echo "</select>";
  $idrep=$_GET['id'];
  echo " Horas: <input type='number' name='horas' required> ";
 echo " <input type='hidden' name='id' value=$idrep>";
  ?>
     <input type="submit" value="Enviar">
    </form>

   <?php else: ?>       

   <?php
    $idempleado=$_POST['idempleado'];
  $horas=$_POST['horas'];
   $idrep=$_POST['id'];
$connection = new mysqli("localhost", "root", "", "talleresfaber");
 if ($connection->connect_error) {
   printf("Connection failed: %s\n", $mysqli->connect_error);
  exit();
 }
 if($connection->query("INSERT INTO INTERVIENEN VALUES('$idempleado','$idrep','$horas')")){
  header('Location: reparaciones.php');
 }else{
$connection->query("UPDATE  INTERVIENEN SET CodEmpleado='$idempleado',IdReparacion=$idrep,Horas=Horas+$horas where CodEmpleado='$idempleado'"); 
header('Location: reparaciones.php');
  }
 ?>
 <?php endif ?>
      


  </body>
</html>
