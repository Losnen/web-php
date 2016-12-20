<?php
	require('conexion.php');
	
	$consulta = "SELECT Name, Clasification, Type, ActiveIngredient, Consume, Effects FROM drogas";
	
	$resultado = $mysqli->query($consulta);
?>

<html>
	<head>
		<title></title>
	</head>
	<body>
		
		<h1>Cremita</h1>
		
		<a href="nueva.php">Nuevo Registro</a>
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
						<td><a href="modificar.php?id=<?php echo $row['Name'];?>">Modificar</a></td>
						<td><a href="eliminar.php?id=<?php echo $row['Name'];?>">Eliminar</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</body>
</html>