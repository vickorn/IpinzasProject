<?php
include 'conexion.php';
	
	/*REALIZO CONSULTA PARA BUSCAR AL USUARIO (OBTENGO EL ID)*/
	$miUsuario = mysql_query("SELECT ID_USUARIO from Usuario where Username = '" . htmlentities($_POST["txtUsername"]) . "'");
	$nMiUsuario = mysql_num_rows($miUsuario);
	
	if($nMiUsuario != 0){
		
		/*REALIZO CONSULTA PARA VER SI LA CONTRASEÑA ES CORRECTA.*/
		$miPassword = mysql_query("SELECT ID_Usuario,TipoUsuario from Usuario where Username= '" . htmlentities($_POST["txtUsername"]) . "' and Password = '" . htmlentities($_POST["txtPassword"]) . "'");
		$nMiPassword = mysql_num_rows($miPassword);
		
		
		if($nMiPassword != 0){
			session_start();
			
			/*VARIABLES SESSION PARA SABER SI EL USUARIO ESTÁ O NO LOGEADO*/
			$_SESSION['autentica'] = 'CONECTADO';
			$_SESSION['usuarioActual'] = mysql_result($miPassword, 0,0);
			
			/*CONSULTO POR EL TIPO DE USUARIO (1=Administrador; 2=Votante; 3=Nuevo) Y REDIRECCIONO SEGUN EL TIPO*/
			$tipo = mysql_result($miPassword, 0,1); /* 0 = NUMERO DE FILA, 1= NUMERO DE COLUMNA (OJO QUE SELECCIONE ID Y TIPO, NADA MAS, POR ESO LA 1 ES EL TIPO)*/
			if($tipo == 1){
				$_SESSION['tipo'] = 1;
				header("location: adminPanel.php");
			}elseif($tipo==2){
				$_SESSION['tipo'] = 2;
				header("location: votantePanel.php");
			}else{
				$_SESSION['tipo'] = 3;
				header("location: nuevoPanel.php");
			}		
			
		}else{
			/*DOY UN AVISO POR ALERT CONTRASEÑA INCORRECTA*/
			 echo "<script>alert('La contrase\u00f1a del usuario no es correcta.');
                  window.location.href=\"login.php\"</script>"; 
		}
	}else{
		/*DOY UN AVISO POR ALERT DE USUARIO INEXISTENTE*/
		echo"<script>alert('El usuario no existe.');window.location.href=\"login.php\"</script>";
	}
	
	/*CIERRO LA CONEXIÓN*/
	mysql_close($link);
?>