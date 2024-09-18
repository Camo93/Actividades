<?php
   require_once("conectar2.php");
   $id_producto =$_POST["id_producto"];
   $nombre_producto =$_POST["nombre_producto"];
   $valor_producto=$_POST["valor_producto"];
   $cantidad=$_POST["cantidad"];
   $cantidad_total=$_POST["cantidad_total"];	
  
  

 $statement = $conexion ->prepare("CALL ADD_INFOHOSPEDAJE(?,?,?)");
 //echo $statement;
$statement ->bind_param("sss", $id_producto,$nombre_producto,$valor_producto,$cantidad, $cantidad_total);
if($statement->execute())
  echo "Hemos agregado un registro";
    else 
    echo "NO se agregaron datos";
$statement->close();
$conexion->close();
 echo "<a href ='index.html'> Regresar </a>";
?>
