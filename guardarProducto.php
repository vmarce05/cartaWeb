<?php
$nombre=$_REQUEST['nombre'];
$dir_destino = 'img-productos/';
$imagen_subida = $dir_destino.basename($_FILES['foto']['name']);
$descripcion=$_REQUEST['descripcion'];
$precio=$_REQUEST['precio'];
$idTipo = $_REQUEST['idCatProducto'];
$mi_usuario='root';
$mi_password='';

//$dir_destino = 'img/';
//$imagen_subida = $dir_destino . basename($_FILES['foto']['name']);

//Variables del metodo POST
//$codigo=$_POST['codigo'];
//$descripcion=$_POST['descripcion'];

if(!is_writable($dir_destino)){
	echo "no tiene permisos";
}else{
	if(is_uploaded_file($_FILES['foto']['tmp_name'])){
		echo "Archivo ". $_FILES['foto']['name'] ." subido con éxito.\n";
		echo "Mostrar contenido\n";
		echo $imagen_subida;
		if (move_uploaded_file($_FILES['foto']['tmp_name'], $imagen_subida)) {
			$link = mysqli_connect('localhost', $mi_usuario, $mi_password)
				or die('Uyy!!!: ' . mysql_error());
			mysqli_select_db( $link, 'CartaWeb') or die('No pudo selecionar la BD');
			//Creamos nuestra consulta sql
			$query="insert into Productos(nombre,foto,descripcion,precio,CatProductos_idCatProducto) values('$nombre','$imagen_subida','$descripcion','$precio','$idTipo')";
			//Ejecutamos la consutla
			mysqli_query($link, $query) or die('Error al procesar consulta: ' . mysql_error());

			echo "El archivo es fue cargado exitosamente.\n";

			echo "<p>$descripcion</p>";
			echo "<img src='http://localhost/proyectoWeb/imagenes/". basename($imagen_subida) ."' />";
		} else {
			echo "Posible ataque de carga de archivos!\n";
		}
	}else{
		echo "Posible ataque del archivo subido: ";
		echo "nombre del archivo '". $_FILES['archivo_usuario']['tmp_name'] . "'.";
	}
}



?>





<!DOCTYPE html>
<html>
<head>
	<title>Guardar Producto</title>
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/table.css">
</head>
<body>
	<nav>
    	<div class="nav-wrapper">
      		<a href="#" class="brand-logo center">Nuevo producto</a>
      		<ul id="nav-mobile" class="left hide-on-med-and-down">
      		<li><a href="index.php"> Pagina Principal </a></li>
      		<li><a href="indexCategoria.php"> Categorias Creadas </a></li>
        	
      		</ul>
    	</div>
  	</nav>

  	

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