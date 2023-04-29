<?php
require_once ("Autoload.php");
$id = $_POST['id'];
if(isset($_POST['id'])){
$objUsuarios = new Usuarios();
$jsonstring =  $objUsuarios->Editar($id);
echo $jsonstring;
    
}

?>