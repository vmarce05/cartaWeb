<?php
include('conexion.php');
$query = "select CatProductos.idCatProducto, CatProductos.nombreCategoria, CatProductos.TipoProductos_idTipoProducto, TipoProductos.idTipoProducto from (CatProductos left join TipoProductos on CatProductos.TipoProductos_idTipoProducto = TipoProductos.idTipoProducto )";
$resultado = $conn->query($query);
$idTipoProducto = $_REQUEST['idTipoProducto'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Crear Categoria</title>
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/table.css">
</head>
<body>

<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">Nueva Categoria</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="index.php">Pagina principal </a></li>
      </ul>
    </div>
  </nav> 


  <?php
  	printf("<html>
  		<form name=\"nueva_categoria\" method=\"post\" action=\"guardarCategoria.php?idTipoProducto=$idTipoProducto\">
		<div>
			<input type=\"text\"  placeholder=\"Nombre de la categoria\" name=\"nombre\"/>
			<center><button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"guardar\">Guardar</button></center>
		</div>
	</form>
  		</html>");
  ?>
	
	



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