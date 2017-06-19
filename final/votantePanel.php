<?php 
include 'seguridad.php';
include 'seguridadVotantePanel.php'
;?>
<html>
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>Welcome to the IPINZA PROYECT</title>
	  <link rel="stylesheet" href="css/main.css"/>
	  <link rel="stylesheet" href="css/panelVotante.css" />
	</head>
	<body>
		<!--CONTENEDOR-->
		<div id="contenedor">			
			<!--CABERERA-->
			<div id="cabecera">
				<div id="logo"><?php include ("logo.php");?></div>
				<div id="menu"><?php include ("menu.php");?></div>
			</div>
			<!--FIN CABECERA-->
			<div id="contenido"><?php				
				
				echo "<div id='panelVotante'>".
						"<ul>
						<li><a href='loginPostular.php'>Postular</a></li>
						<li><a href='votar.php'>Votar</a></li>
						<li><a href='estadisticas.php'>Ver Estadísticas</a></li>
						</ul>".					 	
					 "</div>";
			;?></div>
			<div id="pie"><?php include ("pie.php");?></div>
			
		</div>
		<!--FIN CONTENEDOR-->
	</body>
</html>

