<?php 

function ObtenerDetalleVenta($id_venta) {
    require("conexion.php");

    $sql = "SELECT vd.*, 
                   p.nom_producto, 
                   v.id_venta, 
                   mp.nom_mediopago, 
                   tc.nom_tipocomprobante
            FROM ventadetalle vd
            INNER JOIN producto p ON vd.id_producto = p.id_producto
            INNER JOIN venta v ON vd.id_venta = v.id_venta
            INNER JOIN mediopago mp ON v.id_mediopago = mp.id_mediopago
            INNER JOIN tipocomprobante tc ON v.id_tipocomprobante = tc.id_tipocomprobante
            WHERE vd.id_venta = '$id_venta'";

    $res = mysqli_query($con, $sql);

    $datos = array();
    while ($fila = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
        $datos[] = $fila;
    }

    mysqli_close($con);
    return $datos;
}

function ListarVentas()
{
	require("conexion.php");

	$sql="SELECT * FROM venta v
	INNER JOIN usuario u ON v.id_usuario = u.id_usuario
	INNER JOIN cliente c ON v.id_cliente = c.id_cliente
	INNER JOIN mediopago mp ON v.id_mediopago = mp.id_mediopago
	INNER JOIN tipocomprobante tc ON v.id_tipocomprobante = tc.id_tipocomprobante";
	$res = mysqli_query($con,$sql);

	$datos = array();

	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		$datos[] = $fila;
	}

	return $datos;

	mysqli_close($con);
}

function RegistrarVenta($id_usuario,$id_cliente,$id_mp,$id_tc)
{
	require("conexion.php");

	$sql="INSERT INTO venta() VALUES(NULL,'$id_usuario','$id_cliente','$id_mp','$id_tc',NOW(),1)";
	$res = mysqli_query($con,$sql);

	if($res)
	{
		$id_venta = mysqli_insert_id($con);
		return $id_venta;		
	}
	else
	{
		return "NO";
	}

	mysqli_close($con);
}

function RegistrarVentadetalle($id_venta,$id_producto,$precio,$cantidad,$total)
{
	require("conexion.php");

	$sql="INSERT INTO ventadetalle() VALUES(NULL,'$id_venta','$id_producto','$precio','$cantidad','$total',1)";
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


function AnularVenta($id_venta)
{
	require("conexion.php");

	$sql="UPDATE venta
	SET est_venta = 0
	WHERE id_venta = '$id_venta'";
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

function ConsultarVenta($id_venta)
{
	require("conexion.php");

	$sql="SELECT * FROM venta v
	INNER JOIN usuario u ON v.id_usuario = u.id_usuario
	INNER JOIN cliente c ON v.id_cliente = c.id_cliente
	INNER JOIN mediopago mp ON v.id_mediopago = mp.id_mediopago
	INNER JOIN tipocomprobante tc ON v.id_tipocomprobante = tc.id_tipocomprobante
	WHERE id_venta='$id_venta'";
	$res = mysqli_query($con,$sql);

	$datos = array();

	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		$datos[] = $fila;
	}

	return $datos;

	mysqli_close($con);
}

//Arrays
function agregarAlCarrito($id_producto,$nom_producto,$prev_producto,$cant,$total)
{
	// Si el carrito no existe, crearlo
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }


	// Verificar si el producto ya está en el carrito
    $productoExistente = false;
    foreach ($_SESSION['carrito'] as &$producto) {
        if ($producto['id'] == $id_producto) {
            $producto['cantidad'] += $cant;
			$producto['total'] += $total;
            $productoExistente = true;
            break;
        }
    }

	// Si el producto no está en el carrito, agregarlo
    if (!$productoExistente) {
        $nuevoProducto = array(
            'id' => $id_producto,
            'nombre' => $nom_producto,
            'precio' => $prev_producto,
            'cantidad' => $cant,
			'total' => $total
        );
        $_SESSION['carrito'][] = $nuevoProducto;
    }


}

function eliminarDelCarrito($id_producto)
{
	if (isset($_SESSION['carrito'])) {
        foreach ($_SESSION['carrito'] as $clave => $producto) {
            if ($producto['id'] == $id_producto) {
                unset($_SESSION['carrito'][$clave]);
                break;
            }
        }
    }
}

function vaciarCarrito()
{
	unset($_SESSION['carrito']);
}

?>