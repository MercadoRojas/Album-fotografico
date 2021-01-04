
<?php
include ("conexion_bd.php");

$id_usuario=$_GET['id_usuario'];
$nombre=$_GET['nombre'];
$desc=$_GET['descripcion'];
echo $id_usuario;

$fecha= date("Y-m-d");  ;
$sql = "INSERT INTO album (id_usuario,nombre,descripcion,fecha_publicacion)
  VALUES ('".$id_usuario."','".$nombre."','".$desc."','".$fecha."')";


        if ($con->query($sql) === TRUE) {
			print "<script>alert(\"Agregar usuarios\");
			window.location='../vistas/agregar_albumc.php';</script>";
	
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }

