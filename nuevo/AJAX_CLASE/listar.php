<?php
require_once ("Autoload.php");
    $objUsuarios = new Usuarios();
    $jsonstring =  $objUsuarios->obtenerRegistros();
    echo $jsonstring;
?>