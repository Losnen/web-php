<?php
	require('conexion.php');
	
	$name = $_GET['id'];
	
	$consulta = "DELETE FROM drogas WHERE Name='$name'";
	
	$resultado = $mysqli->query($consulta);
	
	header('Location: index.php');
?>