<html>
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>Welcome to the IPINZA PROYECT</title>
	  <link rel="stylesheet" href="css/main.css"/>	  
	</head>
	<body>
		<!--CONTENEDOR-->
		<div id="contenedor">			
			<!--CABERERA-->
			<?php
				error_reporting(0);
				@session_start();
				if($_SESSION['autentica'] != null){
					unset($_SESSION['autentica']);
					unset($_SESSION['usuarioActual']); 
					unset($_SESSION['tipo']);
				}				
			?>
			<div id="cabecera">
				<div id="logo"><?php include ("logo.php");?></div>
				<div id="menu"><?php include ("menu.php");?></div>
			</div>
			<!--FIN CABECERA-->
			<div id="contenido"><?php include ("login2.php");?></div>
			<div id="pie"><?php include ("pie.php");?></div>
			
		</div>
		<!--FIN CONTENEDOR-->
	</body>
</html>