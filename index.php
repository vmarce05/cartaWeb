<?php
include('conexion.php');
$query="select idTipoProducto,nombre from TipoProductos";
$resultado = $conn->query($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	    <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/table.css">

</head>
<body>

	<nav>
    	<div class="nav-wrapper">
      		<a href="#" class="brand-logo center">Bienvenido Administrador</a>
      		<ul id="nav-mobile" class="left hide-on-med-and-down">
        	<li><a href="crearTipoProducto.php"> Crear nuevo tipo Producto </a></li>
      		</ul>
    	</div>
  	</nav> <p></p>


	<p></p>
	<table border="1" width="100%">
	<thead>
		<tr>
			<td><b>Nombre Producto</b></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

		<tbody>
			<?php while ($row=mysqli_fetch_array($resultado)){ ?>
				<tr>
					<td>
						<?php echo $row['nombre'];?>
					</td>

					<td>
						<a href="crearCategoria.php?idTipoProducto=<?php echo $row['idTipoProducto'];?>"> Crear Categoria </a>
					</td>

					<td>
						<a href="indexCategoria.php?idTipoProducto=<?php echo $row['idTipoProducto'];?>"> Ver Categoria </a>
					</td>

					<td>
						<a href="modificarTipoProducto.php?idTipoProducto=<?php echo $row['idTipoProducto'];?>"> Modificar Producto </a>
					</td>

					<td>
						<a href="eliminarTipoProducto.php?idTipoProducto=<?php echo $row['idTipoProducto'];?>"> Eliminar Producto </a>
					</td>
				</tr>
			<?php } ?> 
		</tbody>
	</table>


<p></p>
	<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Realizado por</h5>
                <p class="grey-text text-lighten-4">Dario Andres Peña Quintero</p>
                <p class="grey-text text-lighten-4">Michel Chilito Sandoval</p>
              </div>
              
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            18 de Noviembre del 2016 - Diseño Web
            
            </div>
          </div>
        </footer>



<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
          
</body>
</html>