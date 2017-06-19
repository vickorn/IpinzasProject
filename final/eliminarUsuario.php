<?php
	include 'seguridad.php';
	include 'seguridadAdminPanel.php';
	include 'conexion.php';
	$idUser = $_GET['var'];	
	$query = "delete from usuario where ID_Usuario = '$idUser'";
	mysql_query($query);
	header('location: enlistarUsuario.php');
?>