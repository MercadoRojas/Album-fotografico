<?php
// Inicializar sesión
session_start();
 
// Chequeo de un usuario logeado

$id=$_SESSION["id"];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Album </title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
     <header>
        <div id="logo">

            <img src="../css/img/logo.png" alt="LOGO">

            <h4>Album Familiar</h4>
        </div>

        <div id="Titulo">
            <h1>Crear Album</h1>
        </div>

        <div id="Usuario">
            <img src="../css/img/usuario.svg" alt="Foto perfil">
            <h5>Usuario: <?php echo $_SESSION["alias"]; ?></h5>
            <label for="btn_opciones"><img src="../css/img/editar.png" alt="Opciones"></label>
            <input type="checkbox" name="btn_opciones" id="btn_opciones">
            <ul id="opciones">
                 <li><a href="../php/perfil.php"> Perfil</a></li>
                <li> <a href="../php/salir.php"> Salir</a> </li>
       
       
              </ul>
        </div>

        <input type="checkbox" name="btn_menu" id="btn_menu">
        <section id="menu">
          <ul>
                <li> <a href="mis_albumes.html" >Mis albumes </a></li>
                <li> <a href="agregar_album.php">Nuevo album</a> </li>
                <li> <a href="compartidos_conmigo">Compartidos conmigo</a></li>
                <li>opcion 3</li>
                <li>opcion 4</li>
          </ul>
          <label for="btn_menu"><img src="../css/img/flecha.png" alt="Flecha"></label>
         
    
        </section>
    </header>
    <br><br><br><br>

<div class="formulario" >

    <div class="container pt-4" style=" background-color: rgb(95, 158, 160); padding: auto";>

    <form action="../php/aa.php" method="GET"  class="validated">
    
    <input type="text" hidden="true" id="id_u" class="form-control"  name="id_usuario" placeholder="id" value="<?php echo $id;?>">
    <div class="form-group">

      <label for="">Ingresa nombre para el album</label>
      <input type="text" class="form-control" name="nombre" placeholder="Nombre">
    </div>
    <div class="form-group">
      <label for="">Descripción</label>
      <input type="text-area"  class="form-control" name="descripcion" placeholder="Descripcion">
    </div>
      

    <div class="form-group">
      <input type="submit" class="btn btn-primary" value="Crear" >
      <br><br>
    </div>
  </div>
    </form>
</div>
</div>
</body>

</html>

