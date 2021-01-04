<?php
error_reporting(0);

$id = $_POST['id'];


$bd_host = "localhost";
$bd_nombre = "album_fotografico";
$bd_usuario = "root";
$bd_contrasena = "";
$conexion = mysqli_connect($bd_host, $bd_usuario, $bd_contrasena, $bd_nombre); //conexion con bd
if (mysqli_connect_errno()) {
    //echo "error al conectar con la base de datos";
}

$tabla_bd = "fotos";
$consulta = "Select  direccion from fotos where id_album= $id";
$eliminacion1 = "delete from $tabla_bd where id_album=$id ";
$eliminacion2 = "delete from album where id=$id ";
$resultado = mysqli_query($conexion, $consulta);
$resultado1 = mysqli_query($conexion, $eliminacion1);
$resultado2 = mysqli_query($conexion, $eliminacion2);
$fotos;
$contfotos = 0;
if ($resultado == false) {
} else {

    while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
        $fotos = $fila['direccion'];
        unlink($fotos);
        $contfotos++;
    }
    if ($resultado1 == false) {
    } else {
        echo json_encode("se realiza eliminacion de " . $eliminacion1);
        if ($resultado2 == false) {
        } else {
            echo json_encode("Se realiza eliminacion de " . $eliminacion2);
        }
    }
}


mysqli_close($conexion);
