<?php
require_once ("Autoload.php");
$Id = $_POST['Id'];
$Nomb = $_POST['Nomb'];
$Apel = $_POST['Apel'];
$DNI = $_POST['DNI'];
$Desc = $_POST['Desc'];

        $objUsuarios = new Usuarios();
        
        $objUsuariose = new UsuariosE();
        $objUsuariose->setid($Id);
        $objUsuariose->setnombre($Nomb);
        $objUsuariose->setApellido($Apel);
        $objUsuariose->setDNI($DNI);
        $objUsuariose->setEstado($Desc);
        
        //Insertar Registro
        $insert = $objUsuarios->updateUser($objUsuariose);

?>