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
			<div id="contenido">
				<form method='post' action='generarNoticia2.php'>
				Titular:<br/> <input type='text' class='textbox' name='txtTitular' /><br />
				Cuerpo:<br/><textarea class='textbox' name="txtNoticia"></textarea><br />
				<input type='submit' class='botones' value='Ingresar' />				
				</form>				
			</div>
			<div id="pie"><?php include ("pie.php");?></div>
			
		</div>
		<!--FIN CONTENEDOR-->
	</body>
</html>