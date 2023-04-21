/*function enviarDatos() {
    var xhr = new XMLHttpRequest(); // Crear una instancia de XMLHttpRequest

    // Configurar la petición POST
    xhr.open("POST", "php/registrar.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Obtener los datos del formulario
    var  a1= document.getElementById("1").value;
  var a2 = document.getElementById("2").value;
  var a3= document.getElementById("3").value;
  var a4 = document.getElementById("4").value;
  xmlhttp.send("1=" + encodeURIComponent(a1) + "&2=" + encodeURIComponent(a2) + "&3=" + encodeURIComponent(a3) + "&4=" + encodeURIComponent(a4));
  

    // Crear la cadena de datos codificada para enviar en la solicitud
   
    xhr.send(datos);

    // Manejar la respuesta
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        // Aquí se puede manejar la respuesta del servidor
        console.log(xhr.responseText);
      }
    };
  }*/

  $(document).ready(function() {
      $('#loginform').submit(function(e) {
          e.preventDefault();
          $.ajax({
              type: "POST",
              url: '../php/contatibilidad.php',
              data: $(this).serialize(),
              success: function(response)
              {
                  var jsonData = JSON.parse(response);
                  // user is logged in successfully in the back-end 
                  // let's redirect 
                  if (jsonData.success == "1")
                  {
                      location.href = 'http://localhost/My-php/doc/pag1.html';
                  }
                  else
                  {
                    
                      alert('Invalid Credentials!');
                  }
             }
         });
       });
  });
 