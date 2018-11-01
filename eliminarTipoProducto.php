<?php
	include('conexion.php');
	$idTipoProducto = $_REQUEST['idTipoProducto'];
	$query="delete from TipoProductos where idTipoProducto='$idTipoProducto' ";
	$resultado = $conn->query($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Eliminar producto</title>
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/table.css">
</head>
<body>

<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">Eliminar Producto</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="index.php">Pagina principal </a></li>
      </ul>
    </div>
  </nav> 
</head>
<body>
	<center>
		<?php
		if ($resultado>0)
			{ ?>
			<center><h1>Producto eliminado</h1></center>
		<?php } else{ ?>
		<center><h2>Producto no eliminado</h2></center> <?php } ?>
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
