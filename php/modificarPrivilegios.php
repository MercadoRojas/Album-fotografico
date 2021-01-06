<?php
// Inicializar sesión
session_start();
 include ("../php/conexion_bd.php");

// Chequeo de un usuario logeado

$id=$_SESSION["id"];
$id_a=$_GET['id_album'];
$nombre=$_GET['nombre'];

//$sql1= "select * from album WHERE id=".$id_a;

$sql1= "select * from albumes_compartidos WHERE id_album=".$id_a;
$query = $con->query($sql1);




?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Colaboradores </title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mis_albumes.css">
 
</head>
<style type="text/css">
  #id_u{
    display: hidden; 

  }
</style>
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
           <li> <a href="mis_albumes.html" > Mis albumes </a></li>
                <li> <a href="agregar_album.php">Nuevo album</a> </li>
                <li> <a href="compartidos_conmigo">Compartidos conmigo</a></li><li>opcion 3</li>
                <li>opcion 4</li>
    
          </ul>
          <label for="btn_menu"><img src="../css/img/flecha.png" alt="Flecha"></label>
         
    
        </section>
    </header>
    <br><br><br><br>
<div  class="container pt-4" style=" background-color: rgb(95, 158, 160); padding: auto">
      <h2 style=" color: rgb(224, 218, 218)">Nombre de album: <?php echo $nombre?> </h2>
    <form action="../php/aacP.php" method="GET"  class="validated">
    
      <input type="text"  id="id_u" class="form-control "   name="nombre" placeholder="id" hidden="true" value="<?php echo $nombre?>">

      <input type="text" hidden="true"  id="id_u" class="form-control"  name="id_a" placeholder="id"  value="<?php echo $id_a;?>">
    <div class="form-group">

      <label style=" color: rgb(224, 218, 218)">Ingresa alias de usuario</label>
      <input type="text" class="form-control" name="alias" placeholder="alias">
   
      <input type="submit" class="btn btn-primary" name="Agregar Colaborador" >
      <br><br>
    </div>
 
</form>


  <table class="table table-bordered text-white">
    <tr>
    <th>Usuario</th>
    <th>Privilegios</th>
    <th>Eliminar</th>
    <th>Agregar Privilegios</th>
    </tr>
     <?php while ($r=$query->fetch_array()):?>
      <tr>
        <td>
          <?php $identif=$r['id_usuario'];

 

                $sqlu= "SELECT * FROM usuarios WHERE id ='".$identif."'";



                  $resultado= mysqli_query($con,$sqlu);
                  $fila=mysqli_fetch_array($resultado);



                if (!($fila['alias'])) {
                  echo "no se encontro usuario";
                }else{
                echo $fila['alias'];



                }

          ?>
        </td>
          <td>
          <?php 

          if ($r['permisos']==3) {
          echo "Todos los privilegios";  
          }elseif ($r['permisos']==2) {
            echo "Eliminar Fotos";
          }else{
            echo "Agregar fotos";
          
          }
         ?>
        </td>
        
        <td>
       <a href="../php/eliminarColaborador.php?id=<?php echo $r['id_usuario']."&id_a=".$id_a."&nombre=".$nombre;?>" class="btn btn-danger" title="Eliminar" data-toggle="tooltip">Eliminar</a>

        </td>
        <td>
           <a href="../php/privilegiosC.php?id_u=<?php echo $r['id_usuario']."&permisos=1&id_a=".$id_a."&nombre=".$nombre;?>" class="btn btn-success" title="agregarFoto" data-toggle="tooltip">Agregar Fotos</a>

            <a href="../php/privilegiosC.php?id_u=<?php echo $r['id_usuario']."&permisos=2&id_a=".$id_a."&nombre=".$nombre;?>" class="btn btn-danger" title="EliminarFoto" data-toggle="tooltip">Eliminar Fotos</a>

             <a href="../php/privilegiosC.php?id_u=<?php echo $r['id_usuario']."&permisos=3&id_a=".$id_a."&nombre=".$nombre;?>" class="btn btn-primary" title="TodosPriv" data-toggle="tooltip">Todos los privilegios</a>

        </td>
      </tr>
      <?php  endwhile;?>
  </table>
 <br><br>
</div>

</body>

</html>

