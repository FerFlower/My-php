    function enviarDatos2() {
    // Obtener los datos del formulario
    var Nom = document.getElementById("Nom").value;
    var Dni = document.getElementById("Dni").value;
    var Cor = document.getElementById("Cor").value;
    var Con = document.getElementById("Con").value;
    if(Nom !== "" && Dni  !== "" && Cor !== "" && Con !== ""){
      window.location.href = window.location.href + "?&pt1=" + Nom + "&pt2=" + Dni+ "&pt3=" + Cor+ "&pt4=" + Con;
    }else{
        
      confirm("Te falta ingresar datos")
  
    }}


    function enviarDatos1() {
       
       // Obtener los datos del formulario
   
    var Cor = document.getElementById("idCorreo").value;
    var Con = document.getElementById("IdContraseña").value;
    if(Cor !== "" && Con !== ""){
      window.location.href = window.location.href +"?&yu3=" + Cor+ "&yu4=" + Con;
    }else{
      confirm("Te falta ingresar datosdd")
  
    }}
   