<?php
require_once ("Autoload.php");

$objClientee = new ClienteE();
$objClientee-> setCODI_Factura("re35r34fs"); 
$objClientee-> setNombre_Factura("Quispe_Ref_home"); 
$objClientee-> setCliente_Factura("Diego");
$objClientee-> setDNI_Factura(1234623); 
$objClientee-> setTotal_Factura(15.14); 


//Insertar Registro
$objCliente = new Cliente();
$insert = $objCliente->InsertarCliente($objClientee);

?>