<?php
/*AGREGAR A TODAS LAS PAGINAS QUE REQUIERAN AUTENTIFICACION DE USUARIOS TIPO ADMINISTRADOR*/
    @session_start();	
	if($_SESSION['tipo'] != null){
		if($_SESSION['tipo'] != 1){header("location: index.php");}
	}else{
		header("location: index.php");
	}
?>