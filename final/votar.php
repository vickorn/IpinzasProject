<?php 
include 'conexion.php';
include 'seguridad.php';
include 'seguridadVotantePanel.php'
;?>
    <html>
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>Welcome to the IPINZA PROYECT</title>
	  <link rel="stylesheet" href="css/main.css"/>	
	  <link rel="stylesheet" href="css/panelVotante.css"/>	  
	  
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
				<div id="generalListas">
					<?php			
						echo"<form method='post' action='cargarPostulantes.php'>";				
						/*CARGAR LOS CARGOS*/
						echo"<h3>Cargos</h3>";
						echo"<select class='listas' name='ddlCargo'>";
							$cargos = mysql_query("SELECT * from Cargo");
							$ncargos = mysql_num_rows($cargos);
							if($ncargos!=0){
								for ($i=0; $i < $ncargos; $i++) {
									$idCargo = mysql_result($cargos, $i, 0);
									$desCargo = mysql_result($cargos, $i, 1); 
									echo "<option value='$idCargo'>$desCargo</option>";
								}
							}	
						echo"</select>";				
						/*FIN CARGAR LOS CARGOS*/
						echo"<br/><input type='submit'class='botones' value='Ver postulantes'/>";
						echo"</form>";
					;?>
				</div>
				</div>
			<div id="pie"><?php include ("pie.php");?></div>
			
		</div>
		<!--FIN CONTENEDOR-->
	</body>
</html> 
