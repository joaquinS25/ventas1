<?php 
function ListarUsuarios()
{
	require("conexion.php");


	$sql="SELECT * FROM usuario";
	$res = mysqli_query($con,$sql);


	$datos = array();


	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		$datos[] = $fila;
	}


	return $datos;


	mysqli_close($con);
}


function RegistrarUsuario($nom,$ape,$dni,$cel,$email,$dir,$usu,$pass,$est,$ruta_destino)
{
	require("conexion.php");


	$sql="INSERT INTO usuario() VALUES(NULL,'$nom','$ape','$dni','$cel','$email','$dir','$usu','$pass','$ruta_destino','$est')";
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


function EliminarUsuario($id_usuario)
{
	require("conexion.php");


	$sql="DELETE FROM usuario WHERE id_usuario='$id_usuario'";
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


function ConsultarUsuario($id_usuario)
{
	require("conexion.php");


	$sql="SELECT * FROM usuario WHERE id_usuario='$id_usuario'";
	$res = mysqli_query($con,$sql);


	$datos = array();


	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		$datos[] = $fila;
	}


	return $datos;


	mysqli_close($con);
}


function ActualizarUsuario($id_usuario,$nom,$ape,$dni,$cel,$email,$dir,$usu,$pass,$est,$ruta_destino)
{
	require("conexion.php");


	$sql="UPDATE usuario SET
	nom_usuario = '$nom',
	ape_usuario = '$ape',
	dni_usuario = '$dni',
	cel_usuario = '$cel',
	email_usuario = '$email',
	dir_usuario =  '$dir', 
	user_usuario =  '$usu', 
	pass_usuario =  '$pass', 
	foto_usuario = '$ruta_destino',
	est_usuario =  '$est'
	WHERE id_usuario = '$id_usuario'";
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


function ValidarUsuario($user,$pass)
{
	require("conexion.php");


	$sql="SELECT * FROM usuario 
	WHERE user_usuario = '$user' 
	AND pass_usuario = '$pass'
	AND est_usuario =  1";
	$res = mysqli_query($con,$sql);


	$datos = array();


	while ($fila = mysqli_fetch_array($res,MYSQLI_ASSOC)) 
	{
		$datos[] = $fila;
	}


	return $datos;


	mysqli_close($con);
}
?>
