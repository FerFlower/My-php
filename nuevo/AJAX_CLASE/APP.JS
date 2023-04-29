$(document).ready(function(){

    let editar = false;
    console.log('Jquery esta funcionando');
    $('#Resultado').hide();
    ObtenerProductos();



    $('#search').keyup(function(e){
        if($('#search').val()){
            let search = $('#search').val();
            $.ajax({
                url: 'Sistemas.php',
                type: 'POST',
                data: {search},
                success: function (response){
                    console.log(response);
                    let productos = JSON.parse(response);
                    console.log(productos);
                    
                    let template = '';
     
                    productos.forEach(producto => {
                         template += `<li>
                         ${producto.Nomb}
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
            Apel: $('#Apel').val(),
            DNI: $('#DNI').val(),
            Desc: $('#Desc').val()
        };

        let url = editar === false ? 'insertar.php' : 'Editando.php';
        console.log(url);
        console.log(postData);
       
        $.post(url, postData, function(response){
            console.log(response);
            ObtenerProductos();
            $('#formulario').trigger('reset');
            editar = false;
        });

        e.preventDefault();
    })
//////////////////////////////////////////////////////////////////////////////////////////////




// Listar Registros
//////////////////////////////////////////////////////////////////////////////////////////////
    function ObtenerProductos(){
        $.ajax({
            url: 'listar.php',
            type: 'GET',
            success: function (response){
               // console.log(response);
               let productos = JSON.parse(response);
               let template = '';
                productos.forEach(producto=>{
                    template += `<tr IdProducto="${producto.Id}">
                        <td style="  text-align: center; ">${producto.Id}</td>
                        <td style="  text-align: center; ">
                            <a href="#" class="EditarProducto" style="  text-align: center; ">${producto.Nomb}</a>
                        </td style="  text-align: center; ">
                        <td style="  text-align: center; ">${producto.Apel}</td>
                        <td style="  text-align: center; ">${producto.DNI}</td>
                        <td style="  text-align: center; ">${producto.Desc}</td>
                        <td style="  text-align: center; ">
                            <button class="EliminarProducto btn btn-danger" >
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
$(document).on('click', '.EliminarProducto',function(){

        if(confirm('Deseas Eliminar Producto')){
                //console.log('Click');
                // console.log($(this));
                // let element = $(this)[0];
                //  console.log(element);
                let element = $(this)[0].parentElement.parentElement;
                let id = $(element).attr('IdProducto');
                // console.log(id);
                $.post('Eliminar.php', {id}, function (response){
                //console.log(id);   
                //console.log(response);
                ObtenerProductos();
                })

        }
})



//////////////////////////////////////////////////////////////////////////////////////////////////////////
$(document).on('click', '.EditarProducto', function(){
  //  console.log('Editando');
                let element = $(this)[0].parentElement.parentElement;
                let id = $(element).attr('IdProducto');
                // console.log(id);
                $.post('Editar.php', {id}, function (response){
                    const producto = JSON.parse(response);
                    $('#Id').val(producto.Id);
                    $('#Nomb').val(producto.Nomb);
                    $('#Desc').val(producto.Desc);
                    $('#Apel').val(producto.Apel);
                    $('#DNI').val(producto.Dni);
                    editar = true;
                })
})


   

});