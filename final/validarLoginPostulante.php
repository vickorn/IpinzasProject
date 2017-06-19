<?php
	include 'conexion.php';
    include 'seguridad.php';
	include 'seguridadVotantePanel.php';
		
	$myrut = mysql_query("select RUT from Usuario where RUT='". htmlentities($_POST['txtRUT']) ."'");
	$nmyrut = mysql_num_rows($myrut);
	
	if($nmyrut != 0){
		$rutUserActual = $_SESSION['usuarioActual'];
		$myuser = mysql_query("select RUT from Usuario where ID_Usuario = '$rutUserActual'");
		$nmysuer = mysql_num_rows($myuser);
		
		if($nmysuer != 0){			
			$rowRUT1 = mysql_result($myrut, 0, 0);
			$rowRUT2 = mysql_result($myuser, 0, 0);
			if($rowRUT1 == $rowRUT2){
				header("location: postular.php");
			}else{			
				echo "<script>alert('El RUT ingresado no coincide con el del usuario actual.');
	                  window.location.href=\"votantePanel.php\"</script>"; 
			}
		}

	}else{
		echo "<script>alert('RUT incorrecto.');
              window.location.href=\"votantePanel.php\"</script>"; 
	}
?>