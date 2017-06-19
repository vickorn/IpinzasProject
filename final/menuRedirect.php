<?php
include 'seguridad.php';
	@session_start();	
	if($_SESSION['tipo'] != null){
		if($_SESSION['tipo'] == 1){header("location: adminPanel.php");}
		if($_SESSION['tipo'] == 2){header("location: votantePanel.php");}
		if($_SESSION['tipo'] == 3){header("location: nuevoPanel.php");}
	}else{
		header('location: index.php');
	}
?>