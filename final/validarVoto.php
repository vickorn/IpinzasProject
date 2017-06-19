<?php
	include 'conexion.php';
    include 'seguridad.php';
	include 'seguridadVotantePanel.php';
	echo "<meta http-equiv='Content-type' content='text/html; charset=utf-8'/>";
	$voto = $_GET['voto'];
	$cargo = $_GET['cargo'];
	if($voto!=null || $cargo!=null){
		$result = mysql_query("select ID_Usuario from voto where ID_Usuario='". $_SESSION['usuarioActual'] ."' and ID_Cargo='$cargo'");
		$nresult = mysql_num_rows($result);
		if($nresult!=0){
			echo "<script>alert('El usuario no puede votar 2 veces para el mismo cargo.');
                  window.location.href=\"votar.php\"</script>"; 
		}else{
			$votante = $_SESSION['usuarioActual'];
			mysql_query("insert into voto values('$votante','$cargo','$voto')");
			mysql_query("update postular set Cantidad_Votos=(Cantidad_Votos+1) where ID_Usuario='$voto' and ID_Cargo='$cargo'");
			echo "<script>alert('¡Gracias por su voto!');
                  window.location.href=\"votantePanel.php\"</script>";
		}
	}else{
		echo "<script>alert('Voto inválido, verifique el voto y/o el cargo al cual quiere votar');
                  window.location.href=\"votar.php\"</script>"; 
	}
?>