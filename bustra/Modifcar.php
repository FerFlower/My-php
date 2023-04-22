<?php
include "modelo/conexion.php";
$Filtrar =$_GET['id'];
$sql= "SELECT 
  Nom_Productos ,
  Des_Productos ,
  Pre_Productos ,
  Cas_Productos 
 FROM  productos where Id_Productos=?";

$Resultado = $conexion->prepare($sql);
$Resultado->execute(array($Filtrar));


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"

    <title>Document</title>
</head>
<body>
    <form class="col-4 p-3 m-auto" method="post">

        <h3 class="text-center text-scondary">Registro de producto </h3>
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <?php 
        
        include "Controlador/modificar.php";
        while($registro=$Resultado->fetch(PDO::FETCH_ASSOC)){
        ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="iNom" value="<?=$registro['Nom_Productos']?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Descripcion </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="iDes" value="<?=$registro['Des_Productos']?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Precio </label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="iPre" value="<?=$registro['Pre_Productos']?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Cantidad </label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="iCan" value="<?=$registro['Cas_Productos']?>">
          </div>
          <?php
        }
          ?>

<button type="submit" class="btn btn-primary" name="l" value="ok">Modificar Producto</button>
    </form>
</body>
</html>