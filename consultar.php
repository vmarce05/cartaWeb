<?php
	
	include "conexion.php";

	header("Content-Type: text/html;charset=utf-8");

	
		$link = conectar();
		if($link == null){
			echo 'Error de conexion';

		}
		$result = mysqli_query($link, 'SELECT * FROM TipoProductos');
	
		if($result === FALSE) { 
    die(mysqli_error($link)); // TODO: better error handling
}
		
		$datos = array();// variable para generar la estructura del json
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			$idTipo = $row['idTipoProducto'];
			$categorias = mysqli_query($link,'SELECT * FROM CatProductos WHERE CatProductos.TipoProductos_idTipoProducto = '.$idTipo);
			$datosCat = array(); //crea array para almacenar las categorias de cada tipo de producto
			//while para obtener las categorias de cada tipo de producto
			while($rowP = mysqli_fetch_array($categorias, MYSQLI_ASSOC)){
				$idCat = $rowP['idCatProducto'];
				$nombreCat = $rowP['nombreCategoria'];

				$resultProductos = mysqli_query($link,'SELECT * FROM Productos WHERE CatProductos_idCatProducto = '.$idCat);
				$productos = array();
				//WHILE PARA OBTENER LOS PRODUCTOS DE CATA CATEGORIA
				while($prod = mysqli_fetch_array($resultProductos, MYSQLI_ASSOC)){
					$idProducto = $prod['idProducto'];
					$nombreProd = $prod['nombre'];
					$foto = $prod["foto"];
					$desc = $prod['descripcion'];
					$precio = $prod['precio'];
					$productos[] = array('idProducto'=>$idProducto, 'nombreProducto'=>$nombreProd, 'foto'=>$foto, 'descripcion'=>$desc, 'precio'=>$precio);
				}
				
				


				$datosCat[] = array('idCat'=>$idCat, 'nombreCat'=>$nombreCat, 'productos'=>$productos);
			}
			//echo json_encode($datosCat);
			
			$tipoProd = $row['nombre'];
			
			$datos[] = array('idTipoP'=>$idTipo, 'nombre'=>$tipoProd, 'categorias'=>$datosCat);
		}
		mysqli_close($link);
		$json = json_encode($datos);
		echo $json;


?>