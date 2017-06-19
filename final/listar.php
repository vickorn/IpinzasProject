<?php
    include 'conexion.php';
	$result = $mysqli->query("SELECT * FROM Usuario");
	
	while($row = $result->fetch_row()){
		do{
			echo "[$row[1]] # [$row[2]] # [$row[3]]<br>";
		}while($row = $result->fetch_array());		
	}
	
		
?>