<?php
require_once ("Autoload.php");

if(isset($_POST['id'])){
    $Filtrar = $_POST['id'];
    echo $Filtrar;
    $objUsuarios = new Usuarios();
    $objUsuarios->deleteUser($Filtrar);
}

?>