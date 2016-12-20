<?php
	require('conexion.php');
	
	$name = $_GET['id'];
	
	$consulta = "SELECT Name, Clasification, Type, ActiveIngredient, Consume, Effects FROM drogas WHERE Name='$name'";
	
	$resultado = $mysqli->query($consulta);
	
	$row = $resultado->fetch_assoc();
?>

<html>
	<head>
		<title>Drogas</title>
	</head>
	<body>
		
		<center><h1>Modificar Droga</h1></center>
		
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
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>	