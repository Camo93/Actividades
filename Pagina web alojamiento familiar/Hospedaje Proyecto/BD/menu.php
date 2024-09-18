<?php
?>
<html>
  <head>
   <title>Menu Desplegable</title>
   <style type="text/css">			
  * {
	margin:0px;
	padding:0px;
    }			
	#header {
   		margin:auto;
		width:500px;
		font-family:Arial, Helvetica, sans-serif;
		}		
		ul, ol {
			list-style:none;
		}		
	.nav {
		width:500px; /*Le establecemos un ancho*/
		margin:0 auto; /*Centramos automaticamente*/
  	}
	.nav > li {
   		float:left;
		}			
	.nav li a {
		background-color:#000;
		color:#fff;
		text-decoration:none;
		padding:10px 12px;
		display:block;
		}		
		.nav li a:hover {
		background-color:#434343;
		}			
		.nav li ul {
			display:none;
			position:absolute;
			min-width:140px;
			}			
		.nav li:hover > ul {
		display:block;
		}			
		.nav li ul li {
		position:relative;
		}			
		.nav li ul li ul {
		right:-140px;
		top:0px;
		}			
		</style>
	</head>
	<body>
	   <div id="header">
		<nav> <!-- Aqui estamos iniciando la nueva etiqueta nav -->
		<ul class="nav">
		<li><a href="">Inicio</a></li>
		<li><a href="">Docentes</a>
		<ul>
 		     <li><a href="">Agregar info huesped</a></li>
		     <li><a href="">Consultar info huesped</a></li>
		</ul>
		</li>
		<li><a href="">XXXXXX</a>
		<ul>
		<li><a href="">XXXXXXXX</a></li>
		<li><a href="">XXXXXXXX</a></li>
		</ul>
		</li>
		<li><a href="">XXXXXX</a>
		<ul>
		<li><a href="">XXXXXXXXX</a></li>
		<li><a href="">XXXXXXXXX</a></li>
		</ul>
		</li>
		</nav><!-- Aqui estamos cerrando la nueva etiqueta nav -->
	     <?php
		 include("conectar2.php");
		?>
	</div>
  </body>
</html>
