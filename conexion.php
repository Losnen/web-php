<?php
	$mysqli = new mysqli("127.0.0.1","losnen","","c9");

	$mysqli->query("SET NAMES 'utf8'");

	if(mysqli_connect_errno()) {
		echo 'Conexión Fallida: ', mysqli_connect_error();
		exit();
	}
?>