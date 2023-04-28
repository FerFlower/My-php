<?php
require_once ("Autoload.php");


if (isset($_POST['Nomb'])){
   $Nomb = $_POST['Nomb'];
   $Desc =  $_POST['Desc'];
   $Cant = $_POST['Cant'];
   $Prec = $_POST['Prec'];

   $objUsuarios = new Usuarios();
    
   $objUsuariose = new UsuariosE();
   $objUsuariose->setnombre($Nomb);
   $objUsuariose->setdescripcion($Desc);
   $objUsuariose->setcantidad($Cant);
   $objUsuariose->setprecio($Prec);
   
   $insert = $objUsuarios->InsertarUsuario($objUsuariose);

}


?>