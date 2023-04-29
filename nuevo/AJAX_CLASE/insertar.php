<?php
require_once ("Autoload.php");


if (isset($_POST['Nomb'])){
   $Nomb = $_POST['Nomb'];
   $Desc =  $_POST['Apel'];
   $Apel = $_POST['DNI'];
   $DNI = $_POST['Desc'];

   $objUsuarios = new Usuarios();
    
   $objUsuariose = new UsuariosE();
   $objUsuariose->setnombre($Nomb);
   $objUsuariose->setApellido($Apel);
   $objUsuariose->setDNI($DNI);
   $objUsuariose->setEstado($Desc);

   
   
   $insert = $objUsuarios->InsertarUsuario($objUsuariose);

}


?>