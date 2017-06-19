<?php
    @session_start();	
	if($_SESSION['autentica'] != 'CONECTADO'){
		header('location: index.php');
		exit();
	}
?>