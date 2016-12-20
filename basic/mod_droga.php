<?php
	require('conexion.php');
	
	$nombre = $_POST['nombre'];
	$clasificacion = $_POST['clasificacion'];
	$tipo = $_POST['tipo'];
	$princAct = $_POST['principioActivo'];
	$consumo = $_POST['consumo'];
	$efecto = $_POST['efectos'];
	
	$consulta = "UPDATE drogas SET Name = '$nombre', Clasification = '$clasificacion', Type = '$tipo', ActiveIngredient = '$princAct', Consume = '$consumo', Effects = '$efecto' WHERE Name = '$nombre'";
	
	$resultado = $mysqli->query($consulta);
	
?>

<html>
	<head>
		<title>Modificar</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>