<!DOCTYPE html>
<html lang="es">
<head>
<link rel="icon" href="../css/img/icon3.ico">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="http://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/style.css">
   
    <title>Document</title>
</head>
<body id="ig">
<script>
    window.onload = function() {setTimeout(function() {document.getElementById('miDiv').style.display = 'none';}, 5000); }
  </script>
    <?php
    $nombre = $_GET['wwt:1'];
    $Dni = $_GET['wwt:2'];
    $Correo = $_GET['wwt:3'];

    $Aler = $_GET['wwt:ñ'];

    if ($Aler == 12) {
      echo '<div id="miDiv" class="alert alert-success">As ingresado correctmente </div>';
    } elseif ($Aler == 70) {
      echo ' <div id="miDiv" class="alert alert-success">Producto Registrado correctamente </div>';
    }

    ?>
     <form  method="post"> 
   <div>
    <h1 id="tiflex">
   
    Biembenido a tu cuenta de USER LOGIN 
   </h1>
   </div>
   <div id="Data">
    <ul id="subData">Biembenido a casa <?php echo $nombre ;?> </ul>
   </div>
   <div id="table">
    <ul id="Data1">
      Recueda que aca tenemos tus datos bien guardados
    </ul>
    <ul id="Data2">Tu Nombre es : <?php echo $nombre ;?></ul>
    <ul id="Data2">Tu correo es : <?php echo $Correo ;?></ul>
    <ul id="Data2">Tu DNi es : <?php echo $Dni ;?></ul>
    <input type="submit" value="Serrar Sesion" class="btn btn-primary" name="l" id="tr" />  
   
    
</div>
   

      
    </form>
  <?php
    if (!empty($_POST["l"])) {
      $datos = array('wwt:ñ' => 201);
      sleep(1);
      $query_string = http_build_query($datos);
      $nueva_url = "../pag.php?&";
      header('Location: ' . $nueva_url . $query_string);
    }
    ?>
</body>
</html>