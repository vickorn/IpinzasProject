<?php
	error_reporting(0);
	$error = $_GET['error'];
    include 'seguridad.php';
	include 'seguridadAdminPanel.php';
	echo "<link rel='stylesheet' href='css/main.css'/>";
	echo "<link rel='stylesheet' href='css/adminEnlistar-Editar-Detalle.css' />"; 
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
			echo "<div id='panel'>";
			echo "<h1>Agregar votantes:</h1>";
			echo "<form method='post' action='agregarUsuario2.php'>";
			echo "<table>";
			echo "<tr>";
			echo "<td>Nombre: </td> <td><input type='text' name='txtNombre'></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>RUT: </td> <td><input type='text' name='txtRut'></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Edad: </td> <td><input type='number' name='txtEdad'></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Sexo: </td> <td><select name='ddlSexo' style='width: 140px;'><option value='Masculino'>Masculino</option><option value='Femenino'>Femenino</option><option option='Otro'>Otro</option></select></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Direccion: </td> <td><input type='text' name='txtDireccion'></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Ciudad: </td> <td><input type='text' name='txtCiudad'></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Fono: </td> <td><input type='text' name='txtFono'></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Telefono movil: </td> <td><input type='text' name='txtMovil'></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Estado civil: </td> <td><select style='width: 140px;' name='ddlEstadoCivil'><option value='Soltero(a)'>Soltero(a)</option><option value='Casado(a)'>Casado(a)</option><option option='Viudo(a)'>Viudo(a)</option></select></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Local de votacion: </td><td><input type='text' name='txtEscuelaVotacion'></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Tipo de usuario: </td> <td><select style='width: 140px;' name='ddlTipoUsuario'><option value='1'>Administrador</option><option value='2'>Votante</option><option value='3'>Usuario</option></select></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Usuario: </td> <td><input type='text' name='txtUser'></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Password: </td> <td><input type='password' name='txtPass1'></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Repita password: </td> <td><input type='password' name='txtPass2'></td>";
			echo "</tr>";
			echo "<tr><td></tr>";
			echo "</table>";
			echo "<input type='submit' class='submit' value='Agregar usuario'></td><br>";			
			echo "<center>$error</center>";
			echo "<form>";
			echo "</div>";
			echo "<div id='pie'>";
			include ("pie.php");
			echo "</div>";
		echo "</div>";
		#<!--FIN CONTENEDOR-->	
?>