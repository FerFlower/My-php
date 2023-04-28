$(document).ready(function(){
    console.log("Estoy trabajando con Jquery")

    $('#formulario').submit(function(e){
        const postData = {
            Id: $('#Id').val(),
            Nomb: $('#Nomb').val(),
            Desc: $('#Desc').val(),
            Cant: $('#Cant').val(),
            Prec: $('#Prec').val()


        }
        $.post('incertar.php',postData,function(response){
            console.log(response);
            $('#formuulario').trigger('reset');

        });

        e.preventDefault();

    });
});