function mensaje(){

    swal("Introdusca su Nombre para emviar el mensaje", {
      content: "input",
      
    })
    .then((value) => {
      swal(`--->${value}<---` ,{
        title: "Estas seguro que te llamas asi? ",
  
  icon: "info",
  buttons: ["No","Si"],
  dangerMode: true,
  })
  .then((willDelete) => {
  if (willDelete) {
    swal("Su comentario as sido enviado", {
      icon: "success",
        buttons: "Gracias",
      
    });
  } else {
    swal("De acuerdo, su mensage se cancelo",{icon:'error',
    buttons: "Gracias",
  });
  }
  })
    });
  }
  
  function fncEnviar(){
swal({
    title: "Ay un probema!! Desea esperar?",
text: "La pagina wed todavia esta en fase -BETA-",
icon: "warning",
buttons: ["No","Si"],
dangerMode: true,
})
.then((willDelete) => {
if (willDelete) {
swal("Gracias por su comprencio profe, me falto tiempo para acabarlo.", {
  icon: "success",
    buttons: "ya",
  
});
} else {
swal("No se pudo ejecutar. \nPor fabor espere que termine la fase -BETA-.",{icon:'error',
buttons: "De acuerdo",
});
}
})}
