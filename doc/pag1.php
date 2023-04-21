<?php

header('Content-Type: text/html; charset=utf-8');

if ($_REQUEST['cod'] == 1) {
    ?>
       
       <h1 id="d">Iniciar sesion</h1>
            <div id="register">
           <form id="regi"><br>
            <div class="mb-3" id="to1">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Tu Nombre deve ser real</div>
              </div>
              <div class="mb-3" id="to2">
                <label for="exampleInputEmail1" class="form-label">DNI</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Maximo 8 digitos</div>
              </div><br><br>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ingresa tu correo</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Tu correo debe contener los sigonos "@"</div>
          </div><br>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tu contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
          
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        </div>
    
          


    <?php

}
if ($_REQUEST['cod'] == 2) {
    

    ?>
<h1 id="d">Iniciar sesion</h1>
<div id="login">
           <form id="regi"><br>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ingresa tu correo</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Tu correo debe contener los sigonos "@"</div>
          </div><br>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tu contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
          
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        </div>
        <?php

}
if ($_REQUEST['cod'] == 3) {
    echo "emvio 3";


    ?>
    <h1 id="d">Lista de registros</h1>
            <div id="regi">
          


              <table class="table table-borderless" id="red">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col" id="espas">Correo</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edad</th>
                    <th scope="col"></th>
                    <th scope="col"></th>

                  </tr>
                </thead>
               <!--De aqui copiar--> <tbody>
                  <tr>
                    <th scope="row">
                           1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
               <!--Asta aqui-->   
                </tbody>
              </table>



        <?php

}


?>