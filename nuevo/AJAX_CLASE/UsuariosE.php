<?php
require_once("Autoload.php");

class UsuariosE{
    private $Id;
    private $Nomb;
    private $Apel;
    private $Dni;
    private $Esta;

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

  public function setApellido ($Apellido){
    $this->Apel = $Apellido;

}

public function getApellido (){
    return $this->Apel;

}

public function setDNI ($DNI){
  $this->Dni = $DNI;

}

public function getDNI (){
  return $this->Dni;

}

public function setEstado ($Estado){
  $this->Esta = $Estado;

}

public function getEstado (){
  return $this->Esta;

}


}

?>