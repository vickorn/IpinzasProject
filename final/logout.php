<?php	 
	@session_start(); 
	unset($_SESSION['autentica']);
	unset($_SESSION['usuarioActual']); 
	unset($_SESSION['tipo']);
	Header("Location: index.php");
	exit();
?>