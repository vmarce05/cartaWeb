<?php
include('conexion.php');
$nombre=$_REQUEST['nombre'];
$idTipo = $_REQUEST['idTipoProducto'];
$query = "insert into CatProductos(nombreCategoria, TipoProductos_idTipoProducto) values ('$nombre', '$idTipo')";
$resultado = $conn->query($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Guardar Categoria</title>
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
      		<li><a href="index.php"> Pagina Principal </a></li>
      		<li><a href="indexCategoria.php"> Categorias Creadas </a></li>
        	
      		</ul>
    	</div>
  	</nav>

	<center>
		<?php
			if($resultado>0)
			{ ?>
				<h1>Categoria creada</h1>
			<?php }else { ?>
				<h2>Categoria no creada</h2>
				<?php } ?>

				<p></p>

	</center>





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