<?php
	require('conexion.php');
	
	$nombre = $_POST['nombre'];
	$clasificacion = $_POST['clasificacion'];
	$tipo = $_POST['tipo'];
	$princAct = $_POST['principioActivo'];
	$consumo = $_POST['consumo'];
	$efecto = $_POST['efectos'];
	
	$consulta = "INSERT INTO drogas(Name, Clasification, Type, ActiveIngredient, Consume, Effects) VALUES ('$nombre', '$clasificacion', '$tipo', '$princAct', '$consumo', '$efecto')";
	
	$resultado = $mysqli->query($consulta);
	
	header('Location: index.php');
?>

<!--html>
	<head>
		<title>Guardar usuario</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>Inserción Satisfactoria</h1>
				<?php }else{ ?>
				<h1>Error en la inserción</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="index.php">Volver</a>
			
		</center>
	</body>
</html-->	