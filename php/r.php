
<?php
include ("conexion_bd.php");
$nom=$_FILES['imagen']['name'];
$img=$_FILES['imagen']['tmp_name'];

$nombre=$_POST['nombre'];
$ape_p=$_POST['ape_p'];
$ape_m=$_POST['ape_m'];
$alias=$_POST['alias'];
$correo=$_POST['correo'];
$password=$_POST['password'];


$pswhas= password_hash($password, PASSWORD_DEFAULT);
$ruta="../img";

if (!isset($nom)) {
	$ruta="../css/img/usuario.svg";
}else{
	$ruta=$ruta."/".$nom;
}

move_uploaded_file($img,$ruta);
echo "la ruta es: ".$ruta;

$sql = "INSERT INTO usuarios (nombre,apellido_pat,apellido_mat,alias,correo,password,ruta)
  VALUES ('".$nombre."','".$ape_p."','".$ape_m."','".$alias."','".$correo."','".$pswhas."','".$ruta."')";
 

        if ($con->query($sql) === TRUE) {
			print "<script>alert(\"Bienvenido ya eres un nuevo usuario\");window.location='../vistas/ingresar.php';</script>";
	
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }



?>