<?php
	include 'conexion.php';
	$titular = $_POST['txtTitular'];
	$noticia = $_POST['txtNoticia'];
	if($titular=="" or $noticia == ""){
		header('location: generarNoticia.php');
	}else{
		$sql = "insert into noticia (titulo, noticia) values ('$titular','$noticia')";
		mysql_query($sql);
		header('location: index.php');
	}
?>