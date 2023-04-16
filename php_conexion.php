<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "matricula"; 

try {

    $conexion = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET utf8");
    $sql= "SELECT Id_Productos ,Nom_Productos ,Des_Productos ,Pre_Productos ,Cas_Productos FROM productos";
   
   $Resultado = $conexion->prepare($sql);
   $Resultado->execute();
   
    while($registro=$Resultado->fetch(pdo::FETCH_ASSOC)){
        echo "<br><br><br>Id    : ".$registro['Id_Productos'].
        "<br> Nombre Productos : ".$registro['Nom_Productos'].
        "<br> Descripcion producto : ".$registro['Des_Productos'].
        "<br> Precio Productos : ".$registro['Pre_Productos'].
        "<br> Cantidad Productos : ".$registro['Cas_Productos']."<br><br>
        ";
     }
    $Resultado->closeCursor();
    echo "Conexion Establecida";
    
    
    
    
    } catch ( PDOException $error) {
    
    echo "Conexion Erronea".$error;
    
    die('Error: ' . $error->GetMessage());
    
    }finally{
    
    
    
    
    $conexion = null;
    
    
    
    
    }


?>