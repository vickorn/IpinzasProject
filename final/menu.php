<link rel="stylesheet" href="css/menu.css"/>
<ul>
	<li><a href="index.php">Home</a></li>
	<?php
	error_reporting(0);
	@session_start();
	if($_SESSION['autentica'] == null){		
		echo "<li><a href='login.php'>Login</a></li>";
	}else{
		echo "<li><a href='logout.php'>Desconectar</a></li>";
		echo "<li><a href='menuRedirect.php'>Menu</a></li>";
	}
	?>	
	<li><a href="estadisticas.php">Ver votaciones</a></li>
</ul>