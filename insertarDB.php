<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insertar Equipo</title>
  </head>
  <body>
  <?php
  //Incluir la clase de conexion
  include "dbNBA.php";
  $equipo=new dbNBA();
  //insertar un usuario
  $resultadoInsert=$equipo->insertarEquipo($_POST["nombre"],$_POST["ciudad"],$_POST["conferencia"],$_POST["division"]);
  //Devolver el usuario insertado
  if($resultadoInsert==true){
    $resultado=$equipo->devolverUltimoEquipo($_POST["nombre"]);
    $fila=$resultado->fetch_assoc();

    echo "Nombre: ".$fila["Nombre"]."</br>";
    echo "Ciudad: ".$fila["Ciudad"]."</br>";
    echo "Conferencia: ".$fila["Conferencia"]."</br>";
    echo "Division: ".$fila["Division"]."</br>";

  }else{
    echo "Error en la insercion";
  }
  ?>
  </body>
</html>
