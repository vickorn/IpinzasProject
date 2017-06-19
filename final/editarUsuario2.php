<?php
include 'conexion.php';
$idUser = $_POST["txtIdUsuario"];
$nombre = $_POST["txtNombre"];
$rut = $_POST["txtRut"];
$edad = $_POST["txtEdad"];
$sexo = $_POST["ddlSexo"];
$direccion = $_POST["txtDireccion"];
$ciudad = $_POST["txtCiudad"];
$fono = $_POST["txtFono"];
$movil = $_POST["txtMovil"];
$estadoCivil = $_POST["ddlEstadoCivil"];
$escuelaVotacion = $_POST["txtEscuelaVotacion"];
$tipoUsuario = $_POST["ddlTipoUsuario"];
$user = $_POST["txtUser"];
$pass1 = $_POST["txtPass1"];
$pass2 = $_POST["txtPass2"];
$error = "";
$ctrl = false;
$ctrl = false;
require("validarRut.php");
if($movil == "" && $fono == "" ) 
{
	 $error = "Debe especificar al menos un telefono de contacto";
	 $ctrl = TRUE;
}
if($nombre == "" || $rut == "" || $edad == "" || $sexo == "" || $escuelaVotacion == "" || $tipoUsuario == "" || $user == "" || $pass1 == "" || $pass2 == "")
{
	$error = "debe ingresar los campos obligatorios <br>(nombre, rut, edad, sexo, local de votacion, tipo de usuario, usuario y password)";
	$ctrl = TRUE;
	
}elseif ($pass1 != $pass2) {
	$error = "los passwords no coinciden";
	$ctrl = TRUE;
}elseif ($edad < 18) {	
		$error = "El votante debe ser mayor de edad";
		$ctrl = TRUE;	
}elseif(valida_rut($rut)){
	$error = "RUT INVALIDO";
	$ctrl = TRUE;	
}elseif(is_numeric($edad)==FALSE){
	$error = "la edad debe ser numerica";
	$ctrl = TRUE;	
}elseif($movil != "" && is_numeric($movil) == false){
	$error = "el movil debe ser numerico (8 digitos)";
	$ctrl = TRUE;	
}elseif($fono != "" && is_numeric($fono) == FALSE){
	$error = "el fono debe ser numerico(7 digitos)";
	$ctrl = TRUE;
}else{
	$query1 = "SELECT usuario.RUT FROM usuario WHERE usuario.RUT = '$rut' OR usuario.Username = '$user'";
	$result1 = mysql_query($query1);
	$nresult1 = mysql_num_rows($result1);
	if ($nresult1 != 0) {
		$error = "Rut o username existentes";
		$ctrl = TRUE;
	}
}

if($ctrl == TRUE){	
	header("location: editarUsuario.php?error=$error&var=$idUser");
}elseif($ctrl == FALSE)
{
		
	$query =  "update usuario set Nombre='$nombre', RUT='$rut', Edad='$edad', Direccion='$direccion', Ciudad='$ciudad', Fono='$fono', Movil='$movil',".
			  "EstadoCivil='$estadoCivil', EscuelaVotacion='$escuelaVotacion', TipoUsuario='$tipoUsuario', Username='$user', Password='$pass1', Sexo='$sexo' where ID_Usuario='$idUser'";
	mysql_query($query);
	header("location: detalleUsuario.php?var=$idUser");
}

?>