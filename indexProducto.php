<?php
include('conexion.php');
$idCatProducto = $_REQUEST['idCatProducto'];
$query="select idProducto,nombre,descripcion,precio from Productos where Productos.CatProductos_idCatProducto = $idCatProducto";
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
      <a href="#" class="brand-logo center">Productos creados</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="index.php">Pagina principal </a></li>
        <li><a href="indexCategoria.php">Categorias Creadas </a></li>
        
      </ul>
    </div>
  </nav> <p></p>

	

	
	<p></p>
	<table border="1" width="80%">
	<thead>
		<tr>
			<td><b>Nombre Productos</b></td>
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
						<a href="modificarProducto.php?idProducto=<?php echo $row['idProducto'];?>"> Modificar </a>
					</td>

					<td>
						<a href="eliminarProducto.php?idProducto=<?php echo $row['idProducto'];?>"> Eliminar </a>
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