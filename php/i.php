<?php
include ("conexion_bd.php");
$usuario= $_GET['correo'];
$password=$_GET['password'];

if (isset($usuario)) {
 
	
	session_start();
 
	$sql= "SELECT * FROM usuarios WHERE correo ='".$usuario."'";

	$resultado= mysqli_query($con,$sql);
	$fila=mysqli_fetch_array($resultado);
 
 
	if (password_verify($password,$fila['password'])){
 
		$_SESSION['id']=$fila['id'];
		$_SESSION['alias']=$fila['alias'];
		$_SESSION["loggedin"] = true;
		
		header("location:../vistas/index.php");
	}
	else{
		header("location:../vistas/ingresar.php");
	}
}
else{
	header("location:../vistas/ingresar.php");
}
?>