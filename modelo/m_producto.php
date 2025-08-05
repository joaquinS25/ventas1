<?php 
function ListarProductos()
{
	require("conexion.php");

	$sql="SELECT * FROM producto";
	$res = mysqli_query($con,$sql);

	$datos = array();

	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		$datos[] = $fila;
	}

	return $datos;

	mysqli_close($con);
}

function RegistrarProducto($nom_producto,$prev_producto,$prec_producto,$desc_producto)
{
	require("conexion.php");

	$sql="INSERT INTO producto() VALUES(NULL,'$nom_producto','$prev_producto','$prec_producto','$desc_producto')";
	$res = mysqli_query($con,$sql);

	if($res)
	{
		return "SI";		
	}
	else
	{
		return "NO";
	}

	mysqli_close($con);
}

function EliminarProducto($id_producto)
{
	require("conexion.php");

	$sql="DELETE FROM producto WHERE id_producto='$id_producto'";
	$res = mysqli_query($con,$sql);
	
	if($res)
	{
		return "SI";		
	}
	else
	{
		return "NO";
	}

	mysqli_close($con);

}

function ConsultarProducto($id_producto)
{
	require("conexion.php");

	$sql="SELECT * FROM producto WHERE id_producto='$id_producto'";
	$res = mysqli_query($con,$sql);

	$datos = array();

	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		$datos[] = $fila;
	}

	return $datos;

	mysqli_close($con);
}

function ActualizarProducto($id_producto,$nom_producto,$prev_producto,$prec_producto,$desc_producto)
{
	require("conexion.php");

	$sql="UPDATE producto SET
	nom_producto = '$nom_producto',
	prev_producto = '$prev_producto',
	prec_producto = '$prec_producto',
	desc_producto = '$desc_producto'
	WHERE id_producto = '$id_producto'";
	$res = mysqli_query($con,$sql);
	
	if($res)
	{
		return "SI";		
	}
	else
	{
		return "NO";
	}

	mysqli_close($con);
}
?>