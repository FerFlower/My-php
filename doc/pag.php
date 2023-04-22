<!doctype html>
<head>
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="js/funciones.js"></script>
</head>
<body><header id="de">
    <div id="logo"></div>
    <div id="Lor">
    <h1 id="de">User Login</h1>
    
</div><div id="logo2"></div>
    <div id="menu_clientes">
        <p><a id="enlace1" href="pag1.php?cod=1"  > Registrarse</a></p>
        <p><a id="enlace2" href="pag1.php?cod=2"  > Iniciar Sesion</a></p>
        <p><a id="enlace3" href="pag1.php?cod=3"  > Ver Registro</a></p>
       
    </div></header>
	<script>
		window.onload = function() {setTimeout(function() {document.getElementById('miDiv').style.display = 'none';}, 5000); }
	</script>
    <script src="http://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
    <?php
 if (!empty($_GET["wwt:ñ"])) {
   $Aler=$_GET['wwt:ñ'];
  if($Aler==201){
    echo '<div id="miDiv" class="alert alert-success">Has serrado secion correctamente</div>';
  }}
  ?>
  <script type="text/javascript" src="js/pase.js"></script>
          <?php 
include"php/registrar.php";
          ?>
           <?php 
include "php/filtro.php" ;        
         ?>
    <div id="informacion">
      
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        </div>
        
    </div>
</body>
</html>
