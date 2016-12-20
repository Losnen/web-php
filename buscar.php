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
					<h1><center>Busqueda</center></h1>
						<form name="buscar_nombre" method="POST" action="resultado.php">
							<table width="80%">
								<tr>
									<td width="20"><b>Nombre</b></td>
									<td width="30"><input type="text" name="nombre" size="25" /></td>
								</tr>
							</table>
							<center><input type="submit" name="buscar" value="buscar" /></center>
						</form>
					</section>
			</div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>