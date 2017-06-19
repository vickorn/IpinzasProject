<?php
    include 'seguridad.php';
	include 'seguridadAdminPanel.php';
	include 'conexion.php';
	echo "<link rel='stylesheet' href='css/main.css'/>";
	echo "<link rel='stylesheet' href='css/adminEnlistar-Editar-Detalle.css'/>"; 
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
				echo "<div id='panel'>";
					echo "<h1>Lista de Usuarios:</h1>";
					echo "<table id='tablaLista'>";
					echo "<tr>";
					echo "<td>";
					echo "Nombre";
					echo "</td>";
					echo "<td>";
					echo "Rut";
					echo "</td>";
					echo "<td class='edad'>";
					echo "Edad";
					echo "</td>";
					echo "<td>";
					echo "Local de votacion";
					echo "</td>";
					echo "<td>";
					echo "Tipo de usuario";
					echo "</td>";
					echo "</tr>";
					$query = "select * from usuario";
					$result = mysql_query($query);
					while ($row = mysql_fetch_row($result)) {
						do{
							#init form
							echo "<form>";
							echo "<tr>";
							echo "<td>";
							echo "$row[1]";
							echo "</td>";
							echo "<td>";
							echo "$row[2]";
							echo "</td>";
							echo "<td class='edad'>";
							echo "$row[3]";
							echo "</td>";
							echo "<td>";
							echo "$row[9]";
							echo "</td>";
							$tipoUsr = "";
							if($row[10]==1){$tipoUsr = "Administrador";}
							if($row[10]==2){$tipoUsr = "Votante";}
							if($row[10]==3){$tipoUsr = "Usuario";}
							echo "<td>";
							echo "$tipoUsr";
							echo "</td>";
							$var = $row[0];
							echo "<td><a href='detalleUsuario.php?var=$var'>Ver detalle</a></td>";
							echo "<td><a href='eliminarUsuario.php?var=$var'"?>onclick="return confirm('Estas seguro que deseas eliminar al votante?')">Eliminar</a></td>
							<?php
							echo "</tr>";
							echo "</form>";
							#end form
						}while($row = mysql_fetch_array($result));
					}					
					echo "<table>";
				echo "</div>";				
			echo "</div>";
			echo "<div id='pie'>";
				include ("pie.php");
				echo "</div>";			
		echo "</div>";		
		#<!--FIN CONTENEDOR-->	
?>