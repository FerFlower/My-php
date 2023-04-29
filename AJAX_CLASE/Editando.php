<?php
require_once ("Autoload.php");
$Id = $_POST['Id'];
$Nomb = $_POST['Nomb'];
$Desc = $_POST['Desc'];
$Cant = $_POST['Cant'];
$Prec = $_POST['Prec'];

        $objUsuarios = new Usuarios();
        
        $objUsuariose = new UsuariosE();
        $objUsuariose->setid($Id);
        $objUsuariose->setnombre($Nomb);
        $objUsuariose->setdescripcion($Desc);
        $objUsuariose->setcantidad($Cant);
        $objUsuariose->setprecio($Prec);
        
        //Insertar Registro
        $insert = $objUsuarios->updateUser($objUsuariose);

?>