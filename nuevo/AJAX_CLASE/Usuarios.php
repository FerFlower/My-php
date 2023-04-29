<?php
require_once("Autoload.php");

class Usuarios extends Conexion{

    private $conexion;

    public function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function InsertarUsuario($usuariose){
      try {
     $sql="INSERT INTO cliente(Nomb_Cliente,Apel_Cliente,Dni_Cliente,Esta_Cliente) values(:NOMB, :ESTA, :APEL,:DNI )";


        $insert = $this->conexion->prepare($sql);
        $arrData= array(":NOMB"=>$usuariose->getnombre(),":APEL"=>$usuariose->getApellido(),"DNI"=>$usuariose->getDNI(),":ESTA"=>$usuariose->getEstado());
        $resInsert = $insert->execute($arrData);
      //  $resultado->execute(array(":NOMB"=>$Nombre, ":DESC"=>$Apellido, ":PREC"=>$Estado, ":CANT"=>$DNI));
        $idInsert =  $this->conexion->lastInsertId();

        return $idInsert;
      } catch (Exception $error) {
          echo "Conexion Erronea".$error;
          echo "Linea del Error: ".$error->getLine();
          die('Error: ' . $error->GetMessage());

      }
    }




    
    public function obtenerRegistros(){

      $sql="SELECT Id_Cliente, Nomb_Cliente,Apel_Cliente,Dni_Cliente,Esta_Cliente from cliente";
    
      $resultado = $this->conexion->prepare($sql);
      $resultado->execute();

      $json = array();
      while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
          $json[] = array(
              'Id' => $registro['Id_Cliente'],
              'Nomb' => $registro['Nomb_Cliente'],
              'Apel' => $registro['Apel_Cliente'],
              'DNI' =>$registro['Dni_Cliente'],
              'Desc' =>$registro['Esta_Cliente']
          ); 
      }
      $jsonstring = json_encode($json);
      return $jsonstring;
      
    }




public function updateUser($usuariose){
        $sql="UPDATE cliente SET Nomb_Cliente=:NOMB,
                                   Apel_Cliente=:APEL,
                                   Dni_Cliente=:DNI,
                                  Esta_Cliente=:DESC
                                   WHERE Id_Cliente=:ID";
        $update = $this->conexion->prepare($sql);
        $arrData= array(":NOMB"=>$usuariose->getnombre(),":APEL"=>$usuariose->getApellido(),"DNI"=>$usuariose->getDNI(), ":DESC"=>$usuariose->getEstado(),":ID"=>$usuariose->getid());
        $resExcecute = $update->execute($arrData);
        return $resExcecute;

}


public function getProducto($search){
  $sql="SELECT Id_Cliente, Nomb_Cliente, Apel_Cliente, Dni_Cliente,Esta_Cliente from cliente where Nomb_Cliente like '$search%'";
  $resultado = $this->conexion->prepare($sql);
  $resultado->execute();

  $json = array();
  while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
      $json[] = array(
          'Id' => $registro['Id_Cliente'],
          'Nomb' => $registro['Nomb_Cliente'],
          'Apel' => $registro['Apel_Cliente'],
          'Desc' =>$registro['Esta_Cliente'],
          'Dni' =>$registro['Dni_Cliente']
      ); 
  }
  $jsonstring = json_encode($json);
  return $jsonstring;   
}

public function Editar (int $id){
  $sql="SELECT Id_Cliente, Nomb_Cliente, Apel_Cliente, Dni_Cliente,Esta_Cliente from cliente where Id_Cliente = '$id'";    
  $resultado = $this->conexion->prepare($sql);
  $resultado->execute();
  
              $json = array();
              while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                  $json[] = array(
                      'Id' => $registro['Id_Cliente'],
                      'Nomb' =>$registro['Nomb_Cliente'],
                      'Apel' =>$registro['Apel_Cliente'],
                      'Desc' =>$registro['Esta_Cliente'],
                      'Dni' =>$registro['Dni_Cliente']
                  ); 
              }
              $jsonstring = json_encode($json[0]);
              return $jsonstring;

}




public function deleteUser(int $id){
  $sql = "DELETE FROM cliente where Id_Cliente = ?";
  $arrWhere = array($id);
  $delete = $this->conexion->prepare($sql);
  $del = $delete->execute($arrWhere);
  return $del;   
}



public function actualizar(int $Id, string $Nombre, string $Apellido, int $DNI, string $Estado){

  $Id = $_POST["Id"];
  $Nombre = $_POST["Nomb"];
  $Apellido = $_POST["Desc"];
  $DNI = $_POST["Cant"];
  $Estado = $_POST["Prec"];                  
/*   $sql="UPDATE cliente SET  Nomb_Cliente=?,
                              Apel_Cliente=?,
                              Dni_Cliente=?,
                             Esta_Cliente=?
                              where Id_Cliente=?";*/

  $sql="UPDATE cliente SET  Nomb_Cliente = :NOMB,
                              Apel_Cliente = :APEL,
                              Dni_Cliente = :DNI,
                             Esta_Cliente = :DESC
                              where Id_Cliente = :ID";

  $resultado = $conexion->prepare($sql);
  $resultado->execute(array(":NOMB"=>$Nombre, ":APEL"=>$Apellido, ":DNI"=>$Estado, ":DESC"=>$DNI, ":ID"=>$Id));

//   $resultado->execute(array($Nombre,$Apellido,$Estado,$DNI,$Id));
$resultado->errorInfo();
  echo "Registro Modificado";
  $resultado->closeCursor();              

  echo'<div class="alert alert-success"> Producto Registrado correctamente </div>';
  header("location:Index.php");
  
}
}

?>