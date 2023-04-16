<?php
if($_POST){
$Numero1= $_POST['1'];
$Numero2= $_POST['2'];
$Numero3= $_POST['3'];
$Numero4= $_POST['4'];
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "matricula"; 

try {

    $conexion = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET utf8");
    $sql= "INSERT INTO productos (
        Nom_Productos ,
        Des_Productos ,
        Pre_Productos ,
        Cas_Productos 
        )VALUES (:01i,:02i,:03i,:04i)";
   
   $Resultado = $conexion->prepare($sql);
   $Resultado->execute(array(":01i"=>$Numero1,":02i"=>$Numero2,":03i"=>$Numero3,":04i"=>$Numero4));

   echo "Regisro embiado";
    $Resultado->closeCursor();
    
    
   
    
    
    } catch ( PDOException $error) {
         echo$error->getCode();
    echo "line del error: ".$error->getLine();


    echo "Conexion Erronea".$error;
    
    die('Error: ' . $error->GetMessage());
    
    }finally{
    
    
    
    
    $conexion = null;
    
    
    
    
    }}


?>