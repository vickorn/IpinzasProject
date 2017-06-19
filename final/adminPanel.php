<?php
    include 'seguridad.php';
	include 'seguridadAdminPanel.php';
	echo "<meta http-equiv='Content-type' content='text/html; charset=utf-8'/>";
	echo "<link rel='stylesheet' href='css/main.css'/> ";
	echo "<link rel='stylesheet' href='css/panelAdmin.css' />";	  
	#	<!--CONTENEDOR-->	
		echo "<div id='contenedor'>";
			#<!--CABERERA-->
			echo "<div id='cabecera'>";
			echo "<div id='logo'>";
			include ("logo.php");
			echo "</div>";
			echo "<div id='menu'>";
			include ("menu.php");
			echo "</div>";
		echo "</div>";
			#<!--FIN CABECERA-->
			echo "<div id='contenido'>";				
				echo "<div id='panelAdmin'>";
				echo "<h1>Panel de administrador:</h1>";
					echo "<ul>";
						echo "<li><a href='agregarUsuario.php'>Agregar nuevos votantes</a></li>";
						echo "<li><a href='enlistarUsuario.php'>Listar usuarios</a></li>";
						echo "<li><a href='loginPostular.php'>Postular</a></li>";
						echo "<li><a href='votar.php'>Votar</a></li>";
						echo "<li><a href='estadisticas.php'>Ver Estadísticas</a></li>";
						echo "<li><a href='generarNoticia.php'>Agregar noticia</a></li>";
					echo "</ul>";
				echo "</div>";
			echo "</div>";
			echo "<div id='pie'>";
			include ("pie.php");
			echo "</div>";			
		echo "</div>";
		#<!--FIN CONTENEDOR-->	
?>