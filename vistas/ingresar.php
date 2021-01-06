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
    <title>Ingresar </title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="../css/mis_albumes.css">

</head>

<body>
    <header style="align-content: center">
       <div id="logo">

            <img src="../css/img/logo.png" alt="LOGO">

            <h4>Album Familiar</h4>
        </div>
        <div id="Titulo"  >
            <h1>Ingresar</h1>
        </div>
        <div id="Titulo"  >
            </div>
    </header>
    <br><br><br><br>

    <div class="formulario " >
        <div class="inicio">
          <h2> Iniciar Sesión </h2>
       </div>
    <div class="container pt-4" style="padding: auto";>
       
      
    <form action="../php/i.php" method="GET"   class="validated">
   
     <div class="form-group" >
      <label for="">Correo:</label>
      <input type="email"  class="form-control" name="correo" placeholder="correo@correo.com" required>
    </div>
    <div class="form-group">
      <label for="">Contraseña:</label>
      <input type="password"  class="form-control" name="password" placeholder="Contraseña" required>
    </div>

    <div class="botones">
      <input type="submit" class="btn btn-primary btn-lg" name="Ingresar" value="Ingresar">

    </div>

    <div class="botones">
        ¿no tiene cuenta?
        <a  href="../vistas/registro.php">Registrarse</a>
    </div>
    </form>
     
</div>      
    </div>

</body>

</html>

