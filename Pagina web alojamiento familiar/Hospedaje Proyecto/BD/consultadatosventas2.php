<?php
	require_once("conectar2.php");
?>
 <body>
 	<h1> Consulta informacion de los huespedes </h1>
   <fieldset>
 	<form method="POST" action="consultadatosventas2.php">
 		<input type="text" name="id_producto">
		<input type="submit" value="Buscar producto">
	</form>
</fieldset>
<?php
    if(isset($_POST['id_huesped'])) {
      $id_producto=$_POST['id_producto'];
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Id producto</th>";
	  echo "<th>Nombre producto</th>";
	  echo "<th>Valor producto</th>";
	  echo "<th>Cantidad</th>";
	  echo "<th>Total</th>";


    mysqli_multi_query ($conexion,"CALL SELECT2_INFOVENTAS($id_producto)") OR DIE (mysqli_error($conexion));
    if ($result = mysqli_store_result($conexion)) {
       while ($filas = mysqli_fetch_assoc($result)) {
      echo "<tr>";
	    echo "<td>".$filas["id_producto"]."</td><td>".$filas["nombre_producto"]."</td><td>".$filas["valor_producto"]."</td><td>".$filas["cantidad"]."</td><td>".$filas["cantidad_total"]."</td>";echo "<td>".$filas["id_producto"]."</td><td>".$filas["nombre_producto"]."</td><td>".$filas["valor_producto"]."</td><td>".$filas["cantidad"]."</td><td>".$filas["cantidad_total"]."</td>";
      echo "</tr>";  

        }
            mysqli_free_result($result);
       }
  echo "</table>"; 
  echo "<br>";  
  $conexion->close();
  echo "<a href='index.html'>Regresar </a>";     
}
?>
</body>