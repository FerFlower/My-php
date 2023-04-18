<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "estudiantes"; 

try {$conexion = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password); 
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET utf8");
    } catch ( PDOException $error) {
    echo "Conexion Erronea".$error;
    die('Error: ' . $error->GetMessage());}
?>