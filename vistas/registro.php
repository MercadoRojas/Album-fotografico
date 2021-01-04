<?php
// inicializar la sesion 
session_start();
 
// Verificar sí hay un usuario logeado
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location:../vistas/index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse </title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <header style="align-content: center">
       <div id="logo">

            <img src="../css/img/logo.png" alt="LOGO">

            <h4>Album Familiar</h4>
        </div>
        <div id="Titulo"  >
            <h1>Registro</h1>
        </div>
        <div id="Titulo"  >
            </div>
    </header>
    <br><br><br><br>

<div  class="container pt-4" style="background-color:white; padding: auto">

    <form action="../php/r.php" method="GET"  class="validated">
    <div class="form-group">
      <label for="">Ingresa tu nombre</label>
      <input type="text" class="form-control" name="nombre" placeholder="Nombre(s)">
    </div>
    <div class="form-group">
      <label for="">Apellido Paterno</label>
      <input type="text"  class="form-control" name="ape_p" placeholder="Apellido Paterno">
    </div>
    <div class="form-group">
      <label for="">Apellido Materno</label>
      <input type="text"  class="form-control" name="ape_m" placeholder="Apellido Materno">
    </div>
    <div class="form-group">
      <label for="">Alias</label>
      <input type="text"  class="form-control" name="alias" placeholder="Alias">
    </div>
     <div class="form-group" >
      <label for="">Correo</label>
      <input type="email"  class="form-control" name="correo" placeholder="correo@correo.com">
    </div>
    <div class="form-group">
      <label for="">Contraseña</label>
      <input type="password"  class="form-control" name="password" placeholder="Contraseña">
    </div>

    <div class="form-group">
      <input type="submit" class="btn btn-primary" name="Agregar" >
      <br><br>
    </div>
  </div>
    </form>
</div>
</body>

</html>

