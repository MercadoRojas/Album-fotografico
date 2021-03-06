<?php
// Inicializar sesión
session_start();

// Chequeo de un usuario logeado

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../vistas/index.html");
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla</title>
    <link rel="stylesheet" href="../css/header.css">

</head>

<body>
    <header>
        <div id="logo">

            <img src="../css/img/logo.png" alt="LOGO">

            <h4>Album Familiar</h4>
        </div>

        <div id="Titulo">
            <h1>Bienvenido</h1>
        </div>

        <div id="Usuario">
            <img src="../css/img/usuario.svg" alt="Foto perfil">
            <h5>Usuario: <?php echo $_SESSION["alias"]; ?></h5>
            <label for="btn_opciones"><img src="../css/img/editar.png" alt="Opciones"></label>
            <input type="checkbox" name="btn_opciones" id="btn_opciones">
            <ul id="opciones">
                <li>opcion 1</li>
                <li>opcion 2</li>
                <li>opcion 3</li>
                <li> <a href="../php/salir.php"> Salir</a> </li>

            </ul>
        </div>

        <input type="checkbox" name="btn_menu" id="btn_menu">
        <section id="menu">
            <ul>
                <li> <a class="btn btn-success" href="../vistas/agregar_album.php">Agregar Album</a></li>
                <li>opcion 2</li>
                <li>opcion 3</li>
                <li>opcion 4</li>

            </ul>
            <label for="btn_menu"><img src="../css/img/flecha.png" alt="Flecha"></label>


        </section>
    </header>



</body>

</html>