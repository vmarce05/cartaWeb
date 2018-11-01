<?php

include "conexion.php";
header("Content-Type: text/html;charset=utf-8");
$link = conectar();
if($link == null){
			echo 'Error de conexion';

		}

	$cantVars = $_REQUEST['cantVars'];
	for($i=1;$i<=$cantVars;$i++){
		$nomCliente = $_REQUEST['nomCliente'];
		$apellido = $_REQUEST['apellido'];
		$cedula = $_REQUEST['cedula'];

		$resp = mysqli_query($link, "INSERT INTO Clientes (nombreCliente, apellidoCliente, cedulaCliente) VALUES ('".$nomCliente."', '".$apellido."', '".$cedula."')");
		if($resp==false){
			echo 'Ocurrió un error mientras se guardaba el cliente';
		}

		$hora = $_REQUEST['hora'];
		$fecha = $_REQUEST['fecha'];

		$resp2 = mysqli_query($link, "INSERT INTO Factura(hora, fecha) VALUES ('$hora', '$fecha')");
		if($resp2==false){
			echo 'Error al ingresar datos a la tabla factura';
		}


		$cant = $_REQUEST['cant'.$i];
		$idProd = $_REQUEST['idProducto'.$i];
		$idCliente = '';
		$idFactura = '';

		if($resp==true && $resp2==true){
			$respClient = mysqli_query($link, "SELECT MAX(idCliente) as idCliente FROM Clientes");
			while($row = mysqli_fetch_array($respClient)){
				$idCliente = $row['idCliente'];
			}

			$respFact = mysqli_query($link, "SELECT MAX(idFactura) as idFactura FROM Factura");
			while($rowF = mysqli_fetch_array($respFact)){
				$idFactura = $rowF['idFactura'];
			}

			$respDetalle = mysqli_query($link, "INSERT INTO Detalle (cantidad, Productos_idProducto, Factura_idFactura, Clientes_idCliente) VALUES ('".$cant."', '".$idProd."', '".$idFactura."', '".$idCliente."')");
		}

		//echo 'idCliente : '.$idCliente.' --- idFactura: '.$idFactura;
		header('Location: indexCliente.html');
	}

?>