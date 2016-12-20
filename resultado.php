<?php
	require('conexion.php');
	
	$nombre = $_POST['nombre'];
	
	$consulta = "SELECT * FROM drogas WHERE Name = '$nombre'";
	
	$resultado = $mysqli->query($consulta);
	
?>

<html>
	<head>
		<title>Practica</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="index.php">Tabla</a></li>
							<li><a href="nueva.php">Añadir</a></li>
							<li><a href="buscar.php">Buscar</a></li>
							<li><a href="#">About</a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
					<h1><center>Resultado</center></h1>
						<table border=1 width="80%">
							<thead>
								<tr>
									<td><b>Nombre</b></td>
									<td><b>Clasificación</b></td>
									<td><b>Tipo</b></td>
									<td><b>Principio Activo</b></td>
									<td><b>Consumo</b></td>
									<td><b>Efectos</b></td>
								</tr>
							</thead>
							<tbody>
								<?php while($row = $resultado->fetch_assoc()) { ?>
									<tr>
										<td><?php echo $row['Name'];?></td>
										<td><?php echo $row['Clasification'];?></td>
										<td><?php echo $row['Type'];?></td>
										<td><?php echo $row['ActiveIngredient'];?></td>
										<td><?php echo $row['Consume'];?></td>
										<td><?php echo $row['Effects'];?></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
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