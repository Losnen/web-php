<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<?php
	require('conexion.php');
	
	$name = $_GET['id'];
	
	$consulta = "SELECT Name, Clasification, Type, ActiveIngredient, Consume, Effects FROM drogas WHERE Name='$name'";
	
	$resultado = $mysqli->query($consulta);
	
	$row = $resultado->fetch_assoc();
?>

<html>
	<head>
		<title>Hyperspace by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="">Modificando</a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<form name="modificar_droga" method="POST" action="mod_droga.php">
			
			<table width="60%">
				<tr>
					<input type="hidden" name="nombre" value="<?php echo $name; ?>">
					<td width="20"><b>Nombre</b></td>
					<td width="30"><?php echo $row['Name']; ?></td>
				</tr>	
				<tr>
					<td><b>Clasificación (<?php echo $row['Clasification']; ?>)</b></td>
					<td>
					
						<input type="radio" name="clasificacion" value="Dura" <?php if($row['Clasification'] == 'Dura') echo 'checked' ?>>Dura
						<input type="radio" name="clasificacion" value="Blanda" <?php if($row['Clasification'] == 'Blanda') echo 'checked'?>>Blanda
					</td>
				</tr>
				<tr>
					<td><b>Tipo (<?php echo $row['Type']; ?>)</b></td>
					<td>
					
						<input type="radio" name="tipo" value="Depresiva" <?php if($row['Type'] == 'Depresiva') echo 'checked' ?>>Depresiva
						<input type="radio" name="tipo" value="Alucinogena" <?php if($row['Type'] == 'Alucinogena') echo 'checked' ?>>Alucinogena
						<input type="radio" name="tipo" value="Estimulante" <?php if($row['Type'] == 'Estimulante') echo 'checked' ?>>Estimulante
						<input type="radio" name="tipo" value="Opiaceo" <?php if($row['Type'] == 'Opiaceo') echo 'checked' ?>> Opiaceo
					</td>
				</tr>
				<tr>
					<input type="hidden" name="principioActivo" value="<?php echo $name; ?>">
					<td width="20"><b>Principio Activo</b></td>
					<td width="30"><input type="text" name="principioActivo" size="25" value="<?php echo $row['ActiveIngredient']; ?>" /></td>
				</tr>
				<tr>
					<td width="20"><b>Consumo</b></td>
					<td width="30"><input type="text" name="consumo" size="25" value="<?php echo $row['Consume']; ?>" /></td>
				</tr>
				<tr>
					<td width="20"><b>Efectos</b></td>
					<td width="30">
					<textarea rows="4" cols="50" name="efectos"><?php echo $row['Effects']; ?></textarea>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" />
					<a href="index.php" class = "button">Cancelar</a></center></td>
				</tr>
			</table>
		</form>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>