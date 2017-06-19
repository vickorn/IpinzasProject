<?php
	echo "<link rel='stylesheet' href='css/contenido.css' />";
	include 'conexion.php';
?>

<div id="general">
	<?php
		$query = "select * from noticia";
		$result = mysql_query($query);
		while ($row = mysql_fetch_row($result)){
			do{
				echo "<div class='noticia'>";
				echo "<h1>$row[1]</h1>";
				echo "<p>$row[2]</p>";
				echo "</div>";
			}while($row = mysql_fetch_array($result));
		}
	?>
</div>
			
		
		
		

