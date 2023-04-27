<?php
require_once("Autoload.php");

class Cliente extends Conexion{
    private $conexion;
    public function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
        
    } 
    public function InsertarCliente($Cliente){
        try{
            $sql="INSERT INTO cliente(Nomb_cliente,Apel_Cliente,Dni_Cliente,Esta_Cliente) values(:NOMB, :APEL, :DNI, :ESTA)";
            $insert = $this->conexion->prepare($sql);
            $arrData= array(":NOMB"=>$Cliente->getnombre(),":DESC"=>$Cliente->getapellido(),"DNI"=>$Cliente->getdni(), ":ESTA"=>$Cliente->getestado());
            $resInsert = $insert->execute($arrData);
            $idInset=$this->conexion->lastIndertId();
            return $idInset;
        }catch (Exception $error){
            echo "Conexion Erronea".$error;
            echo "Linea del Error: ".$error->getLine();
            die('Error: '.$error->GetMenssage());
        }
    }
}
?>