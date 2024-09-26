<?php
	require_once("conectar2.php");
?>
 <body>
 	<h1> Consulta informacion de los huespedes </h1>
   <fieldset>
 	<form method="POST" action="consultadatoshuesped2.php">
 		<input type="text" name="id_huesped">
		<input type="submit" value="Buscar huesped">
	</form>
</fieldset>
<?php
    if(isset($_POST['id_huesped'])) {
      $codigodepartamento=$_POST['id_huesped'];
echo "<table border='1'>";
  echo "<tr>";
  echo "<th>Id huesped</th>";
	echo "<th>Lugar de prosedencia</th>";
	echo "<th>Nombre completo</th>";
	echo "<th>Numero de telefono</th>";
	echo "<th>Nacionalidad</th>";
	echo "<th>Estado civil</th>";
	echo "<th>Prosedencia</th>";
	echo "<th>Permanencia</th>";
	echo "<th>Destino</th>";
	echo "<th>Registro</th>";
	echo "</tr>";

    mysqli_multi_query ($conexion,"CALL SELECT2_INFOHOSPEDAJE($id_huesped)") OR DIE (mysqli_error($conexion));
    if ($result = mysqli_store_result($conexion)) {
       while ($filas = mysqli_fetch_assoc($result)) {
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
}
?>
</body>