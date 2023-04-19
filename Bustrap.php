<!doctype html>
<html lang="es" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="bustra.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1 id="te">Registro de Producto</h1>

<div id="to">

    <form action="php_conexion copy 2.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"> Nombre</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Descripcion </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="2">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Precio </label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="3">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Cantidad </label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="4">
          </div>
        
        <input type="submit" class="btn btn-primary"> </input>
      </form>
    </div>

    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>