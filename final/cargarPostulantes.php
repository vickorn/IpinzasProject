<?php
	include 'conexion.php';
    include 'seguridad.php';
	include 'seguridadVotantePanel.php';	
?>
<html>
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>Welcome to the IPINZA PROYECT</title>
	  <link rel="stylesheet" href="css/main.css"/>	  
	  <link rel="stylesheet" href="css/votos.css"/>  
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
				error_reporting(0);
				if($_POST['ddlCargo']!=null){
					$result = mysql_query("select ID_Usuario from postular where ID_Cargo = '". htmlentities($_POST['ddlCargo']) . "'");
					$nresult = mysql_num_rows($result);
					if($nresult != 0){
						echo "<div id=supergeneral>";
						echo "<h3>Lista de postulantes</h3>";
						echo "<div id='general'>";											
							for ($i=0; $i < $nresult; $i++) {
								$idPostulante = mysql_result($result, $i,0);
								$sql = mysql_query("select Nombre,RUT from Usuario where ID_Usuario = $idPostulante");
								$nomPostulante = mysql_result($sql, 0, 0);
								$rutPostulante = mysql_result($sql, 0, 1);
								
								echo "<div class='left'> $nomPostulante # RUT: $rutPostulante</div>
								<div class='right'> <a href='validarVoto.php?voto=$idPostulante&cargo=".$_POST['ddlCargo']. "'>Votar</a><br/></div><hr />";							
							}
						echo "</br></div>";
						echo "</div>";
	
					}
				}else{
					echo "<script>alert('Verifique que se ha seleccionado un cargo para poder desplegar los votantes.');
                  			window.location.href=\"votar.php\"</script>"; 
				}
				
					
				
				
			?></div>
			<div id="pie"><?php include ("pie.php");?></div>
			
		</div>
		<!--FIN CONTENEDOR-->
	</body>
</html>

