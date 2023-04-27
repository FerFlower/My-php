<?php
require_once("Autoload.php");

class Cliente extends Conexion{

    private $conexion;

    public function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function InsertarCliente($clientee){
      try {
        $sql="INSERT INTO factura(CODI_Factura ,Nomb_Factura ,Clien_Factura ,DNI_Factura ,Tota_Factura ,VTot_Factura) values(:Npl1,:Npl2,:Npl3,:Npl4,:Npl5,:Npl6)";

        $insert = $this->conexion->prepare($sql);
        $arrData= array(":Npl1"=>$clientee->getCODI_Factura() ,":Npl2"=>$clientee->getNombre_Factura() ,":Npl3"=>$clientee->getCliente_Factura() ,":Npl4"=>$clientee->getDNI_Factura() ,":Npl5"=>$clientee->getTotal_Factura() ,":Npl6"=>$clientee->getVTotal_Factura() );

        $resInsert = $insert->execute($arrData);
        $idInsert =  $this->conexion->lastInsertId();

        return $idInsert;
      } catch (Exception $error) {
          echo "Conexion Erronea".$error;
          echo "Linea del Error: ".$error->getLine();
          die('Error: ' . $error->GetMessage());
      }
    }
}


?>
