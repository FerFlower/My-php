addEventListener('load',inicializarEvento,false);

function inicializarEvento(){
    for(var f=1 ; f<=5; f++){
        var ob = document.getElementById('enlace'+f);
        ob.addEventListener('click', presionEnlace,false);

    }
function presionEnlace(e){
    e.preventDefault();
    var url = e.target.getAttribute('href');
    cargarCliente(url);
}
var conexion1;
function cargarCliente(url){
    conexion1 = new XMLHttpRequest();
    conexion1.onreadystatechange = prosesarEvento;
    conexion1.open('GET',url,true);
    conexion1.send();
}
function prosesarEvento(){
    var info = document.getElementById('informacion');
    if(conexion1.readystate == 4){
        info.innerHTML = conexion1.responseText;
    }else if(conexion1.readystate == undefined){
        info.innerHTML = conexion1.responseText;
    }else{
        info.innerHTML = 'Cargando...';
       

    }
}
}