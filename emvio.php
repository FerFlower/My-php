<?php

$id="123";
$Nom="324efr";
$Des="awdaw";
$Pre=1232;
$Can=1230;

// Realizar validación y sanitización de datos si es necesario

// Establecer la conexión con MySQL
$servername = "localhost"; // Nombre del servidor
$username = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$dbname = "matricula"; // Nombre de la base de datos

$conn = mysqli_connect($servername, $username, $password, $dbname);


// Preparar la consulta SQL "productos" sub dato de matricula
$sql = "INSERT INTO productos VALUES ('$id','$Nom','$Des','$Pre','$Can')";
$stmt = mysqli_query($conn, $sql);



?>