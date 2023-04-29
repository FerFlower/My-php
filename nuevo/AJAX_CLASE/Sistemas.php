<?php
require_once ("Autoload.php");

$search = $_POST['search'];

if(!empty($search)){
    $objUsuarios = new Usuarios();
    $jsonstring =   $objUsuarios->getProducto($search);
     echo $jsonstring;
}

?>