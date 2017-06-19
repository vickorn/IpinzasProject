<?php 
include 'seguridad.php';
include 'seguridadVotantePanel.php';
?>
<html>
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>Welcome to the IPINZA PROYECT</title>
	  <link rel="stylesheet" href="css/main.css"/>	 
	  <link rel="stylesheet" href="css/login.css"/> 
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
				echo "<form method='post' action='validarLoginPostulante.php'>";
				echo "Ingrese su rut<br />";
				echo "<input type='text' maxlength='10' name='txtRUT' class='textbox' /><br />";
				echo "<input type='submit'class='botones' value='Aceptar' />";
				echo "</form>";
			 ?>
			</div>
			<div id="pie"><?php include ("pie.php");?></div>
			
		</div>
		<!--FIN CONTENEDOR-->
	</body>
</html>
