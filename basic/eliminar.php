<?php
	require('conexion.php');
	
	$name = $_GET['id'];
	
	$consulta = "DELETE FROM drogas WHERE Name='$name'";
	
	$resultado = $mysqli->query($consulta);
?>

<html>
	<head>
		<title>Eliminar</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Eliminado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Eliminar</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>