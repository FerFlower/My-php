<?php
require_once ("Autoload.php");
$objClientee = new ClienteE();
$objClientee->setnombre(1210);
$objClientee->setapellido(1310);
$objClientee->setdni(1410);
$objClientee->setestado(1510);

$objCliente= new Cliente();
$inset = $objcliente->InsertarCliente($objclientee);


?>