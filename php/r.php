
<?php
include ("conexion_bd.php");

$nombre=$_GET['nombre'];
$ape_p=$_GET['ape_p'];
$ape_m=$_GET['ape_m'];
$alias=$_GET['alias'];
$correo=$_GET['correo'];
$password=$_GET['password'];


$pswhas= password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nombre,apellido_pat,apellido_mat,alias,correo,password)
  VALUES ('".$nombre."','".$ape_p."','".$ape_m."','".$alias."','".$correo."','".$pswhas."')";
 

        if ($con->query($sql) === TRUE) {
			print "<script>alert(\"Bienvenido ya eres un nuevo usuario\");window.location='../vistas/ingresar.php';</script>";
	
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }



?>