<?php
//require_once("menu.php");
require_once("conectar2.php");
  //  $cedula=$_POST["id_huesped"];
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>Id_producto</th>";
	echo "<th>Nombre producto</th>";
	echo "<th>Valor producto</th>";
	echo "<th>Cantidad</th>";
	echo "<th>Total</th>";
	

    mysqli_multi_query ($conexion, "CALL SELECT_INFOVENTAS()") OR DIE (mysqli_error($conexion));
    if ($result = mysqli_store_result($conexion)) {
       while ($filas = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<tr>";
			echo "<td>".$filas["id_producto"]."</td><td>".$filas["nombre_producto"]."</td><td>".$filas["valor_producto"]."</td><td>".$filas["cantidad"]."</td><td>".$filas["cantidad_total"]."</td>";      	
			echo "</tr>";          
        }    
            mysqli_free_result($result);
       }
	echo "</table>"; 
	echo "<br>";	
	$conexion->close();
	echo "<a href='index.html'>Regresar </a>";     
?>