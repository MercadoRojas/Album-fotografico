
<?php
include ("conexion_bd.php");

$id_usuario=$_GET['id_usuario'];
$nombre=$_GET['nombre'];
$desc=$_GET['descripcion'];
echo $id_usuario;

$fecha= date("Y-m-d");  
$sql = "INSERT INTO album (id_usuario,nombre,descripcion,fecha_publicacion)
  VALUES ('".$id_usuario."','".$nombre."','".$desc."','".$fecha."')";


  if ($con->query($sql) === TRUE) {

		$sql= "SELECT nombre,id FROM album WHERE nombre ='".$nombre."'";

		$resultado= mysqli_query($con,$sql);
		$fila=mysqli_fetch_array($resultado);

			if (!($fila['id'])) {
				echo "no se encontro album";
			}else{
				echo $fila['id'];

			print "<script>alert(\"Agregar usuarios\");";
			header("location:../vistas/agregar_albumc.php?nombre=".$nombre."&id_album=".$fila['id']);
  

			
		}
	
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }

?>