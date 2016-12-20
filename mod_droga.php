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
	
	header('Location: index.php');
?>