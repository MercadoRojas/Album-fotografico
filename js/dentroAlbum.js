window.onload=function (e) {
    var usuario=document.querySelector("#Usuario h5");//recuperando elemento de html
    fetch("../php/recupera_usuario.php")//recuperando el usuario de la sesion 
    .then(respuesta => respuesta.json())
    .then(function(datosRespuesta) {
        var alias=datosRespuesta;
    usuario.innerHTML=alias;//agregando texto al elemento html
    });

    var reg = new RegExp( '[?&]' + "id_album" + '=([^&#]*)', 'i' );
    var string = reg.exec(window.location.href);
    var id_album=string ? string[1] : undefined;

    var agregarFotos=document.querySelector("#menu li:nth-child(2) a");
       agregarFotos.setAttribute("href","agregarFotos.html?id_album="+id_album);

    fetch("../php/recuperaNombreAlbum.php",{
        method: 'POST',
        headers:{
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({idAlbum:id_album})  
   })//recuperando el nombre del album 
    .then(respuesta => respuesta.json())
    .then(function(datosRespuesta) {
        nombreAlbum=document.querySelector("#Titulo h1")
       nombreAlbum.innerHTML= ""+datosRespuesta[0][2];
      
    });

    fetch("../php/recuperacionImagenes.php"
    ,{
        method: 'POST',
        headers:{
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({idAlbum:id_album})  
   }
   )
    .then(respuesta => respuesta.json())
    .catch(error => console.error('Error:', error))
    .then(function(datosRespuesta) {
     recuperaImagenes(datosRespuesta);
    });
}

function recuperaImagenes(matrizResultado){
          var contenedor=document.querySelector("#Imagenes");
    for(var i=0;i<matrizResultado.length;i++){
        let temporal;
    
        temporal= new URL(matrizResultado[i][2]);//let es para limitar el alcance de la variable
   
      var figure=document.createElement('figure');
      var imagen=document.createElement('img');
          imagen.setAttribute("src",""+temporal);
      var boton=document.createElement("button");
      var imagen2=document.createElement("img");
          imagen2.setAttribute("src","../css/img/x.png");
          boton.append(imagen2);
          figure.append(imagen,boton);
          contenedor.append(figure);
          boton.addEventListener("click",function (params) {
              eliminar(matrizResultado[i]);
          });
     
    }
}
function eliminar(datos) {
    
}
