<?php
require_once("Autoload.php");

class UsuariosE{
    private $Id;
    private $Nomb;
    private $Desc;
    private $Cant;
    private $Prec;

    public function __construct(){

    }

    public function setid ($Id){
      $this->Id = $Id;
  
  }
  
  public function getid (){
      return $this->Id;
  
  }


    public function setnombre ($Nombre){
      $this->Nomb = $Nombre;
  
  }
  
  public function getnombre (){
      return $this->Nomb;
  
  }

  public function setdescripcion ($Descripcion){
    $this->Desc = $Descripcion;

}

public function getdescripcion (){
    return $this->Desc;

}

public function setcantidad ($Cantidad){
  $this->Cant = $Cantidad;

}

public function getcantidad (){
  return $this->Cant;

}

public function setprecio ($Precio){
  $this->Prec = $Precio;

}

public function getprecio (){
  return $this->Prec;

}


}

?>