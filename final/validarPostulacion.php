<?php
    include 'conexion.php';
	include 'seguridad.php';
	include 'seguridadVotantePanel.php';
	
	$repetido = mysql_query("select * from Postular where ID_Usuario='". $_SESSION['usuarioActual'] ."' and ID_Cargo='". htmlentities($_POST['ddlCargo']) . "'");
	$nrepetido = mysql_num_rows($repetido);
	
	if($nrepetido!=0){
		echo "<script>alert('No puede postular a un cargo más de una vez.');
              window.location.href=\"postular.php\"</script>"; 
	}else{
		mysql_query("INSERT INTO postular(ID_Usuario,ID_Cargo,Cantidad_Votos) VALUES ('". $_SESSION['usuarioActual'] . "','" . htmlentities($_POST['ddlCargo']) ."',0)");
		echo "<script>alert('¡Postulación existosa!');
              window.location.href=\"votantePanel.php\"</script>"; 
	}
?>