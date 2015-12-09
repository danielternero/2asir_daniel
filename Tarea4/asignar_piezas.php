
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar piezas</title>
  </head>
  <body>
   <?php if (!isset($_POST["idrecambio"])) : ?>
            <div class="container">
                 <h1>ASIGNAR PIEZA</h1>
                 <form method="post" action="#">
                                <fieldset><legend>Datos piezas</legend>

            <?php
              $connection = new mysqli("localhost", "root", "", "talleresfaber");
              if ($connection->connect_error) {
                  printf("Connection failed: %s\n", $mysqli->connect_error);
                  exit();
              }
            $result=$connection->query('SELECT * FROM RECAMBIOS');
            echo "<label>Nombre pieza</label>";                   
            echo "<select name='idrecambio'>";
                    while($obj=$result->fetch_object()){
                    echo "<option value='".$obj->IdRecambio."'>".$obj->Descripcion."</option>";
            }
            echo "</select>";
            $idrep=$_GET['id'];
                                echo " Número de piezas <input type='number' name='piezas' required> ";
                                echo " <input type='hidden' name='id' value=$idrep>";
            ?>
                                    <input type="submit" value="Enviar">
                            </form>
                      <?php else: ?>
                            <?php
                                $idrecambio=$_POST['idrecambio'];
                                $piezas=$_POST['piezas'];
                                $idrep=$_POST['id'];
                      $connection = new mysqli("localhost", "root", "", "talleresfaber");
                      if ($connection->connect_error) {
                          printf("Connection failed: %s\n", $mysqli->connect_error);
                          exit();
                      }
                    if($connection->query("INSERT INTO INCLUYEN VALUES('$idrecambio','$idrep','$piezas')")){
                        header('Location: reparaciones.php');
                    }else{
                           $connection->query("UPDATE  INCLUYEN SET IdRecambio='$idrecambio',IdReparacion=$idrep,Unidades=Unidades+$piezas where IdRecambio='$idrecambio'"); 
                            header('Location: reparaciones.php');
                    }
            ?>
<?php endif ?>
  </body>
</html>
