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
        $sql="INSERT INTO productos(Nomb_Producto, Desc_Producto, Prec_Producto, Cant_Producto) values(:NOMB, :DESC, :PREC, :CANT)";

        $insert = $this->conexion->prepare($sql);
        $arrData= array(":NOMB"=>$usuariose->getnombre(), ":DESC"=>$usuariose->getdescripcion(), ":PREC"=>$usuariose->getprecio(), ":CANT"=>$usuariose->getcantidad());
        $resInsert = $insert->execute($arrData);
      //  $resultado->execute(array(":NOMB"=>$Nombre, ":DESC"=>$Descripcion, ":PREC"=>$Precio, ":CANT"=>$Cantidad));
        $idInsert =  $this->conexion->lastInsertId();

        return $idInsert;
      } catch (Exception $error) {
                   echo "Conexion Erronea".$error;
            die('Error: ' . $error->GetMessage());
          echo "Linea del Error: ".$error->getLine();
      }
    }

    public function obtenerRegistros(){

      $sql="SELECT Id_Producto, Nomb_Producto, Desc_Producto, Prec_Producto, Cant_Producto from productos";
    
      $resultado = $this->conexion->prepare($sql);
      $resultado->execute();

      $json = array();
      while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
          $json[] = array(
              'Id' => $registro['Id_Producto'],
              'Nomb' => $registro['Nomb_Producto'],
              'Desc' => $registro['Desc_Producto'],
              'Cant' =>$registro['Cant_Producto'],
              'Prec' =>$registro['Prec_Producto']
          ); 
      }
      $jsonstring = json_encode($json);
      return $jsonstring;
      
    }

public function updateUser($usuariose){
        $sql="UPDATE productos SET Nomb_Producto=:NOMB,
                                   Desc_Producto=:DESC,
                                   Prec_Producto=:PREC,
                                   Cant_Producto=:CANT
                                   WHERE Id_Producto=:ID";
        $update = $this->conexion->prepare($sql);
        $arrData= array(":NOMB"=>$usuariose->getnombre(), ":DESC"=>$usuariose->getdescripcion(), ":PREC"=>$usuariose->getprecio(), ":CANT"=>$usuariose->getcantidad(), ":ID"=>$usuariose->getid());
        $resExcecute = $update->execute($arrData);
        return $resExcecute;

}


public function getProducto($search){
  $sql="SELECT Id_Producto, Nomb_Producto, Desc_Producto, Prec_Producto, Cant_Producto from productos where Nomb_Producto like '$search%'";
  $resultado = $this->conexion->prepare($sql);
  $resultado->execute();

  $json = array();
  while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
      $json[] = array(
          'Id' => $registro['Id_Producto'],
          'Nomb' => $registro['Nomb_Producto'],
          'Desc' => $registro['Desc_Producto'],
          'Cant' =>$registro['Cant_Producto'],
          'Prec' =>$registro['Prec_Producto']
      ); 
  }
  $jsonstring = json_encode($json);
  return $jsonstring;   
}

public function Editar (int $id){
  $sql="SELECT Id_Producto, Nomb_Producto, Desc_Producto, Prec_Producto, Cant_Producto from productos where Id_Producto = '$id'";    
  $resultado = $this->conexion->prepare($sql);
  $resultado->execute();
  
              $json = array();
              while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                  $json[] = array(
                      'Id' => $registro['Id_Producto'],
                      'Nomb' => $registro['Nomb_Producto'],
                      'Desc' => $registro['Desc_Producto'],
                      'Cant' =>$registro['Cant_Producto'],
                      'Prec' =>$registro['Prec_Producto']
                  ); 
              }
              $jsonstring = json_encode($json[0]);
              return $jsonstring;

}




public function deleteUser(int $id){
  $sql = "DELETE FROM PRODUCTOS where Id_Producto = ?";
  $arrWhere = array($id);
  $delete = $this->conexion->prepare($sql);
  $del = $delete->execute($arrWhere);
  return $del;   
}



public function actualizar(int $Id, string $Nombre, string $Descripcion, int $Cantidad, int $Precio){

  $Id = $_POST["Id"];
  $Nombre = $_POST["Nomb"];
  $Descripcion = $_POST["Desc"];
  $Cantidad = $_POST["Cant"];
  $Precio = $_POST["Prec"];                  
/*   $sql="UPDATE PRODUCTOS SET  Nomb_Producto=?,
                              Desc_Producto=?,
                              Prec_Producto=?,
                              Cant_Producto=?
                              where Id_Producto=?";*/

  $sql="UPDATE PRODUCTOS SET  Nomb_Producto = :NOMB,
                              Desc_Producto = :DESC,
                              Prec_Producto = :PREC,
                              Cant_Producto = :CANT
                              where Id_Producto = :ID";

  $resultado = $conexion->prepare($sql);
  $resultado->execute(array(":NOMB"=>$Nombre, ":DESC"=>$Descripcion, ":PREC"=>$Precio, ":CANT"=>$Cantidad, ":ID"=>$Id));

//   $resultado->execute(array($Nombre,$Descripcion,$Precio,$Cantidad,$Id));
$resultado->errorInfo();
  echo "Registro Modificado";
  $resultado->closeCursor();              

  echo'<div class="alert alert-success"> Producto Registrado correctamente </div>';
  header("location:Index.php");
  
}
}

?>