<!doctype html>
<html lang="es" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="bustra.css">
  <script src="http://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <script>

    function eliminar() {

      var respuesta = confirm("Estas seguro que deseas eliminar?");

      return respuesta;

    }

  </script>
  <h1 style=" text-align: center;padding: 30px;">Registro de Producto</h1>
  <?php
  include "modelo/conexion.php";
  include "Controlador/eliminar.php";
  ?>
  <?php
  include "modelo/conexion.php";
  include "Controlador/registrar.php";
  ?>
  <div id="to">


    <h1 id="te">Registro de Producto</h1>



    <form method="post">
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

      <input type="submit" class="btn btn-primary" name="l"> </input>
    </form>
  </div>
  <div id="tablap">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Precio</th>
          <th scope="col">Cantidad</th>
          <th scope="col"></th>
         
        </tr>
      </thead>


      <?php 

   include "modelo/conexion.php";
   
   $sql= "SELECT Id_Productos ,Nom_Productos ,Des_Productos ,Pre_Productos ,Cas_Productos FROM productos";
   
   $Resultado = $conexion->prepare($sql);
   $Resultado->execute();
   
    while($registro=$Resultado->fetch(pdo::FETCH_ASSOC)){
      
        
     ?>


      <tbody class="table-group-divider">
        <tr>
          <th scope="row">
            <?php echo $registro['Id_Productos'];?>
          </th>
          <td>
            <?php  echo $registro['Nom_Productos']; ?>
          </td>
          <td>
            <?php  echo $registro['Des_Productos']; ?>
          </td>
          <td>
            <?php  echo $registro['Pre_Productos']; ?>
          </td>
          <td>
            <?php  echo $registro['Cas_Productos']; ?>
          </td>
          <td>
            <a href="Modifcar.php?id=<?= $registro['Id_Productos']?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
        
            <a onclick="return eliminar()" href="Bustrap.php?id=<?=$registro['Id_Productos']?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
          </td>

        </tr>

      </tbody>
      <?php
     }
    
?>
    </table>
    <div id="boto">

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>