<?php
include('conexion.php');
$query = "select Productos.idProducto, Productos.nombre, Productos.foto, Productos.descripcion, Productos.precio, Productos.categoria, CatProductos.idCatProducto from (Productos left join CatProductos on Productos.idProducto = CatProductos.idCatProducto";
$resultado = $conn->query($query);
$idCatProducto = $_REQUEST['idCatProducto'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Crear Producto</title>
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/table.css">

</head>


<body>

	<nav>
    	<div class="nav-wrapper">
      		<a href="#" class="brand-logo center">Nuevo Producto</a>
      		<ul id="nav-mobile" class="left hide-on-med-and-down">
      		<li><a href="index.php"> Pagina Principal </a></li>
        	<li><a href="indexCategoria.php"> Categorias Creadas </a></li>
      		</ul>
    	</div>
  	</nav>

	<?php

	printf("<html>
			<form name=\"nuevo_producto\" method=\"post\" enctype=\"multipart/form-data\" action=\"guardarProducto.php?idCatProducto=$idCatProducto\">
	
				<div>
					<label>Nombre Producto: </label><input type=\"text\" name=\"nombre\"/> <br>
					<label>Descripcion Producto: </label><input type=\"text\" name=\"descripcion\"/> <br>
					<label>Imagen Producto: </label><input id=\"file_url\" type=\"file\" name=\"foto\"/> <br> <br>
					<label>Precio: </label><input type=\"text\" name=\"precio\"> <br>
					<center><button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"guardar\">Guardar</button></center><br>
				</div>
			</form>
			</html>");
	?>

	</form>

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