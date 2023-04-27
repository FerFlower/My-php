<?php
class Conexion{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "factura";
    private $conect;

    public function __construct(){
        $connectionString = "mysql:host=".$this->host.";dbname=".$this->db.";charset-utf8";
        try {
            $this->conect = new PDO($connectionString,$this->user,$this->pass);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);         
        } catch (PDOException $error) {
         //   echo "Conexion Erronea".$error;
          //  die('Error: ' . $error->GetMessage());
            echo "Linea del Error: ".$error->getLine();
        }
    }
    public function connect(){
        return $this->conect;
    }
}
?>