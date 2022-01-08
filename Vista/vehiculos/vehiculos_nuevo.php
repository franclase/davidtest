<?php
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $data['titulo'];?></title>
</head>
<body>
	<h2><?php echo $data['titulo'];?></h2>

	<form id="nuevo" name="nuevo" method="POST" action="index.php?c=vehiculos&a=guarda" autocomplete="off">

		Placa: <input type="text" id="placa" name="placa" /><br> Marca: <input
			type="text" id="marca" name="marca" /><br> Modelo: <input type="text"
			id="modelo" name="modelo" /><br> Anio: <input type="text" id="anio"
			name="anio" /><br> Color: <input type="text" id="color" name="color" /><br><br>

		<button id="guardar" name="guardar" type="submit">Guardar</button>
	</form>

</body>
</html>