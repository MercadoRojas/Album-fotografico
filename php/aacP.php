
<?php
include ("conexion_bd.php");
session_start();
$id_a=$_GET['id_a'];
$nombre=$_GET['nombre'];
$b_alias=$_GET['alias'];
if ($b_alias==$_SESSION['alias']) {
  header("location:../php/modificarPrivilegios.php?nombre=".$nombre."&id_album=".$id_a);
}
$sql= "SELECT * FROM usuarios WHERE alias ='".$b_alias."'";

	$resultado= mysqli_query($con,$sql);
	$fila=mysqli_fetch_array($resultado);

if (!($fila['id'])) {
	echo "no se encontro usuario";
}else{


$sql = "INSERT INTO albumes_compartidos (id_usuario,id_album,permisos)
  VALUES ('".$fila['id']."','".$id_a."',1)";


  if ($con->query($sql) === TRUE) {

		print "<script>alert(\"Usuarios Agregado\");</script>";
		header("location:../php/modificarPrivilegios.php?nombre=".$nombre."&id_album=".$id_a);
  

			
		
	
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
}
?>