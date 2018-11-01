<?php
include('conexion.php');

$query="select CatProductos.idCatProducto,CatProductos.nombreCategoria,CatProductos.TipoProductos_idTipoProducto,TipoProductos.idTipoProducto from (CatProductos left join TipoProductos on TipoProductos.idTipoProducto = CatProductos.TipoProductos_idTipoProducto) where TipoProductos.idTipoProducto = CatProductos.TipoProductos_idTipoProducto ";
//where tipoProductos.idTipoProducto = catProductos.idCatProducto 
$resultado = $conn->query($query);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	    <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/table.css">
</head>
<body>
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">Categorias creadas</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="index.php">Pagina principal </a></li>
        <li><a href="crearCategoria.php"> Crear categoria </a></li>
      </ul>
    </div>
  </nav> <p></p>

	

	
	<p></p>
	<table border="1" width="80%">
	<thead>
		<tr>
			<td><b>Nombre Categoria</b></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			
		</tr>

		<tbody>
			<?php while ($row=mysqli_fetch_array($resultado)){ ?>
				<tr>
					<td>
						<?php echo $row['nombreCategoria'];?>
					</td>

					<td>
						<a href="crearProducto.php?idCatProducto=<?php echo $row['idCatProducto'];?>"> Crear Producto </a>
					</td>

					<td>
						<a href="indexProducto.php?idCatProducto=<?php echo $row['idCatProducto'];?>"> Ver Producto </a>
					</td>


					<td>
						<a href="modificarCategoria.php?idCatProducto=<?php echo $row['idCatProducto'];?>"> Modificar </a>
					</td>

					<td>
						<a href="eliminarCategoria.php?idCatProducto=<?php echo $row['idCatProducto'];?>"> Eliminar </a>
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