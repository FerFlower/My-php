$(document).ready(function(){

    let editar = false;
    console.log('Jquery esta funcionando');
    $('#Resultado').hide();
    ObtenerClientes();



    $('#search').keyup(function(e){
        if($('#search').val()){
            let search = $('#search').val();
            $.ajax({
                url: 'Sistemas.php',
                type: 'POST',
                data: {search},
                success: function (response){
                    console.log(response);
                    let Clientes = JSON.parse(response);
                    console.log(Clientes);
                    
                    let template = '';
     
                    Clientes.forEach(Cliente => {
                         template += `<li>
                         ${Cliente.Nomb}
                         </li>`
                    });
                    $('#container').html(template);
                    $('#Resultado').show();
                }
            });
        }
    });


////////////////////////////////////////////////////////
    //insertar Y EDITAR  registro
    $('#formulario').submit(function(e){
        const postData = {
            Id: $('#Id').val(),
            Nomb: $('#Nomb').val(),
            Desc: $('#Desc').val(),
            Cant: $('#Cant').val(),
            Prec: $('#Prec').val()
        };

        let url = editar === false ? 'insertar.php' : 'Editando.php';
        console.log(url);
        console.log(postData);

        $.post(url, postData, function(response){
            console.log(response);
            ObtenerClientes();
            $('#formulario').trigger('reset');
            editar = false;
        });

        e.preventDefault();
    })
//////////////////////////////////////////////////////////////////////////////////////////////




// Listar Registros
//////////////////////////////////////////////////////////////////////////////////////////////
    function ObtenerClientes(){
        $.ajax({
            url: 'listar.php',
            type: 'GET',
            success: function (response){
               // console.log(response);
               let Clientes = JSON.parse(response);
               let template = '';
                Clientes.forEach(Cliente=>{
                    template += `<tr IdCliente="${Cliente.Id}">
                        <td>${Cliente.Id}</td>
                        <td>
                            <a href="#" class="EditarCliente">${Cliente.Nomb}</a>
                        </td>
                        <td>${Cliente.Desc}</td>
                        <td>${Cliente.Cant}</td>
                        <td>${Cliente.Prec}</td>
                        <td>
                            <button class="EliminarCliente btn btn-danger" >
                                Eliminar
                            </button>
                        </td>
                    </tr>`
                });
                $('#tabla').html(template);
            }
        })

    }
////////////////////////////////////////////////////////////////////////////////////////////////////




//ELIMINAR//////////////////////////////////////////////////////////////////////////////////////////////////
$(document).on('click', '.EliminarCliente',function(){

        if(confirm('Deseas Eliminar Cliente')){
                //console.log('Click');
                // console.log($(this));
                // let element = $(this)[0];
                //  console.log(element);
                let element = $(this)[0].parentElement.parentElement;
                let id = $(element).attr('IdCliente');
                // console.log(id);
                $.post('Eliminar.php', {id}, function (response){
                //console.log(id);   
                //console.log(response);
                ObtenerClientes();
                })

        }
})



//////////////////////////////////////////////////////////////////////////////////////////////////////////
$(document).on('click', '.EditarCliente', function(){
  //  console.log('Editando');
                let element = $(this)[0].parentElement.parentElement;
                let id = $(element).attr('IdCliente');
                // console.log(id);
                $.post('Editar.php', {id}, function (response){
                    const Cliente = JSON.parse(response);
                    $('#Id').val(Cliente.Id);
                    $('#Nomb').val(Cliente.Nomb);
                    $('#Desc').val(Cliente.Desc);
                    $('#Cant').val(Cliente.Cant);
                    $('#Prec').val(Cliente.Prec);
                    editar = true;
                })
})


   

});