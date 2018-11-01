<?php
	include('conexion.php');
	$idTipoProducto = $_REQUEST['idTipoProducto'];
	$query = "select nombre from TipoProductos where idTipoProducto = $idTipoProducto";
	$resultado = $conn->query($query);
	$row= mysqli_fetch_array($resultado);
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

	<nav>
    	<div class="nav-wrapper">
      		<a href="#" class="brand-logo center">Modificar Producto</a>
      		<ul id="nav-mobile" class="left hide-on-med-and-down">
        	<li><a href="index.php"> Pagina Principal </a></li>
      		</ul>
    	</div>
  	</nav>

	
	<form name="modificar_producto" method="post" action="mod_producto.php">
		<table width="50%" border="1">
			<tr>
				<input type="hidden" name="idTipoProducto" value="<?php echo $idTipoProducto; ?>">
				<input type="text" name="nombre" size="25" value="<?php echo $row['nombre']; ?>"/>
			</tr>

			<tr>
				  <center><button class="btn waves-effect waves-light" type="submit" name="guardar">Guardar</button></center>
			</tr>
		</table>
	</form>
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