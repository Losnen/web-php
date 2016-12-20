<!DOCTYPE HTML>
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
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
					<h1><center>Nueva Entrada</center></h1>
						<form name="nueva_droga" method="POST" action="guarda.php">
							<table width="80%">
								<tr>
									<td width="20"><b>Nombre</b></td>
									<td width="30"><input type="text" name="nombre" size="25" /></td>
								</tr>
								<tr>
									<td><b>Clasificacion</b></td>
									<td>
										<input type="radio" name="clasificacion" value="Dura" />Dura
										<input type="radio" name="clasificacion" value="Blanda" />Blanda
									</td>
								</tr>
								<tr>
									<td><b>Tipo</b></td>
									<td>
										<input type="radio" name="tipo" value="Depresiva" />Depresiva
										<input type="radio" name="tipo" value="Alucinogena" />Alucinogena
										<input type="radio" name="tipo" value="Estimulante" />Estimulante
										<input type="radio" name="tipo" value="Opiaceo" /> Opiaceo
									</td>
								</tr>
								<tr>
									<td><b>Principio Activo</b></td>
									<td><input type="text" name="principioActivo" size="25" /></td>
								</tr>
								<tr>
									<td><b>Consumo</b></td>
									<td><input type="text" name="consumo" size="25" /></td>
								</tr>
								<tr>
									<td><b>Efectos</b></td>
									<td>
										<textarea rows="4" cols="50" name="efectos"></textarea>
									</td>
								</tr>
								<tr>
									<td colspan="2"><center><input type="submit" name="eviar" value="Añadir" /></center></td>
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