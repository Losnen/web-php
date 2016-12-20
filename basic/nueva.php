<html>
	<head>
		<title>Droga</title>
	</head>
	<body>
		
		<center><h1>Añadir Droga</h1></center>
		
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
	</body>
</html>		