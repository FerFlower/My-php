<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "matricula"; 

try {

    $conexion = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    
    
    echo "Conexion Establecida";
    
    
    
    
    } catch ( PDOException $error) {
    
    echo "Conexion Erronea".$error;
    
    die('Error: ' . $error->GetMessage());
    
    }finally{
    
    
    
    
    $conexion = null;
    
    
    
    
    }


?>