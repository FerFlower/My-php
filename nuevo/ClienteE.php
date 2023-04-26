<?php
require_once("Autoload.php");
class ClienteE{
    private $Id;
    private $Nomb;
    private $Apel;
    private $Dni;
    private $Esta;
    public function __construct(){

    }
public function setid($ID){
$this->Id = $ID;
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
 public function setapellido ($Apellido){
    $this->Apel =$Apellido;
 }
 public function getapellido (){
    return $this->Apel;
 }
 public function setdni ( $DNi){
    $this->Dni= $DNi;
 }
 public function getdni (){
    return $this->Dni;
 }
 public function setestado ($Etasdo){
    $this->Esta=$Etasdo;
 }
 public function getestado (){
    return $this->Esta;
 }



}


?>