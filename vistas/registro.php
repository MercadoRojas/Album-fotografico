<?php
// inicializar la sesion 
session_start();
 
// Verificar sí hay un usuario logeado
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location:../vistas/mis_albumes.html");
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

 <div class="formulario_reg" >

        <div class="inicio">
          <h2>Registra tus datos   </h2>
       </div>
    <div class="container pt-4" style="  ">

    <form action="../php/r.php" method="POST" enctype="multipart/form-data"  class="validated">
     <div class="botones">
      <img id="imagenPrevisualizacion" width="200" height="100">
              <br><br>
              <input type="file" name="imagen" id="seleccionArchivos" required>
              <script src="../js/prevImg.js"></script>
    </div>
    <table  width="700px" >
      <tr>
        <td><label for="">Apellido Paterno:</label></td>
        <td><input type="text"  class="form-control" name="ape_p" placeholder="Apellido Paterno" required></td>
       </tr>
       <tr>
        <td><label for="">Apellido Materno:</label></td>
        <td><input type="text"  class="form-control" name="ape_m" placeholder="Apellido Materno" required></td>
        
       </tr>
       <tr>
      <td><label for="">Ingresa tu nombre:</label></td>
      <td><input type="text" class="form-control  " name="nombre" placeholder="Nombre(s)" required>   </td>
       </tr>
      <tr>
        <td><label for="">Alias:</label></td>
      <td><input type="text"  class="form-control" name="alias" placeholder="Alias" required> </td>
      </tr>
      <tr>
      <td><label for="">Correo:</label></td>
      <td><input type="email"  class="form-control" name="correo" placeholder="correo@correo.com" required>  </td>
      </tr>
      <tr>
          <td><label for="">Contraseña:</label></td>
        <td><input type="password"  class="form-control" name="password" placeholder="Contraseña" required></td>
      </tr>
            
    </table>

    <div  class="botones">
      <input type="submit" class="btn btn-primary btn-lg" value="Registrarme" >
       <a class="btn btn-danger btn-lg" href="../vistas/ingresar.php">Cancelar</a>
      <br><br>
    </div>
  </div>
    </form>
</div>
</div>
</body>

</html>

