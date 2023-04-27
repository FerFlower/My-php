<?php
require_once("Autoload.php");

class ClienteE{
    private $CODI_Factura;
    private $Nombre_Factura;
    private $Cliente_Factura;
    private $DNI_Factura;
    private $Total_Factura;
    private $VTotal_Factura;


   // public function __construct(){
    //}
    
    public function __construct( ){

    }
    
  


     

public function setCODI_Factura($CODI_Factura){
$this->CODI_Factura=$CODI_Factura;
} 
public function getCODI_Factura(){
return $this->CODI_Factura;
}     
public function setNombre_Factura($Nombre_Factura){
$this->Nombre_Factura=$Nombre_Factura;
} 
public function getNombre_Factura(){
return $this->Nombre_Factura;
}     
public function setCliente_Factura($Cliente_Factura){
$this->Cliente_Factura=$Cliente_Factura;
} 
public function getCliente_Factura(){
return $this->Cliente_Factura;
}     
public function setDNI_Factura($DNI_Factura){
$this->DNI_Factura=$DNI_Factura;
} 
public function getDNI_Factura(){
return $this->DNI_Factura;
}     
public function setTotal_Factura($Total_Factura){
$this->Total_Factura=$Total_Factura;
$this->VTotal_Factura=$Total_Factura*1.18;
} 
public function getTotal_Factura(){
    return $this->Total_Factura;
    }
public function getVTotal_Factura(){
return $this->VTotal_Factura;
}

}
?>
