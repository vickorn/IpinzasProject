<?php
/*AGREGAR A TODAS LAS PAGINAS QUE REQUIERAN AUTENTIFICACION DE USUARIOS QUE NO SEAN ADMINISTRADOR*/
    @session_start();		
	
		if($_SESSION['tipo'] != null){
			if($_SESSION['tipo'] != 3) {				
				header("location: index.php");				
			}
		}else{
			header("location: index.php");
		}
	
	
?>