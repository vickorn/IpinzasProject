<?php
	include 'seguridad.php';
	include 'seguridadAdminPanel.php';
	include	'conexion.php';
	error_reporting(0);	
	$error = $_GET['error'];
	if($error == ""){
		$idUser = $_POST["txtIdUsuario"];
	}else{
		$idUser = $_GET["var"];
	}
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
			$query = "select * from usuario where ID_Usuario='$idUser'";
			$result = mysql_query($query);
			echo "<div id='panel'>";
			while ($row = mysql_fetch_row($result)) {
				do{
				echo "<form method='post' action='editarUsuario2.php'>";
				echo "<table class='tablaLista'>";
				echo "<tr>";
				echo "<td>";
				echo "Nombre";
				echo "</td>";
				echo "<td>";
				echo "<input type='text' name='txtNombre' value='$row[1]'>";
				echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>";
				echo "Rut";
				echo "</td>";
				echo "<td>";
				echo "<input type='text' name='txtRut2' value='$row[2]' disabled>";
				echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>";
				echo "Edad";
				echo "</td>";
				echo "<td>";
				echo "<input type='number' style='width: 140px;' name='txtEdad' value='$row[3]'>";
				echo "</td>";
				echo "</tr>";
				echo "<td>";
				echo "Sexo";
				echo "</td>";
				echo "<td>";
				echo "<select name='ddlSexo' style='width: 140px;'><option value='Masculino'>Masculino</option><option value='Femenino'>Femenino</option><option option='Otro'>Otro</option></select>";
				echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>";
				echo "Direccion";
				echo "</td>";
				echo "<td>";
				echo "<input type='text' name='txtDireccion' value='$row[4]'>";
				echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>";
				echo "Ciudad";
				echo "</td>";
				echo "<td>";
				echo "<input type='text' name='txtCiudad' value='$row[5]'>";
				echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>";
				echo "Fono";
				echo "</td>";
				echo "<td>";
				echo "<input type='text' name='txtFono' value='$row[6]'>";
				echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>";
				echo "Movil";
				echo "</td>";
				echo "<td>";
				echo "<input type='text' name='txtMovil' value='$row[7]'>";
				echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>";
				echo "Estado Civil";
				echo "</td>";
				echo "<td>";
				echo "<select style='width: 140px;' name='ddlEstadoCivil'><option value='Soltero(a)'>Soltero(a)</option><option value='Casado(a)'>Casado(a)</option><option option='Viudo(a)'>Viudo(a)</option></select>";
				echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>";
				echo "Local de votacion";
				echo "</td>";
				echo "<td>";
				echo "<input type='text' name='txtEscuelaVotacion' value='$row[9]'>";
				echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>";
				echo "Tipo de usuario";
				echo "</td>";
				echo "<td>";
				echo "<select name='ddlTipoUsuario' style='width: 140px;'><option value='1'>Administrador</option><option value='2'>Votante</option><option value='3'>Usuario</option></select>";
				echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>";
				echo "Usuario";
				echo "</td>";
				echo "<td>";
				echo "<input type='text' name='txtUser' value='$row[11]'>";
				echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>";
				echo "Password";
				echo "</td>";
				echo "<td>";
				echo "<input type='password' name='txtPass1' value='$row[12]'>";
				echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>";
				echo "Repita password";
				echo "</td>";
				echo "<td>";
				echo "<input type='password' name='txtPass2' value='$row[12]'>";
				echo "</td>";
				echo "</tr>";
				echo "<tr><td>  </td><td>$error</td></tr>";
				echo "</table>";
				echo "<input type='hidden' name='txtIdUsuario' value='$row[0]'>";
				echo "<input type='hidden' name='txtRut' value='$row[2]'>";
				echo "<input type='submit' class='submit' id='submit' name='submit' value='Editar'>";
				echo "</form>";
				}while($row = mysql_fetch_array($result));
			}
			echo "</div>";
			echo "<div id='pie'>";
			include ("pie.php");
			echo "</div>";			
		echo "</div>";
		#<!--FIN CONTENEDOR-->
?>