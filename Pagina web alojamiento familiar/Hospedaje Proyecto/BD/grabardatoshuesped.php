<?php
   require_once("conectar2.php");
   $id_huesped =$_POST["id_huesped"];
   $lugar_expedicion =$_POST["lugar_expedicion"];
   $nombre_huesped=$_POST["nombre_huesped"];
   $numero_telefono=$_POST["numero_telefono"];
   $nacionalidad=$_POST["nacionalidad"];	
   $estado_civil=$_POST["estado_civil"];
   $prosedencia=$_POST["profesion"];
   $prosedencia=$_POST["prosedencia"];
   $permanencia=$_POST["permanencia"];
   $destino=$_POST["destino"];
   $registro=$_POST["registro"];


 $statement = $conexion ->prepare("CALL ADD_INFOHOSPEDAJE(?,?,?)");
 //echo $statement;
$statement ->bind_param("sss",$id_huesped,$lugar_expedicion,$nombre_huesped,$numero_telefono,$nacionalidad,$estado_civil,$profesion,$prosedencia,$permanencia,$destino,$registro);
if($statement->execute())
  echo "Hemos agregado un registro";
    else 
    echo "NO se agregaron datos";
$statement->close();
$conexion->close();
 echo "<a href ='index.html'> Regresar </a>";
?>
