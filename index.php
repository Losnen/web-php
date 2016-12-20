<!DOCTYPE HTML>
<?php
	require('conexion.php');
	
	header("Content-Type: text/html;charset=utf-8");
	
	//Cantidad de resultados por página (debe ser INT, no string/varchar)
	$cantidad_resultados_por_pagina = 4;
	
	//Comprueba si está seteado el GET de HTTP
	if (isset($_GET["pagina"])) {
	
		//Si el GET de HTTP SÍ es una string / cadena, procede
		if (is_string($_GET["pagina"])) {
	
			//Si la string es numérica, define la variable 'pagina'
			 if (is_numeric($_GET["pagina"])) {
	
				 //Si la petición desde la paginación es la página uno
				 //en lugar de ir a 'index.php?pagina=1' se iría directamente a 'index.php'
				 if ($_GET["pagina"] == 1) {
					 header("Location: index.php");
					 die();
				 } else { //Si la petición desde la paginación no es para ir a la pagina 1, va a la que sea
					 $pagina = $_GET["pagina"];
				};
	
			 } else { //Si la string no es numérica, redirige al index (por ejemplo: index.php?pagina=AAA)
				 header("Location: index.php");
				die();
			 };
		};
	
	} else { //Si el GET de HTTP no está seteado, lleva a la primera página (puede ser cambiado al index.php o lo que sea)
		$pagina = 1;
	};
	
	//Define el número 0 para empezar a paginar multiplicado por la cantidad de resultados por página
	$empezar_desde = ($pagina-1) * $cantidad_resultados_por_pagina;
?>

<html>
	<head>
		<title>Practica</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<?php
		
			$consulta = "SELECT * FROM drogas";
	
			$resultado = $mysqli->query($consulta);
			
			//Cuenta el número total de registros
			$total_registros = mysqli_num_rows($resultado);
			
			//Obtiene el total de páginas existentes
			$total_paginas = ceil($total_registros / $cantidad_resultados_por_pagina);
			
			$consulta2 = "SELECT * FROM drogas LIMIT $cantidad_resultados_por_pagina OFFSET $empezar_desde";
			
			$consulta_resultados = $mysqli->query($consulta2);
		
		?>

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
					<h1><center>Base de Datos de drogas</center></h1>
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
								<?php while($row = $consulta_resultados->fetch_assoc()) { ?>
									<tr>
										<td><?php echo $row['Name'];?></td>
										<td><?php echo $row['Clasification'];?></td>
										<td><?php echo $row['Type'];?></td>
										<td><?php echo $row['ActiveIngredient'];?></td>
										<td><?php echo $row['Consume'];?></td>
										<td><?php echo $row['Effects'];?></td>
										<td><a href="modificar.php?id=<?php echo $row['Name'];?>" class="button">Modificar</a>
										<a href="eliminar.php?id=<?php echo $row['Name'];?>" class="button">Eliminar</a></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</section>
	
					<?php
							
							if ($total_paginas > 1) {
							   if ($pagina != 1)
							      echo '<a href="'.$url.'?pagina='.($pagina-1).'"><i class="fa fa-arrow-circle-left fa-2x"></i></a>';
							      for ($i=1;$i<=$total_paginas;$i++) {
							         if ($pagina == $i)
							            //si muestro el índice de la página actual, no coloco enlace
							            echo '<strong>'.$pagina.'</strong>';
							         else
							            //si el índice no corresponde con la página mostrada actualmente,
							            //coloco el enlace para ir a esa página
							            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
							      }
							      if ($pagina != $total_paginas)
							         echo '<a href="'.$url.'?pagina='.($pagina+1).'"><i class="fa fa-arrow-circle-right fa-2x"></i></a>';
							}
							//Crea un bucle donde $i es igual 1, y hasta que $i sea menor o igual a X, a sumar (1, 2, 3, etc.)
							//Nota: X = $total_paginas
							//for ($i=1; $i<=$total_paginas; $i++) {
								//En el bucle, muestra la paginación
								//echo "<a href='?pagina=".$i."'>".$i."</a> | ";
							//}; 
					?>

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