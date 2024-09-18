<?php
//require_once("menu.php");
require_once("conectar2.php");
  //  $cedula=$_POST["id_huesped"];
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>Id </th>";
	echo "<th>Lugar de prosedencia</th>";
	echo "<th>Nombre completo</th>";
	echo "<th>Numero de telefono</th>";
	echo "<th>Nacionalidad</th>";
	echo "<th>Estado civil</th>";
	echo "<th>Profesion</th>";
	echo "<th>Prosedencia</th>";
	echo "<th>Permanencia</th>";
	echo "<th>Destino</th>";
	echo "<th>Registro</th>";
	echo "</tr>";

    mysqli_multi_query ($conexion, "CALL SELECT_INFOHOSPEDAJE()") OR DIE (mysqli_error($conexion));
    if ($result = mysqli_store_result($conexion)) {
       while ($filas = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<tr>";
			echo "<td>".$filas["id_huesped"]."</td><td>".$filas["lugar_expedicion"]."</td><td>".$filas["nombre_huesped"]."</td><td>".$filas["numero_telefono"]."</td><td>".$filas["nacionalidad"]."</td><td>".$filas["estado_civil"]."</td><td>".$filas["profesion"]."</td><td>".$filas["prosedencia"]."</td><td>".$filas["permanencia"]."</td><td>".$filas["destino"]."</td><td>".$filas["registro"]."</td>";      	
			echo "</tr>";          
        }    
            mysqli_free_result($result);
       }
	echo "</table>"; 
	echo "<br>";	
	$conexion->close();
	echo "<a href='index.html'>Regresar </a>";     
?>