<html>
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>Welcome to the IPINZA PROYECT</title>
	  <link rel="stylesheet" href="css/main.css"/>
	  <link rel="stylesheet" href="css/estadisticas.css"/> 
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
			<div class="contenedor">
				<?php
					include 'conexion.php';
					$subQuery = "select * from postular group by ID_Cargo";
					$subResult = mysql_query($subQuery);
					$numCargos = mysql_num_rows($subResult);
					for ($i=1; $i <= $numCargos; $i++) {
						$query1 = "select descCargo from cargo where ID_Cargo = $i";
						$result1 = mysql_query($query1);
						while($row = mysql_fetch_row($result1)){
							do{
								echo "<h2>Resultados para: $row[0]</h2>";
							}while($row = mysql_fetch_array($result1));
						}
						$query2 = "select Sum(Cantidad_Votos) from postular where ID_Cargo = $i";
						$result2 = mysql_query($query2);
						$totalVotos = 0;
						while($row = mysql_fetch_row($result2)){
							do{
								$totalVotos = $row[0];
							}while($row = mysql_fetch_array($result2));
						}
						echo "<div class='subcontenedor'>";
						echo "<table class='res' >";
						echo "<tr><td class='head'>Postulante</td><td class='head' >Cantidad de votos</td><td class='head' >Porcentaje</td></tr>";
						$query = "SELECT usuario.Nombre, postular.Cantidad_Votos FROM postular INNER JOIN usuario ON postular.ID_Usuario = usuario.ID_Usuario WHERE postular.ID_Cargo = '$i' ";						
						$result = mysql_query($query);
						while($row = mysql_fetch_row($result)){
							do{
								$porVotos = (($row[1]*100)/$totalVotos);
								echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$porVotos%</td></tr>";
							}while($row = mysql_fetch_array($result));
						}
						echo "<tr><td class='head'>Total de votos: </td><td class='head'>$totalVotos</td></tr>";
						echo "</table>";
						echo "</div>";
						echo "<hr /><br>";
					}
				echo "<br>";
				
				echo "<br>";
				?>			
			</div>
			<div id="pie"><?php include ("pie.php");?></div>
		</div>
		
		<!--FIN CONTENEDOR-->
	</body>
</html>