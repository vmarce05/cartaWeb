<?php
include('conexion.php');
$idTipoProducto = $_REQUEST['idTipoProducto'];
$nombre = $_REQUEST['nombre'];
$query="update TipoProductos set nombre='$nombre' where idTipoProducto = '$idTipoProducto' ";
$resultado = $conn->query($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Modificar producto</title>
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/table.css">
</head>
<body>
	<center>
		<?php
		if ($resultado>0)
			{ ?>
			<center><h1>Producto modificado</h1></center>
		<?php } else{ ?>
		<center><h2>Producto no modificado</h2></center> <?php } ?>
	</center>
	<a href="index.php"> regresar </a>
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
</body>
</html>